<?php
  include("config.php");

?>

<!DOCTYPE html>
<html>
<head>
  <title>Kishor vidhya pith</title>
  <meta charset="utf-8">
  <!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <?php
    include("nav.php");

  ?>
</head>
<body>
  <div class="loader">
    <div class="loader-outter"></div>
    <div class="loader-inner"></div>
</div>

 
   <div class="container-fluid" style="margin-top: 50px;padding: 0px 0px 0px 0px">         
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" style="padding-top: 20px;">
        <div class="carousel-inner">
        
        <div class="carousel-item active" class="thumbnail text-center">
        <img class="d-block w-100" src="img/pic1.jpg" style="height:8%;" >
        <div class="caption1 d-none d-md-block">
            <p class="display-1"></p>
        </div>
        
        </div>


        <div class="carousel-item">
        <img class="d-block w-100" src="img/pic3.jpg" style="height:8%;">
            <div class="caption2 d-none d-md-block">
                <p class="display-1"></p>
            </div>
        </div>
        <div class="carousel-item">
        <img class="d-block w-100" src="img/pic4.jpg" style="height: 8%;">
            <div class="caption3 d-none d-md-block">
                <p class="display-1"></p>
            </div>
        </div>
         <div class="carousel-item">
        <img class="d-block w-100" src="img/pic5.jpg" style="height: 8%;">
            <div class="caption3 d-none d-md-block">
                <p class="display-1"></p>
            </div>
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
        </div>

        </div>
      </div>



<!-----------------------------------         Three icon for school------------------------------------------------ -->
      <div id="admission" class="container-fluid" style="background-color:;margin-top:-17px;padding: 30px 30px 30px 30px" >
        <div class="row" style="padding-top:40px;">

          <div class="col-xl-4 col-md-4 col-sm-4 col-xs-4" style="padding-bottom: 20px;">
            <div   class="card card1" style="background-color: #31C3B0 !important">
              <div  class="card-header">
                <img class="img-fluid rounded mx-auto d-block" src="icon/program.png" alt="">
              
              </div>
                      <div class="card-body">
                      <h4 class="icon-box-title mt-50 text-white text-center">Full Day Programs</h4>
                    </div>
                    <div class="card-footer">
                      <p style="color: white;padding:20px 20px 20px 20px">Lorem ipsum dolor sit amet adipisi elit molestias non nulla placeat odio dolor amet dicta alias.</p>
                    </div>
             </div>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-4 col-xs-4" style="padding-bottom: 20px;">
            <div  class="card card1" style="background-color:rgb(255, 82, 82) !important">
              <div  class="card-header"><img class="img-fluid rounded mx-auto d-block" src="icon/heart.png" alt=""></div>
                      <div class="card-body">  
                       <h4 class="icon-box-title mt-50 text-white text-center">Fulfill With Love</h4>
                      </div>
                    <div class="card-footer">
                      <p style="color: white;padding:20px 20px 20px 20px">Lorem ipsum dolor sit amet adipisi elit molestias non nulla placeat odio dolor amet dicta alias.</p>
                    </div>
             </div>
        </div>
        <div class="col-xl-4 col-md-4 col-sm-4 col-xs-4" >
            <div  class="card card1" style="background-color:rgb(0, 188, 212) !important;">
              <div  class="card-header">
              <img class="img-fluid rounded mx-auto d-block" src="icon/teacher.png" alt=""> 
              </div>
                      <div class="card-body">
                      <h4 class="icon-box-title mt-50 text-white text-center" >Expert Teachers</h4>
                      </div>
                    <div class="card-footer">
                      <p style="color: white;padding:20px 20px 20px 20px">Lorem ipsum dolor sit amet adipisi elit molestias non nulla placeat odio dolor amet dicta alias.</p>
                    </div>
             </div>
        </div>
      </div>
    </div>
