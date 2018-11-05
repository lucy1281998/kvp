<?php
include("nav.php");
include ("config.php");
?>

<!-- ----------------------------gallery_banner ----------------------------------------------->
<div class="container-fluid header-wrapper" style="  margin-top: 66px;background-color:;">

 
  <div class="zoominheader">
    <div class="zoomoutheader">
      <p class="text">
        OUR GALLERY
      </p>
    </div>
  </div>
</div>  
 <div class="container-fluid" style="margin-top:1px;padding: 20px 20px 20px 20px ">
  <div class="row">
    <div class="col-sm-6 col-md-6 col-lg-4">
      
      <img class="img-fluid" src="https://photos.smugmug.com/Photos-New-Affolter-Park/i-HHhjPrT/0/72744b77/L/PARK7722-L.jpg" alt=""6>
    
    </div>
    <div class="col-sm-6 col-md-6 col-lg-4">
    
            <img class="img-fluid" src="https://d2r72yk5wmppdj.cloudfront.net/m/3ced976c1b910852/Low-Classroom_Traditional_Introduction-Banner.jpg" alt="">

    </div>
    <div class="col-sm-6 col-md-6 col-lg-4">
    
            <img class="img-fluid" src="https://www.bookspaceforschools.co.uk/media/505913/10.jpg">

    </div>
    
    
  </div>
   
 </div> 
</div>


<?php
include("footer.php");
?>


      <script>
$('#bs4-multi-slide-carousel').carousel({
  interval: 4000
})
</script>

</style>
	</div>
	
</div>


<style type="text/css">
	
.our_gallery
{
	font-family: 'Bebas Neue';
    font-size: 46px;
    line-height:8px;
    height: 46px;
    text-align: center;
    color: #fff;
    letter-spacing: 2px;
}
.stdimg
{
  height: 300px;
  
}
*
{
  padding: 0px;
  margin:0px;
}
.img-fluid
{
  height: 300px;
}
.header-wrapper {
  overflow: hidden;
  width:100%;
  height:300px;

  text-align:center;
}

.zoominheader {
  width:100%;
  height:300px;

  text-align:center;
  background-image: url("img/Gallery_Banner.jpg");

  background-size:;
  background-attachment: ;
  background-repeat:no-repeat;
  position: relative;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  -webkit-animation: zoomin 10s ease-in infinite;
  animation: zoomin 10s ease-in infinite;
  transition: all .5s ease-in-out;
  overflow: hidden;
}

/* Thermost element*/
.zoomoutheader {
  width:100%;
  height:300px;
  text-align:center;
  background: none;
  -webkit-animation: zoomout 10s ease-in infinite;
  animation: zoomout 10s ease-in infinite;
  transition: all .5s ease-in-out;
  overflow: hidden;
}



/* Zoom in Keyframes */
@-webkit-keyframes zoomin {
  0% {transform: scale(1);}
  50% {transform: scale(1.5);}
  100% {transform: scale(1);}
}
@keyframes zoomin {
  0% {transform: scale(1);}
  50% {transform: scale(1.5);}
  100% {transform: scale(1);}
} /*End of Zoom in Keyframes */

/* Zoom out Keyframes */
@-webkit-keyframes zoomout {
  0% {transform: scale(1);}
  50% {transform: scale(0.67);}
  100% {transform: scale(1);}
}
@keyframes zoomout {
    0% {transform: scale(1);}
  50% {transform: scale(0.67);}
  100% {transform: scale(1);}
}/*End of Zoom out Keyframes */

/*Style for the text*/
.text{
  color:white;
  font-size: 50px;
  margin-top: 100px;

  font-weight:; 
}

</style>
