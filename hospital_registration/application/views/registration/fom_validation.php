<!DOCTYPE html>
<html>
<head>
	<title>Form Validation</title>
	<meta charset="utf-8">
	
</head>
<body>
	<!--Form Container-->
	<div class="container">
		<div class="row">
			<div class="col-md-8 offset-2">
				<!-- Contact Form Start -->
			    <form action="thanks.php" method="post" id="contact">
			    	<h1>Contact Form</h1>
				    <div class="form-group">
				      <label for="fname"> First Name: </label>
				      <input type="text" id="fname" class="form-control" data-validation="length required" data-validation-length="min2" >
				    </div>

				    <div class="form-group">
				      <label for="email"> Email </label>
				      <input type="email" id="email" class="form-control" data-validation="email required" >
				    </div>
					
					<div class="form-group">
				      <label for="mobNumber"> Mobile Number: </label>
				      <input type="text" id="mobNumber" class="form-control" data-validation="number required"  >
				    </div>

				    <div class="form-group">
				      <label for="message">Message:</label>
				      <textarea class="form-control" name="message" rows="8" cols="50" data-validation="required" ></textarea>
				    </div>

				    <div class="form-group">
				      <input type="submit" class="btn btn-info" name="submit" value="Submit">
				    </div>

			    </form>
			 </div>
	</div>

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

<script>
	$.validate();
</script>
</body>
<footer>Copy Right By &copy; <a href="http://broexperts.com">BroExperts</a>, All Rights Reserved From 2017 - 2018.</footer>
</html>



