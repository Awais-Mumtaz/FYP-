<?php 
$page_title = "Contact | Online Venue Booking System";
Include 'Header.php';
?>    
<div class="container-fluid bg-info pt-1 pb-3">
    <div>
        <h4 class="venues-head">Contact US</h4>
    </div>
<div class="row p-3">
            <div class="card col-6 m-0 p-0">
                <div class="card-header bg-dark text-white">
                    Send Your Query
                </div>
                <div class="card-body">
                    <form action="#" action="post">
                        <input class="form-control mb-1" type="text" name="fname" id="fname" placeholder="Enter Your Name *">
                        <input class="form-control mb-1" type="email" name="email" id="email" placeholder="Enter Your Email *">
                        <textarea class="form-control mb-1" name="msg" id="msg" cols="20" rows="1" placeholder="Write Your Message *"></textarea>
                        <button class="form-control btn btn-outline-dark" type="submit">Send</button>
                    </form>
                </div>
            </div>

            <div class="col-3">
                <div class="card w-100 h-100 m-0 p-0">
                <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d4636.773283877829!2d73.97501381797102!3d31.707243392785273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x3918c3331008f699%3A0x67d30b4abd01648!2sHamza%20Computers%20Shop%20%23%2058%2C%20Stadium%20Rd%2C%20Sheikhupura%2C%20Punjab%2C%20Pakistan!3m2!1d31.7073412!2d73.975614!5e0!3m2!1sen!2s!4v1619263979208!5m2!1sen!2s"
                allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
            <div class="col-3 text-center">
            <h4 class="">Contact Details</h4>
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
</div>
<?php
include 'Footer.php';
?>