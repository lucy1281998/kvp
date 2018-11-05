<?php
        include("boostrap4.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Nav bar</title>
    <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge"> -->
<meta name="viewport" content="width=device-width, initial-scale=1">  
<link rel="stylesheet" type="text/css" href="fontawesome/css">
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->

</head>
<body>

   
        
   
<nav class="navbar  navbar-expand-md fixed-top navbar-dark navbar-fixed-top py-2" style="background-color: #FF5252 !important;box-shadow: 3px 3px 5px rgb(0, 188, 212) !important">
      <a class="navbar-brand" href="index.php">
      <img src="logo/logo.jpg" alt="Logo" style="width:40px;border-radius: 50%;">
      </a>
      <a class="navbar-brand" href="index.php"><span style="font-size: 24px; color: white">Kishor Vidhya Pith</span></a>
      <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#collapsibleNavbar" ">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse   " id="collapsibleNavbar" >
      <ul class="navbar-nav   ml-auto " style="color: black">
      <li class="nav-item">
      <a class="nav-link" id="navstyle" href="index.php">Home</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" id="navstyle" href="admission.php">Admissions</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" id="navstyle" href="gallery.php">Gallery</a>
      </li>  
      <li class="nav-item">
      <a class="nav-link" id="navstyle" href="faculty.php">Faculty</a>
      </li>   
      <li class="nav-item">
<!--       <a class="nav-link" id="navstyle" href="#">Students</a>
 -->      </li> 
      <li class="nav-item">
      <a class="nav-link" id="navstyle" href="contact.php">contact us</a>
      </li> 
      </ul>
      </div>  
</nav>

</body>

</html>



<style>
 #navstyle
  {
    
    color:white;
    font-size:18px;
    font-weight: 600;
    padding:25px;
   
}
#navstyle:hover
{
  color:black;

}

</style>   