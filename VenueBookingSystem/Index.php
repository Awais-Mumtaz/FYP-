<?php
 $page_title = "Home | Online Venue Booking System";
include 'Header.php';

?>
<!-- Body -->
<!-- Header -->
<header id="header">
  <div class="intro">
    <div class="overlay">
      <div class="container">
        <div class="">
          <div class="intro-text">
            <h1>OVBS</h1>
            <p>Easy Booking For Venues</p>
            <a href="./Bookings.php" class="btn btn-outline-white btn-lg">BOOK NOW</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</header>

<!-- venues list start -->
<div class="container-fluid bg-venues pt-1 pb-5">
<div class="container">
<div class="">
  <h3 class="venues-head">Recent Listed Halls</h3>
</div>
  <div class="row">
    <div class="col-4">
      <div class="card bg-venues-card">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./Includes/media/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./Includes/media/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./Includes/media/3.jpg" alt="Third slide">
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
        <div class="card-footer">
          NAme of venue
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card bg-venues-card">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./Includes/media/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./Includes/media/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./Includes/media/3.jpg" alt="Third slide">
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
        <div class="card-footer">
          Name of venue
        </div>
      </div>
    </div>

    <div class="col-4">
      <div class="card bg-venues-card">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="./Includes/media/1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./Includes/media/2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./Includes/media/3.jpg" alt="Third slide">
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
        <div class="card-footer">
          NAme of venue
        </div>
      </div>
    </div>



  </div>
</div>
</div>
<!-- venues list end -->

<!-- Contact us -->

<div class="container-fluid bg-light pt-1 pb-3 text-center contact-container">
<h3 class="venues-head">Contact Us</h3>
  <span> <i class="fa fa-map-marker"></i> Sheikhupura Stadium, Punjab, Pakistan</span>&emsp;              
  <span><i class="fa fa-phone"></i> +92 345 123 4567</span>&emsp;
  <span>  <i class="fa fa-envelope"></i> contact@ovbs.com</span>
            
</div>
<?php
include 'Footer.php';
?>