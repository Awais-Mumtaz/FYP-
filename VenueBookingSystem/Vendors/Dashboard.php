<?php
$page_title = "Dashboard | Online Venue Booking System";
include'./Dashboard-nav.php';
?>
<!-- Page content holder -->
<div class="page-content p-5" id="content">
  		<!-- Toggle button -->
  		<button id="sidebarCollapse" type="button" class="btn btn-dark bg-dark rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

  <!-- Demo content -->
  	<h1 class="display-4 text-white">Dashboard</h1>
    <div id="carbon-block"></div>

  		<p class="lead text-white mb-0">Everything at a glanace. <i class="fa fa-smile-o" aria-hidden="true"></i></p>
  	<div class="separator"></div>
	  <div class="container-fluid">
	  </div>
  		<div class="row text-white">
				<div class="col-3 p-2 card bg-danger">
				<p>Order Requests</p>
				<p><i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i><span class="float-right">11</span></p>
				</div>
				<div class="col-3 p-2 card bg-info">
				<p>Orders Confirms</p>
				<p><i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i><span class="float-right">30</span></p>
				</div>
				<div class="col-3 p-2 card bg-success">
				<p>Total Venues</p>
				<p><i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i><span class="float-right">5</span></p>
				</div>
				<div class="col-3 p-2 card bg-secondary">
				<p>Total Cars</p>
				<p><i class="fa fa-cart-plus fa-2x" aria-hidden="true"></i><span class="float-right">2</span></p>
				</div>

  		</div>
</div>

	
<!-- End content -->