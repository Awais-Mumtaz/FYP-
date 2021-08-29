<!-- footer -->
<!-- <div class="container-fluid ">
<div class="row">
  <div class="col-12">
      <div class="card bg-dark text-white">
        <div class="card-body">
          <span >Copyright &copy; 2021</s>
          <a href="#Top"><i class="fa fa-arrow-up fa-2x text-white"
          style="float:right; " aria-hidden="true"></i></a>
        </div>
      </div>
 </div>
</div>
 </div> -->

<!-- Footer -->
<footer class="bg-dark text-white pt-3">

  <!-- Footer Elements -->
  <div class="container">
    <div class="row">
    <div class="col-4">
    <h4 class="">About</h4>
      <p><b>Online Venue booking System</b> is working for users to get a venue of your choice easily and quickly. 
      </p>
    </div>
    <div class="col-4">
    <h4 class="">Quick Links</h4>
      <ul class="p-0">
        <li class="nav-link p-0"><a class="text-white" href="./Index.php">>Home</a></li>
        <li class="nav-link p-0"><a class="text-white" href="./About.php">>About</a></li>
        <li class="nav-link p-0"><a class="text-white" href="./Bookings.php">>Bookings</a></li>
        <li class="nav-link p-0"><a class="text-white" href="./Halls.php">>Halls</a></li>
        <li class="nav-link p-0"><a class="text-white" href="./Contact.php">>Contact</a></li>
      </ul>
    </div>
    <div class="col-4 text-center">
    <h4 class="">Contact Us</h4>
      <ul class="">
        <li class="nav-link">
        <span><i class="fa fa-envelope"></i> contact@ovbs.com</span>
        </li>
        <li class="nav-link">
        <span><i class="fa fa-phone"></i> +92 345 123 4567</span>
        </li>
        <li class="nav-link">
        <span> <i class="fa fa-map-marker"></i> Sheikhupura Stadium, Punjab, Pakistan</span>
        </li>
      </ul>              
    </div>
  </div>
    <!-- Call to action -->
    <ul class="list-unstyled list-inline text-center py-2 footer-register">
      <li class="list-inline-item">
        <h5 class="mb-1">Register for free</h5>
      </li>
      <li class="list-inline-item">
        <a href="#" data-toggle="modal" data-target="#RegisterModal" class="btn btn-outline-white">Sign up!</a>
      </li>
    </ul>
    <!-- Call to action -->

  </div>
  <!-- Footer Elements -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3">© 2021 Copyright:
    <a class="text-white" href="./Index.php"> Online Venue Booking System</a>
    <a href="#Top"><i class="fa fa-arrow-up fa-2x text-white float-right pr-4"
    aria-hidden="true"></i></a>
  </div>
  <!-- Copyright -->

</footer>
<!-- Footer -->

    <script src="./Includes/jquery/jquery.min.js"></script> 
    <script src="./Includes/bootstrap/js/bootstrap.min.js"></script>
    <script>
          $(document).ready(function(){
            $("#booking-error").hide();
          });
          
          // Dismis Previous Modal / Login | Register - nav bar
          $("#register-btn").click(function(){
            $("#LoginModal").modal('hide');
            $("#LoginModal").fadeOut(1000);
          });

          $("#vlogin-btn").click(function(){
            $("#VRegisterModal").modal('hide');
            $("#VRegisterModal").fadeOut(1000);
          });
          //Vendors page          
          $("#vregister-btn").click(function(){
            $("#VLoginModal").modal('hide');
            $("#VLoginModal").fadeOut(1000);
          });

          $("#login-btn").click(function(){
            $("#RegisterModal").modal('hide');
            $("#RegisterModal").fadeOut(1000);
          });

          //Check old date in booking
          $("#checkvenue").click(function(e) {
        e.preventDefault();
        var searchdate = $("#findvenue").val();
        var d = new Date();
        d.setHours(0,0,0,0);

            if (Date.parse(searchdate)-Date.parse(new Date())<0) {
                // alert("ERROR! Plese Select Correct Date.");
                $("#booking-error").show();
            } else {
                    $("#findvenueform").submit();
                }
    });
    </script>   
</body>
</html>