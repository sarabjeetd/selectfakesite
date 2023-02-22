</div>
</div>

<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap.min.js"></script>

<script>
	$(document).ready(function() {
		$('.js-basic-multiple').select2({
			placeholder: "Select"
		});
		var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/") + 1);
		$("#main-menu li").each(function() {
			if ($(this).children().attr("href") == pgurl || $(this).children().attr("href") == '#') {
				$(this).addClass("active-menu");
			} else if (pgurl == '') {
				$('#main-menu li.home-menu').addClass("active-menu");
			}

		});
		

		$('#dataTables_car').DataTable();
	
		$(document).on('click', '.add_car_make', function(e) {
			var data = $("#add_car_make").serializeArray();
			var output = [];
			$.ajax({
				url: 'add_car_make.php',
				type: 'POST',
				data: data,
				dataType: "json",
				success: function( response ) {
					if(response.type == 'success') {
						$("#add_car_make").trigger("reset");
						$("#select_year").val('').trigger('change');

						$('.add_car_make').prop('disabled',true);
						
						$('.car_make_msg').addClass('alert alert-success');
						$('.car_make_msg').html(response.response);
						setTimeout(function() {
							$('.car_make_msg').removeClass('alert alert-success');
							$('.car_make_msg').html('')}
							,3000);
						
					}
				}
			});
		});
		$(document).on('change', '.select_years', function(e) {
			var data = $(this).val();
			var output = [];
			$.ajax({
				url: 'car_makes.php',
				type: 'POST',
				data: {years: data},
				dataType: "json",
				success: function( response ) {
					if(response.type == 'success') {
						output.push('<option value="">Select</option>');
						$.each(response.response, function(key, value) {
							output.push('<option value="'+ value +'">'+ value +'</option>');
							$('#append_make').prop('disabled',false);
						});

					} else if(response.type == 'error') {
						output.push('<option value=" ">No Record</option>');
						$('#append_make').prop('disabled',true);
					}
					$('#append_make').html(output.join(''));

				}
			});
		});
		$(document).on('click', '.add_car_model', function(e) {
			var data = $("#add_car_model").serializeArray();
			$.ajax({
				url: 'add_car_model.php',
				type: 'POST',
				data: data,
				dataType: "json",
				success: function( response ) {
					if(response.type == 'success') {
						$("#add_car_model").trigger("reset");
						$('.car_model_msg').addClass('alert alert-success');
						$('.car_model_msg').html(response.response);
						$(".select_years").val('').trigger('change');

						$('.add_car_model').prop('disabled',true);
						$('#append_make').prop('disabled',true);
						$('#add_model').prop('disabled',true);
						

						setTimeout(function() {
							$('.car_model_msg').removeClass('alert alert-success');
							$('.car_model_msg').html('')
						}
							,3000);
					}
				}
			});
		});
		$(document).on('change', '#append_make', function(e) {
			var car_model = $(this).find(":selected").val();

			if(car_model == '') {
				$('#add_model').prop('disabled',true);
				$('.add_car_model').prop('disabled',true);
			} else {
				$('#add_model').prop('disabled',false);

			}
		});
		$(document).on('input', '#add_model', function(e) {
			var car_model = $(this).val();
			if(car_model == '') {
				$('.add_car_model').prop('disabled',true);
			} else {
				$('.add_car_model').prop('disabled',false);
			}
		});
		$(document).on('input', '#year_make', function(e) {
			var car_make = $(this).val();
			if(car_make == '') {
				$('.add_car_make').prop('disabled',true);
			} else {
				$('.add_car_make').prop('disabled',false);
			}
		});
	});

</script>

</body>
</html>