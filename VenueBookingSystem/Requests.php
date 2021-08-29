<?php
$page_title = "Manage Requests | Online Venue Booking System";
include './Dashboard-nav.php';
//Find Current user
$logedin_user = '';
if(!empty($_SESSION["userid"])){
    $logedin_user = $_SESSION["userid"];
}
  //Cancel booking
  if (isset($_GET['cancelId'])) {
    $cancelId = $_GET['cancelId'];
    $sql = "UPDATE venue_bookings SET status = '4' WHERE  id = $cancelId";
    $result = mysqli_query($connection, $sql);
    if($result){
    echo '<div class="alert alert-warning alert-dismissible fade show mt-2 p-1" role="alert">
    <p class="p-2"><b>Success!</b><i> Booking .</i> is Cancled</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
        </div>';
    } else {
    // echo '<script> alert("Error Occured"); </script>';
    echo '<div class="alert alert-danger alert-dismissible fade show mt-2 p-1" role="alert">
    <p class="p-2"><b>ERROR!</b> Somehow an <i>Error</i> occured.</p>
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
    
    </div>';
}            
  }
?>
<!-- Page content holder -->
<div class="page-content p-5" id="content">
    <!-- Toggle button -->
    <button id="sidebarCollapse" type="button" class="btn btn-dark bg-dark rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Toggle</small></button>

    <!-- content -->
    <h1 class="display-4 text-white">Manage Requests</h1>
    <div id="carbon-block"></div>

    <div class="separator"></div>
    <div class="row text-white">
        <div class="col-lg-12">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                            Your Booking Requests
                             </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sr#</th>
                        <th>Details</th>
                        <th>Date</th>
                        <th>Venue</th>
                        <th>Vendor</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    //Show Bookings requests
                    $sql = "SELECT * FROM venue_bookings WHERE client_id = '" . $logedin_user . "'";
                    $result = mysqli_query($connection, $sql);
                    $sr=1;
                    while ($num = mysqli_fetch_assoc($result)) {
                        //test 2  || check for availability  
                        $sql2 = "SELECT availability.id, availability.name FROM availability RIGHT JOIN venue_bookings ON venue_bookings.status= availability.id WHERE venue_bookings.id = '" . $num["id"] . "' ";
                        $res = mysqli_query($connection, $sql2);
                        $status = mysqli_fetch_assoc($res);

                        //test 3  || check for venue name
                        $venue = "SELECT * FROM venues WHERE  id = '" . $num['venue_id'] . "'";
                        $venueFind = mysqli_query($connection, $venue);
                        $venueName = mysqli_fetch_assoc($venueFind);

                        //test 4  || check for vendor name
                        $vendor = "SELECT * FROM vendors WHERE  id = '" . $num['vendor_id'] . "'";
                        $vendorFind = mysqli_query($connection, $vendor);
                        $vendorName = mysqli_fetch_assoc($vendorFind);
                    ?>
                        <tr>
                            <td><?php echo $sr; ?></td>
                            <td><?php echo $num['details']; ?></td>
                            <td><?php echo $num['date']; ?></td>
                            <td><?php echo $venueName['name']; ?></td>
                            <td><?php echo $vendorName['name']; ?></td>
                            <td><?php echo $status['name']; ?></td>
                            <td>
                                <a class="text-danger" href="./Requests.php?cancelId=<?php echo $num['id']; ?>" >Cencel</a>
                            </td>
                        </tr>
                    <?php
                $sr++;    
                }
                    ?>
                </tbody>
            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End content -->

