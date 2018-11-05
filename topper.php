<div class="container-fluid" style="background-color: ">
  <div id="demo2" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row" style="padding: 20px 2px;margin-top: 20px;box-shadow: 0px 0px 10px;background-color: ;">
        <!-- ======================first image of topper=============================== -->
        <?php
        $topper=mysqli_query($conn,"SELECT * from result where stdid=1");
        while($row=mysqli_fetch_array($topper))
        {
          ?>
          <div class="col" style="overflow-y: hidden;display: inline;">
            <?php
            echo '<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['stdimage'] ).'" class="img-fluid d-block -auto"  /> ';
             echo"<figcaption class='figure-caption text-center'>".$row["stdname"]."</figcaption>";
             echo"<figcaption class='figure-caption text-center'>".$row["stdmarks"]."</figcaption>";
            ?>
        </div>

          <?php
        }
        
        ?>


        <!-- =====================================Second topper image========================= -->
      <?php
        $topper=mysqli_query($conn,"SELECT * from result where stdid=2");
        while($row=mysqli_fetch_array($topper))
        {
          ?>
          <div class="col" style="overflow-y: hidden;display: inline;">
            <?php
              echo '<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['stdimage'] ).'" class="img-fluid d-block -auto " style=";"  /> ';
              echo"<figcaption class='figure-caption text-center'>".$row["stdname"]."</figcaption>";
             echo"<figcaption class='figure-caption text-center'>".$row["stdmarks"]."</figcaption>";            ?>
        </div>

          <?php
        }
        
        ?>

        <!-- ==============================Third topper image ========================-->
      <?php
        $topper=mysqli_query($conn,"SELECT * from result where stdid=3");
        while($row=mysqli_fetch_array($topper))
        {
          ?>
          <div class="col" style="overflow-y: hidden;display: inline;">
            <?php
            echo '<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['stdimage'] ).'" class="img-fluid d-block -auto " style=";"  /> ';
            echo"<figcaption class='figure-caption text-center'>".$row["stdname"]."</figcaption>";
             echo"<figcaption class='figure-caption text-center'>".$row["stdmarks"]."</figcaption>";
              ?>
        </div>

          <?php
        }
        
        ?>
     
    </div>
    </div>
    <div class="carousel-item">
      <div class="row" style="padding: 20px 2px;margin-top: 20px;box-shadow: 0px 0px 10px;background-color: ;">

        <!-- =====================FORTH TOPPER IMAGE========================================= -->
      <?php
        $topper=mysqli_query($conn,"SELECT * from result where stdid=4");
        while($row=mysqli_fetch_array($topper))
        {
          ?>
          <div class="col" style="overflow-y: hidden;display: inline;">
            <?php
            echo '<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['stdimage'] ).'" class="img-fluid d-block -auto " style=";"  /> ';
            echo"<figcaption class='figure-caption text-center'>".$row["stdname"]."</figcaption>";
             echo"<figcaption class='figure-caption text-center'>".$row["stdmarks"]."</figcaption>";
              ?>
        </div>

          <?php
        }
        
        ?>
       <!-- ================================ fIFTH TOPPER IMAGE=============================================== -->
      <?php
        $topper=mysqli_query($conn,"SELECT * from result where stdid=5");
        while($row=mysqli_fetch_array($topper))
        {
          ?>
          <div class="col" style="overflow-y: hidden;display: inline;">
            <?php
            echo '<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['stdimage'] ).'" class="img-fluid d-block -auto " style=";"  /> ';
              echo"<figcaption class='figure-caption text-center'>".$row["stdname"]."</figcaption>";
             echo"<figcaption class='figure-caption text-center'>".$row["stdmarks"]."</figcaption>";
              ?>
        </div>

          <?php
        }
        
        ?>
        <!--===================================== SIXTH IMAGE TOPPPER========================================= -->
      <?php
        $topper=mysqli_query($conn,"SELECT * from result where stdid=6");
        while($row=mysqli_fetch_array($topper))
        {
          ?>
          <div class="col" style="overflow-y: hidden;display: inline;">
            <?php
            echo '<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['stdimage'] ).'" class="img-fluid d-block -auto " style=";"  /> ';
              echo"<figcaption class='figure-caption text-center'>".$row["stdname"]."</figcaption>";
             echo"<figcaption class='figure-caption text-center'>".$row["stdmarks"]."</figcaption>";
            ?>
        </div>

          <?php
        }
        
        ?>
      
     
    </div>
    </div>
    <div class="carousel-item">
      <div class="row" style="padding: 20px 2px;margin-top: 20px;box-shadow: 0px 0px 10px;background-color: ;">
                <!--===================================== SEVENTH IMAGE TOPPPER========================================= -->

      <?php
        $topper=mysqli_query($conn,"SELECT * from result where stdid=7");
        while($row=mysqli_fetch_array($topper))
        {
          ?>
          <div class="col" style="overflow-y: hidden;display: inline;">
            <?php
            echo '<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['stdimage'] ).'" class="img-fluid d-block -auto " style=";"  /> ';
              echo"<figcaption class='figure-caption text-center'>".$row["stdname"]."</figcaption>";
             echo"<figcaption class='figure-caption text-center'>".$row["stdmarks"]."</figcaption>";
            ?>
        </div>

          <?php
        }
        
        ?>
                <!--=====================================EIGHTH IMAGE TOPPPER========================================= -->

     <?php
        $topper=mysqli_query($conn,"SELECT * from result where stdid=8");
        while($row=mysqli_fetch_array($topper))
        {
          ?>
          <div class="col" style="overflow-y: hidden;display: inline;">
            <?php
            echo '<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['stdimage'] ).'" class="img-fluid d-block -auto " style=";"  /> ';
            echo"<figcaption class='figure-caption text-center'>".$row["stdname"]."</figcaption>";
             echo"<figcaption class='figure-caption text-center'>".$row["stdmarks"]."</figcaption>";
              ?>
        </div>

          <?php
        }
        
        ?>
                <!--===================================== NINTH IMAGE TOPPPER========================================= -->

      <?php
        $topper=mysqli_query($conn,"SELECT * from result where stdid=9");
        while($row=mysqli_fetch_array($topper))
        {
          ?>
          <div class="col" style="overflow-y: hidden;display: inline;">
            <?php
            echo '<img id="stdimage" src="data:img/jpeg;base64,'.base64_encode($row['stdimage'] ).'" class="img-fluid d-block -auto " style=";"  /> ';
            echo"<figcaption class='figure-caption text-center'>".$row["stdname"]."</figcaption>";
             echo"<figcaption class='figure-caption text-center'>".$row["stdmarks"]."</figcaption>";
              ?>
        </div>

          <?php
        }
        
        ?>
     
    </div>
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo2" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo2" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
</div>


      <script>
$('#bs4-multi-slide-carousel').carousel({
  interval: 4000
})
</script>
<style >
  #stdimage
  {
   
   width: 300px;
   height:250px;
   
    border-radius: 3%;
  }
  .figure-caption
  {
    color: white;
    font-size: 17px;
    font-weight:300;
  }

  
  h3
  {
    font-size: 15px;
    text-align: center;
    color: white;

  }
  @media screen and (max-width: 600px) {
  div.col #stdimage {
    width:120px;
    height:110px;
    background-color: red;
  }
}
</style>