<?php
include("nav.php");
include ("config.php");

?>
	<!-- ------------------------------faculty----------------------------------- -->

<div class="container-fluid" style="margin-top: 100px;">
	<h2 class="text-center text-black">Our Teachers</h2>

	<div class="row">
		<div class="col-xl-3 col-md-3">
			<div class="card">
				<?php
				$faculty = mysqli_query($conn ,"SELECT * from faculty where facultyid=1");
				while($row=mysqli_fetch_array($faculty))
				{
					echo'<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['facultyimg'] ).'" class="img-fluid d-block -auto"  />';
					echo'<div class="card-footer" style="background-color:#00BCD4 !important">';
					echo'<h6>'.$row['facultyname'].'</h6>';
					echo'<p>'.$row['facultydesc'].'</p>';
					echo'</div>';
				}
				?>
				
			</div>
			
		</div>
		<div class="col-xl-3 col-md-3">
			<div class="card">
				<?php
				
				$faculty = mysqli_query($conn ,"SELECT * from faculty where facultyid=2");
				while($row=mysqli_fetch_array($faculty))
				{
					echo'<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['facultyimg'] ).'" class="img-fluid d-block -auto"  />';
					echo'<div class="card-footer" style="background-color:#FF5252 !important">';
					echo'<h6>'.$row['facultyname'].'</h6>';
					echo'<p>'.$row['facultydesc'].'</p>';
					echo'</div>';
				}
				?>
				
			</div>
		</div>
		<div class="col-xl-3 col-md-3">
			<div class="card">
				<?php
				$faculty = mysqli_query($conn ,"SELECT * from faculty where facultyid=3");
				while($row=mysqli_fetch_array($faculty))
				{
					echo'<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['facultyimg'] ).'" class="img-fluid d-block -auto"  />';
					echo'<div class="card-footer" style="background-color:#FEC02A !important">';
					echo'<h6>'.$row['facultyname'].'</h6>';
					echo'<p>'.$row['facultydesc'].'</p>';
					echo'</div>';
				}
				?>
				
			</div>
		</div>
		<div class="col-xl-3 col-md-3">
			<div class="card">
				<?php
				$faculty = mysqli_query($conn ,"SELECT * from faculty where facultyid=4");
				while($row=mysqli_fetch_array($faculty))
				{
					echo'<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['facultyimg'] ).'" class="img-fluid d-block -auto"  />';
					echo'<div class="card-footer" style="background-color:#00BCD4 !important">';
					echo'<h6>'.$row['facultyname'].'</h6>';
					echo'<p>'.$row['facultydesc'].'</p>';
					echo'</div>';
				}
				?>
				
			</div>
		
	
</div>
<div class="container-fluid" style="margin-top:50px;">

	<div class="row">
		<div class="col-xl-3 col-md-3">
			<div class="card">
				<?php
				$faculty = mysqli_query($conn ,"SELECT * from faculty where facultyid=1");
				while($row=mysqli_fetch_array($faculty))
				{
					echo'<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['facultyimg'] ).'" class="img-fluid d-block -auto"  />';
					echo'<div class="card-footer" style="background-color:#00BCD4 !important">';
					echo'<h6>'.$row['facultyname'].'</h6>';
					echo'<p>'.$row['facultydesc'].'</p>';
					echo'</div>';
				}
				?>
				
			</div>
		</div>
		<div class="col-xl-3 col-md-3">
			<div class="card">
				<?php
				$faculty = mysqli_query($conn ,"SELECT * from faculty where facultyid=1");
				while($row=mysqli_fetch_array($faculty))
				{
					echo'<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['facultyimg'] ).'" class="img-fluid d-block -auto"  />';
					echo'<div class="card-footer" style="background-color:#FF5252 !important">';
					echo'<h6>'.$row['facultyname'].'</h6>';
					echo'<p>'.$row['facultydesc'].'</p>';
					echo'</div>';
				}
				?>
				
			</div>
		</div>
		<div class="col-xl-3 col-md-3">
			<div class="card">
				<?php
				$faculty = mysqli_query($conn ,"SELECT * from faculty where facultyid=1");
				while($row=mysqli_fetch_array($faculty))
				{
					echo'<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['facultyimg'] ).'" class="img-fluid d-block -auto"  />';
					echo'<div class="card-footer" style="background-color:#FEC02A !important">';
					echo'<h6>'.$row['facultyname'].'</h6>';
					echo'<p>'.$row['facultydesc'].'</p>';
					echo'</div>';
				}
				?>
				
			</div>
		</div>
		<div class="col-xl-3 col-md-3">
			<div class="card">
				<?php
				$faculty = mysqli_query($conn ,"SELECT * from faculty where facultyid=1");
				while($row=mysqli_fetch_array($faculty))
				{
					echo'<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['facultyimg'] ).'" class="img-fluid d-block -auto"  />';
					echo'<div class="card-footer" style="background-color: #31C3B0 !important">';
					echo'<h6>'.$row['facultyname'].'</h6>';
					echo'<p>'.$row['facultydesc'].'</p>';
					echo'</div>';
				}
				?>
				
			</div>
		</div>
		
	
</div>
                                 

<style type="text/css">
	*
	{
		margin: 0;
		padding: 0;
	}
	
	.card-footer
	{
		background-color:; 
	}
	.card
	{
		position: relative;
  
  border: 1px solid #333;
  margin: 2%;
  overflow: hidden;
	}
	.card img {
  max-width: 100%;
  
  -moz-transition: all 0.3s;
  -webkit-transition: all 0.3s;
  transition: all 0.3s;
}
.card:hover img {
  -moz-transform: scale(1.1);
  -webkit-transform: scale(1.1);
  transform: scale(1.1);
}
#stdimage
{
	height:270px;
}


</style>

<?php
include("footer.php");
?>