<?php
include 'includes/config.php';
include 'includes/submission.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>Rasmed Customer Form</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<meta name="Rasmed Publications Ltd">
	<meta author="Rasmed Media, Editorial unit">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
					<link href="https://fonts.googleapis.com/css?family=Hind+Madurai|Montserrat" rel="stylesheet"> 
				    <link href="https://fonts.googleapis.com/css?family=Anton|Roboto" rel="stylesheet">
					<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
				<link rel="stylesheet" type="text/css" href="css/style.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css">
	<link rel="shortcut icon" href="images/rasmedlogo.png">
  	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body  style="" >
	<div class="container">
		<div class="row">
				<div class="col-lg-6 offset-lg-3 col-md-6 offset-md-3 col-xs-6 col-sm-6 offset-sm-3 " id="head-img">
					<div class="header-img">
						<img src="images/rasmedlogo.png" class="img-fluid">
					</div>
						
				</div>
			
		</div>

					<div class="row">
						<div class="col-lg-6 offset-lg-3 col-md-12  col-sm-12 col-xs-12">
							<div class="form-container">
							<center><h5 style="font-style: italic; color: #fff;">Carefully enter your personal information</h5></center>
							<br>
							<form method="post" enctype="multipart/form-data" action="">

								<div class="form-name"><div class="user"></div><input type="text" name="nameofschool" id="nameofschool" class="form-control" placeholder="Enter Name of School" required="required"></div>
								<div class="form-name"><div class="user"></div><input type="text" name="nameofprincipal" id="nameofprincipal" class="form-control" placeholder="Enter the Principal's name" required="required"></div>
									<div class="form-name"><div class="envelope"></div><input type="email" name="email" id="email" class="form-control" placeholder="Enter the Email of the School" required="required"></div>
									<div class="form-name"><div class="phone"></div><input type="number" name="number" id="number" class="form-control" placeholder="Enter the Official mobile of the School"  required="required"></div>
						

								<div class="form-name"><span style="color:#fff; ">State:</span><select name="state" id="state" class="form-control" style="	background: rgba(0,0,0,0.6); color: #fff; margin-bottom: 10px; border-left: none;border-right: none;border-top: none;"  required="required">
									<option></option>
							<?php 
							$query = mysqli_query($con,"SELECT * FROM state");
							$rows = mysqli_num_rows($query);
							while ($fetch=mysqli_fetch_array($query)) {
						?>

						<option value="<?php echo $fetch['state'];?>"><?php echo $fetch['state'];?></option>

						<?php 
									}
						 ?>
								</select></div>
										
								<div class="form-name"><span style="color:#fff; ">School Address:</span><textarea  name="schooladdress" id="schooladdress" class="form-control"  style="background: transparent;  color: #fff;" required="required" >
								</textarea></div>

											
														<div class="g-recaptcha" data-sitekey="6LdmBIoUAAAAAH8QLa7m7q1M_8JotLbWVPAnO5FU"></div> <br>

		
								<div><center><input type="submit" name="submit" id="submit" class="btn btn-primary" style="width: 150px" value="Submit"></center></div>
							</form>
						</div>
						</div>
						
					</div>
	</div>

	<div class="container">	
					<div class="row">	

						<div class="col-lg-6 col-md-12 col-sm-12 offset-lg-3">
						<div class="customize2">	

											<cite style="color: #2E3192">	<center>Copyright &copy; <?php echo date("Y");?> &mdash; Rasmed Publications</center></cite>
						</div>	

						</div>
					</div>	
								</div>




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>