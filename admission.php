<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Admission</title>
	<?php
	// include("boostrap4.php");

	?>
	<link rel="stylesheet" href="">

</head>
<body>
	<?php
	include("nav.php");
	?>
	

	<div class="container-fluid" id="admission" style="margin-top:45px;background-color: ;">


		<div class="row" style="background-color: rgba(9, 0, 0, 0.7)">
			<div class="col-xl-8">
				<div style="padding-top:100px;background-color:;">
				<h1 class="text-center">Admission</h1>
				<h1 class="text-center">Is</h1>
				<h1 class="text-center">Going</h1>
				<h1 class="text-center">On</h1>
				</div>
					
				</div>
			<div class="col-xl-4 ">
				
				<form class="form-group">
					<h1 style="font-size: 20px;margin-top:40px;">Register Now</h1><br>
					<label for="name">Student Name</label>
					<input type="text" name="name" placeholder="Enter your Name"  class="form-control">
					<label for="email">Email Id</label>
					<input type="email" name="email" placeholder="Enter Your Email id" class="form-control">
					<label for="phone">Phone Number</label>
					<input type="text" name="phone" class="form-control" placeholder="Enter Phone number">
					<label for="select class">Select Standard</label>
					<select name="class" class="form-control">
						<option value="">Lower Kindergarten(LKG)</option>
						<option value="">Upper Kindergarten(UKG)</option>
						<option value="">CLASS I</option>
						<option value="">CLASS II</option>
						<option value="">CLASS III</option>
						<option value="">CLASS IV</option>
						<option value="">CLASS V</option>
						<option value="">CLASS VI</option>
						<option value="">CLASS VII</option>
						<option value="">CLASS VIII</option>
						<option value="">CLASS IX</option>
						<option value="">CLASS X</option>
						
					</select>
					<label for="blood group">Blood Group</label>
					<select class="form-control" name="blood">
						<option value="">GROUP A</option>
						<option value="">GROUP B</option>
						<option value="">GROUP AB</option>
						<option value="">GROUP O</option>
					
					</select>
					<label for="address">Address</label>
					<textarea name="" class="form-control"></textarea><br>
					<button type="submit" class="btn btn-primary">Register</button>
				</form>
				
			</div>
			
		</div>
		
	</div>
	<div class="container-fluid">
  <?php
    include("footer.php");
  ?>
</div>
<div class="conatiner-fluid">
  <?php
  include("scroolTop.php");
  ?>
</div>
	
</body>
</html>
<style>
	body
	{
		background-color:;
	}
	label
	{
		color:white;
		font-size:15px;
		font-weight:600;
	}
	h1
	{
		color: white;
	}
	#admission
	{
		background-image: url("img/admission.jpg");
		background-attachment:fixed;
		background-position: center;
		background-repeat: no-repeat;
		background-size: cover;
		background-color: hsl(0, 100%, 50%)
	}


</style>