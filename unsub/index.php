<?php
$msg = '';
$email = '';
function clean_text($string)
{
	$string = trim($string);
	$string = stripslashes($string);
	$string = htmlspecialchars($string);
	return $string;
}

define('ROOTPATH', dirname(__FILE__));
if(isset($_POST["submit"])) {

	if(empty($_POST["email"])){
		$msg = '<label class="text-danger">Please Enter your Email</label>';
	} else {
		$email = clean_text($_POST["email"]);
		if(!filter_var($email, FILTER_VALIDATE_EMAIL))
		{
			$msg = '<label class="text-danger">Invalid email format</label>';
		}
	}
	if($msg == ''){
		$file_name = 'unsubscribe_list.csv';
		$handle = fopen(ROOTPATH.'/'.$file_name, 'a');
		$row_count = count(file(ROOTPATH.'/'.$file_name));
		if($row_count > 0){
			$row_count = ++$row_count;
		}else{
			$row_count = 1;
		}
		$data = array(
			$row_count,
			$_POST["email"],
			date('d-m-Y')
		);
		fputcsv($handle, $data);
		fclose($handle);
		$msg = '<label class="text-success">Submitted</label>';
		$email = '';
	}
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		<h2></h2>
		<form method="post">
			
			<div class="form-group">
				<p class="text-center">To unsubscribe to our mailing list, please enter your email address below</p>
				<label class="control-label col-sm-2" for="email">Email:</label>
				<div class="col-sm-10">
					<input type="text" class="form-control" id="email" placeholder="Enter Email" name="email">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<br>
					<input type="submit" name="submit" class="btn btn-default" value="Submit">
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<?php echo @$msg; ?>
				</div>
			</div>
		</form>
	</div>

</body>
</html>


