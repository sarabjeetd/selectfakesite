<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $quote_year = $_POST["quote_year"];

    $quote_make = $_POST["quote_make"];

    $quote_mileage = $_POST["quote_mileage"];

    $quote_model = $_POST["quote_model"];

    $quote_phone = $_POST["quote_phone"];

    $quote_first_name = $_POST["quote_first_name"];

    $quote_last_name = $_POST["quote_last_name"];

    $quote_email = $_POST["quote_email"];

    $quote_zipcode = $_POST["quote_zipcode"];

    $messages = '<!DOCTYPE html>

<html>

<head>

    <title>INSTANT FREE QUOTE FOR YOUR CAR</title>

    <style type="text/css">

        p{

            margin: 0;

        }

    </style>

</head>

<body>

    <table border="0" cellpadding="1" cellspacing="1" style="width:600px; margin: 0 auto;">

        <tbody>

            <tr>

                <td>

                   <strong style="margin: 10px 0 0;"><u>Full Name: </u></strong> '.$quote_first_name.'

                   <br>

                   <br>

                   <strong style="margin: 10px 0 0;"><u>Last Name: </u></strong> '.$quote_last_name.'

                   <br>

                   <br>

                   <strong style="margin: 10px 0 0;"><u>Email: </u></strong> '.$quote_email.'

                   <br>

                   <br>

                   <strong style="margin: 10px 0 0;"><u>Phone: </u></strong> '.$quote_phone.'

                   <br>

                   <br>


                   <strong style="margin: 10px 0 0;"><u>Zip Code: </u></strong> '.$quote_zipcode.'

                   <br>

                   <br>

                   <strong style="margin: 10px 0 0;"><u>Year: </u></strong> '.$quote_year.'

                   <br>

                   <br>

                   <strong style="margin: 10px 0 0;"><u>Make: </u></strong> '.$quote_make.'

                   <br>

                   <br>

                   <strong style="margin: 10px 0 0;"><u>Model: </u></strong> '.$quote_model.'

                   <br>

                   <br>

                   <strong style="margin: 10px 0 0;"><u>Mileage: </u></strong> '.$quote_mileage.'

                   <br>

                   <br>

                </td>

            </tr>

        </tbody>

    </table>

</body>

</html>';





    $receiver = "leads@selectautoprotect.com";

 

    $subject = "Quote Email From User";

    $email_headers = "From: SelectAutoProtect <quote@selectautoprotect.com>";

    $email_headers .= 'MIME-Version: 1.0' . "\r\n";

    $email_headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

   

    if (mail($receiver, $subject, $messages, $email_headers)) {

        echo "<h4>Thank You! Your Message has been sent</h4>
        <button type='button' class='close_model btn btn-primary form-btn mt-3'>Close</button>
        ";

    } else {

        echo "Oops! Something went wrong and we couldn't send your Message.";

    }

} else {

    echo "There was a problem with your submission, please try again.";

}

$curl = curl_init();

//CURLOPT_URL => "https://new.vanillasoft.net/web/post.aspx?id=75781",

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://new.vanillasoft.net/web/post.aspx?id=97520",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "POST",
  CURLOPT_POSTFIELDS => array(
    'make' => $quote_make,
    'mileage' => $quote_mileage,
    'model' => $quote_model,
    'year' => $quote_year,
    'email' => $quote_email,
    'first_name' => $quote_first_name,
    'last_name' => $quote_last_name,
    'mobile' => $quote_phone,
  ),
));

$response = curl_exec($curl);

curl_close($curl);
//echo $response;






?>

