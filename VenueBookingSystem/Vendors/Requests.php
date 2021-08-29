<?php
$page_title = "Manage Requests | Online Venue Booking System";
include './Dashboard-nav.php';
//Find Current user
$logedin_vendor = $_SESSION["vendorname"];
$find = "SELECT * FROM vendors WHERE name = '" . $logedin_vendor . "' LIMIT 1 ";
$res = mysqli_query($connection, $find);
$row = mysqli_fetch_assoc($res);


// Delete Car
if (isset($_GET['delete_id'])) {
    $venue_id = $_GET['delete_id'];
    $sql = "DELETE FROM cars WHERE id= '" . $venue_id . "'";
    $result = mysqli_query($connection, $sql);
    if ($result) {
        echo '<script> alert("Record Deleted"); </script>';
    } else {
        echo '<script> alert("Error Occured"); </script>';
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
                            New Booking Requests
                             </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr#</th>
                                        <th>Details</th>
                                        <th>Date</th>
                                        <th>Venue</th>
                                        <th>Client</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //Show Venues
                                    $sql = "SELECT * FROM venue_bookings WHERE vendor_id = '" . $row['id'] . "'";
                                    $result = mysqli_query($connection, $sql);

                                    while ($num = mysqli_fetch_assoc($result)) {
                                        //test 2    
                                        $sql2 = "SELECT status.id, status.name FROM status RIGHT JOIN venue_bookings ON venue_bookings.status= status.id WHERE venue_bookings.id = '" . $num["id"] . "' ";
                                        $res = mysqli_query($connection, $sql2);
                                        $status = mysqli_fetch_assoc($res);
                                    ?>
                                        <tr>
                                            <td><?php echo $num['id']; ?></td>
                                            <td><?php echo $num['details']; ?></td>
                                            <td><?php echo $num['date']; ?></td>
                                            <td><?php echo $num['venue_id']; ?></td>
                                            <td><?php echo $num['client_id']; ?></td>
                                            <td><?php echo $status['name']; ?></td>
                                            <td>
                                                <a href="./Car-update.php?edit_id=<?php echo $num['id']; ?>">Approve</a>
                                                <a name="deletevenue" id="deletevenue" type="submit" href="./Cars.php?delete_id=<?php echo $num['id']; ?>" onclick="return confirm('Do you really want to Delete ?');">Reject</a>
                                            </td>
                                        </tr>
                                    <?php
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

    <!-- Add Venue Modal -->
    <div class="modal fade" id="AddCarMondal" tabindex="-1" role="dialog" aria-labelledby="AddCarMondal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content shadow-lg">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="ChangePasswordModalLabel">Add New Car</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="text-white" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="Cars.php" method="post" id="AddCarMondal">
                        <!-- <input class="form-control" type="hidden" name="user_id" id="user_id"> -->
                        <label for="car_num">Enter Car Number</label>
                        <input class="form-control" type="text" name="car_num" id="car_num">
                        <label for="car_price">Enter Car Price</label>
                        <input class="form-control" type="text" name="car_price" id="car_price">
                        <button id="add_car_btn" type="submit" class="btn btn-outline-dark form-control mt-2">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Add Venue Modal -->