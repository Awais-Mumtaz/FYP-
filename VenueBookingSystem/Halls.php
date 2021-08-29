<?php
$page_title = "Halls | Online Venue Booking System";
include 'Header.php'; 
?>

<div class="container ">
<div class="row">
<?php 
 $sql = "SELECT * FROM venues ";
 $result = mysqli_query($connection, $sql);

 while ($num = mysqli_fetch_assoc($result)) {

    
?>

<div class="col-4">
    <div class="card mt-1 mb-1">
    
    <?php 
        //  get image
        $images = "SELECT * FROM images WHERE id='".$num['image']."' LIMIT 1";
        $res_image = mysqli_query($connection, $images);
        $img = mysqli_fetch_assoc($res_image);
        if ($img >0) {
 
    ?>
    <div>
    <!-- <img class="card-img" src="./Includes/media/Default-venue.jpg" alt="" srcset=""> -->
    <img class="card-img" src="./Includes/uploads/<?php echo $img['name']; ?>"
    width="250px" height="250px">
    </div>
    <?php 
    }
    else{

        ?>
        <div>
    <img class="card-img" src="./Includes/media/Default-venue.jpg" alt="" srcset=""
    width="250px" height="250px">
    </div>
    <?php }?>
    <div class="card-footer">
    <a class="text-dark" href="ShowDetails.php?venue_id=<?php echo $num["id"] ?>" type="button"><?php echo $num['name'];?></a>
    <p><?php echo $num["address"] ?></p>
    </div>
    </div>
</div>
<?php } ?>
</div>
</div>
<?php
include 'Footer.php';
?>

                                  
                          

                       