<!--------------------------------------------------------- Successful Kids---------------------------------------->    
        <div class="container-fluid" id="kids"  >
            <div class="row" style="padding:50px 50px 50px 50px">
              <div class="col-xl-3">
               <img class="mx-auto d-block" src="icon/users.png" alt=""><br>
               <h2 class="text-white text-center ">20</h2><br>
               <p class="text-white text-center" style="font-family: 'Merienda', cursive;font-size:20px;">Qualified Teachers</p>
                <hr id="hr">
              </div>
              <div class="col-xl-3">
                <img class="mx-auto d-block" src="icon/scholarship.png" alt=""><<br>
                <h2 class="text-white text-center ">1909</h2><br>
               <p class="text-white text-center" style="font-family: 'Merienda', cursive;font-size:20px;">Successful Students</p>
                <hr id="hr">
              </div>
           
           <div class="col-xl-3">
                <img class="mx-auto d-block" src="icon/happy.png" alt=""><br>
                <h2 class="text-white text-center ">376</h2><br>
               <p class="text-white text-center" style="font-family: 'Merienda', cursive;font-size:20px;">Happy Parents</p>
               <hr id="hr">
              </div>
           
           <div class="col-xl-3">
                <img class="mx-auto d-block" src="icon/trophy.png" alt=""><br>
                <h2 class="text-white text-center ">376</h2><br>
               <p class="text-white text-center" style="font-family: 'Merienda', cursive;font-size:20px;">Award Won</p>
                <hr id="hr">
              </div>
           
            </div>
        </div>
<!-- ---------------------------------------------News and events ------------------------------------------------------------------->
          
  <div id="event" class="container-fluid" >
    <h2 style="padding-top:20px;" class="text-center display-5">Events and Update</h2>
    <div class="row offset-xl-2" style="margin-top: 40px;padding: 20px 20px 20px 20px" >
      <div class="col-xl-5" style="padding: 25px -5px 20px 80px;background-image: url('img/notice.png');background-size: cover;margin-bottom: 2px;border-radius: 10px;">
         <table class="table " style="background-color: rgba(5, 0, 0, 0.5)">
          <thead>
            <tr>
              <td style="font-size:18px;font-weight: bold;color: white">Event Name</td>
              <td style="font-size:18px;font-weight: bold;color: white">Event Date</td>
            </tr>
          </thead>
         </table>

       <marquee  behavior="scroll" direction="up" scrollamount="2" style="height:auto;margin-top:;background-color:; ;"> 
      <?php 
      $result=mysqli_query($conn,"SELECT * FROM event");

      while ($row = mysqli_fetch_array($result)) { ?>
       
          <table class="table  table-dark table-sm table-hover" style="background-color: rgba(5, 0, 0, 0.5)">
     
          
              <tr>
                <td style="color:white"><?php echo $row['eventname']; ?><td>
                <td  style="color:white"><?php echo $row['eventdate']; ?></td>
              </tr>
        </table>
      
      
      <?php } ?>
     
    </marquee>
       
      </div>
      <div class="col-xl-5" style="height:auto;">
        <?php
        $thought=mysqli_query($conn,"SELECT * from thought");
        while($row=mysqli_fetch_array($thought))
        {
          ?>
            <div class="card" style="background-image:url('img/thought.png');background-size: cover;background-position: center;">
              <div class="card-header">
                <h3 class="text-white text-center">Thought of the day</h3>
              </div>
              <div class="card-body">
                <q class="text-white text-center" style="font-size: 20px;">
                <?php
                  echo $row['thought'];
                ?></q>
              </div>
              <div class="card-footer">
                <h4 class="p- d-flex flex-row-reverse text-white">
                <?php
                  echo $row['writter'];
                ?>
                </h4>
              </div>
              
            </div>

          <?php
        }
        ?>
        </div>
      </div>
    </div>
    
  </div>

  <!-- _________________________________________________Our Students_________________________________________________________ -->

<div class="container-fluid" id="kids">
 <?php
 include("topper.php");
 ?>
</div>


<div class="container-fluid" style="margin-top:px;background-color:">
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

