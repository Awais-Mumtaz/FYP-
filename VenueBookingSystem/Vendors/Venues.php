<?php
$page_title = "Manage Venues | Online Venue Booking System";
include './Dashboard-nav.php';
//Find Current user
$logedin_vendor = $_SESSION["vendorid"];

//Insert New Venue
if (isset($_POST['add_venue_btn'])) {
    $vname = mysqli_real_escape_string($connection, $_POST['venue_name']);
    $vaddress = mysqli_real_escape_string($connection, $_POST['venue_address']);
    $vprice = mysqli_real_escape_string($connection, $_POST['venue_price']);
    $vDescription = mysqli_real_escape_string($connection, $_POST['venue_description']);
        //Image 
        $image = $_FILES['imageupload']['name'];
        $temp = explode(".", $_FILES["imageupload"]["name"]);
        $newfilename = round(microtime(true)) . '.' . end($temp);
        $imageInsert = "INSERT INTO images (name)
        VALUES ('$newfilename')";
        $resImage = mysqli_query($connection,$imageInsert);
    
        if(copy($_FILES['imageupload']['tmp_name'], "../Includes/uploads/" .$newfilename)){
    
            $findNewVenueImage = "SELECT * FROM images WHERE name = '".$newfilename."' LIMIT 1";
            $VenueImage = mysqli_query($connection, $findNewVenueImage);
            $VenueImageResults = mysqli_fetch_assoc($VenueImage);
            // $UpdateVenueImageId = "UPDATE venues SET image = '".$VenueImageResults['id']."' WHERE name = $vname";
            // $UpdateVenueImage = mysqli_query($connection, $UpdateVenueImageId);
         
                    // echo '<script> alert("no error"); </script>';
        }
        else{
                    echo '<script> alert("erroe occured in image upload"); </script>';
        }
    $sql = "INSERT INTO venues (name, address, price, vendor_id, description, image) VALUES
    ('$vname', '$vaddress', '$vprice', ' $logedin_vendor', '$vDescription', '".$VenueImageResults["id"]."')";
    $result = mysqli_query($connection, $sql);
    if ($result) {

        // echo '<script> alert("Data Uploaded"); </script>';
        echo '<div class="alert alert-success alert-dismissible fade show mt-2 p-1" role="alert">
        <p class="p-2"><b>Success!</b><i> Venue.</i> is added</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
            </div>';

    }

    else {
        // echo '<script> alert("Error Occured"); </script>';
        echo '<div class="alert alert-danger alert-dismissible fade show mt-2 p-1" role="alert">
        <p class="p-2"><b>ERROR!</b> Somehow an <i>Error </i> occured.</p>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
        
        </div>';
    }
}

// Delete Venue
if (isset($_GET['delete_id'])) {
    $venue_id = $_GET['delete_id'];
    $sql = "DELETE FROM venues WHERE id= '" . $venue_id . "'";
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
    <h1 class="display-4 text-white">Manage Venues</h1>
    <div id="carbon-block"></div>

    <div class="separator"></div>
    <div class="row text-white">
        <div class="col-lg-12">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-10 offset-1">
                        <div class="card">
                            <div class="card-header bg-dark text-white">
                                <a class="text-white" href="" data-toggle="modal" data-target="#AddVenueMondal">[Add New Venue]</a>
                            </div>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Sr#</th>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                        <th>Price</th>
                                        <th>Actions</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    //Show Venues
                                    $sql = "SELECT * FROM venues WHERE vendor_id = '" . $logedin_vendor . "'";
                                    $result = mysqli_query($connection, $sql);
                                    
                                    $sr=1;
                                    while ($num = mysqli_fetch_assoc($result)) {
                                        //test 2    
                                        $sql2 = "SELECT status.id, status.name FROM status RIGHT JOIN venues ON venues.venue_status= status.id WHERE venues.id = '" . $num["id"] . "' ";
                                        $res = mysqli_query($connection, $sql2);
                                        $status = mysqli_fetch_assoc($res);
                                    ?>
                                        <tr>
                                            <td><?php echo $sr; ?></td>
                                            <td><?php echo $num['name']; ?></td>
                                            <td><?php echo $num['address']; ?></td>
                                            <td><?php echo $num['description']; ?></td>
                                            <td><?php echo $num['price']; ?></td>
                                            <td>
                                                <a href="./Venue-update.php?edit_id=<?php echo $num['id']; ?>">Edit</a>
                                                <a name="deletevenue" id="deletevenue" type="submit" href="./Venues.php?delete_id=<?php echo $num['id']; ?>" onclick="return confirm('Do you really want to Delete ?');">Delete</a>
                                            </td>
                                            <td><?php echo $status['name']; ?></td>
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

    <!-- Add Venue Modal -->
    <div class="modal fade" id="AddVenueMondal" tabindex="-1" role="dialog" aria-labelledby="AddVenueMondal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content shadow-lg">
                <div class="modal-header bg-dark text-white">
                    <h5 class="modal-title" id="ChangePasswordModalLabel">Add New Venue</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="text-white" aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="Venues.php" method="post" id="AddVenueMondal" enctype="multipart/form-data">
                        <!-- <input class="form-control" type="hidden" name="user_id" id="user_id"> -->
                        <label for="venue_name">Enter Venue Name</label>
                        <input class="form-control" type="text" name="venue_name" id="venue_name">
                        <label for="venue_address">Enter Venue Address</label>
                        <input class="form-control" type="text" name="venue_address" id="venue_address">
                        <label for="venue_price">Enter Venue Price</label>
                        <input class="form-control" type="text" name="venue_price" id="venue_price">
                        <label for="venue_description">Enter Venue Description</label>
                        <input class="form-control" type="text" name="venue_description" id="venue_description">
                        <input type="hidden" name="size" value="1000000">
                        <input type="file" class="form-control" name="imageupload"  class="form-group" required>
                        <button id="add_venue_btn" name="add_venue_btn" type="submit" class="btn btn-outline-dark form-control mt-2">Add</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END Add Venue Modal -->
