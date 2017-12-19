<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rait | Home Page</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>

<?php 
  include "navbar.php";
?>
  <body class="container-fluid">
    <header>
      <div id="padd">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active"><center><img src="images/first.jpg" width="80%" height="450px"></center>
            <div class="carousel-caption d-none d-md-block">
              <h3>Building</h3>
              <p>RAIT was established in 1993.</p>
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item"><center><img src="images/second.jpg" width="80%" height="450px"></center>
            <div class="carousel-caption d-none d-md-block">
              <h3>Laboratory</h3>
              <p>Students are provided with enough facilities.</p>
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
          <div class="carousel-item"><center><img src="images/third.jpg" width="80%" height="450px"></center>
            <div class="carousel-caption d-none d-md-block">
              <h3>Extra Curricular</h3>
              <p>RAIT supports Extra curricular activities and <br>brings out the best of the students</p>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
    </header>


<div class="container-fluid">
    <!-- Page Content -->
    <div class="container">

      <h5 class="my-4" id="top"><center>Ramrao Adik Institute of Technology has been awarded with 'A' Grade by NAAC</h1>

      <div class='container' style='margin:50px auto 30px;'>
        <div class='row'>
          <div class='col-xs-12 col-sm-6 col-md-3 margin'>
            <div class="homepagelink text-center">
                NAAC Vol 1
            </div>
          </div>
          <div class='col-xs-12 col-sm-6 col-md-3 margin'>
            <div class="homepagelink text-center">
                NAAC Vol 2
            </div>
          </div>
          <div class='col-xs-12 col-sm-6 col-md-3 margin'>
            <div class="homepagelink text-center">
                  QMS
            </div>
          </div>
          <div class='col-xs-12 col-sm-6 col-md-3 margin'>
            <div class="homepagelink text-center">
                  NIRF
            </div>
          </div>
        </div>
      </div>

    
      <!-- Marketing Icons Section -->
      <h2>News and Notices</h2>
      <div class="row">
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" id="head">Examination And Results</h4>
            <div class="card-body">
              <p class="card-text">This section contains all the links about the examination and the results of regular and KT students of B.E. and M.E.</p>
            </div>
            <div class="card-footer" id="head">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" id="head">Notices and Academic Calender</h4>
            <div class="card-body">
              <p class="card-text">All the notice regarding the scholarships, college activities, Fees details along with the Academic calender can be found in this section.</p>
            </div>
            <div class="card-footer" id="head">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mb-4">
          <div class="card h-100">
            <h4 class="card-header" id="head">Time table, Curriculam and vacancy</h4>
            <div class="card-body">
              <p class="card-text">The course timetable, the curriculam and the vacancy of the seats of the CAP round will be notified in this section.</p>
            </div>
            <div class="card-footer" id="head">
              <a href="#" class="btn btn-primary">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <!-- /.row -->

     
      <?php include "events.php" ?>
      <!-- /.row -->
    
</div>

</div>

      <!-- Features Section -->
      
    <!-- Footer -->
    
      
    <?php include "footer.php"; ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
