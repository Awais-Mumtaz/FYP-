<?php
$page_title = "Update Cars | Online Venue Booking System";
include './Dashboard-nav.php';
if (isset($_POST['update_car_btn'])) {
    $id = $_POST['car_id'];
    $no = $_POST['car_number'];
    $price = $_POST['price'];

    $sql = "UPDATE cars SET car_number = '".$no."',  price = '".$price."'
    WHERE id='".$id."'";
    $result = mysqli_query($connection, $sql);                 
    if ($result) {
        echo '<script> alert("Data Updated"); </script>';
        header("Location: ./Cars.php");
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
    <h1 class="display-4 text-white">Update Cars</h1>
    <div id="carbon-block"></div>

    <div class="separator"></div>
    <div class="row text-white">
        <div class="col-lg-12">
            <div class="container-fluid">
                <div class="row">
                <div class="card p-0 m-0 col ">
                    <div class="card-header bg-dark text-white">
                    Update Car
                    </div>
                    <div class="card-body text-dark">
                    <?php
    //Update
    if (isset($_GET['edit_id'])) {
    $editId = $_GET['edit_id'];
    $sql = "SELECT * FROM cars WHERE  id = '" . $editId . "'";
    $result = mysqli_query($connection, $sql);                 
    while ($num =mysqli_fetch_assoc($result)) {

    ?>
               <form action="Car-update.php" method="post" >
                    <input class="form-control" type="hidden" name="car_id" id="car_id" value="<?php echo $num['id']; ?>">
                    <label for="car_number">Enter Car Number</label>
                    <input class="form-control" type="text" name="car_number" id="car_number" value="<?php echo $num['car_number']; ?>">
                    <label for="price">Enter Car Price</label>
                    <input class="form-control" type="number" name="price" id="price" value="<?php echo $num['price']; ?>">
                    <button id="update_car_btn" name="update_car_btn" type="submit" class="btn btn-outline-dark form-control mt-2">Update</button>
                </form>

  <?php
    }
        }
        ?>    
                    </div>
                </div>

                </div>
            </div>
        </div>
    </div>
    <!-- End content -->

