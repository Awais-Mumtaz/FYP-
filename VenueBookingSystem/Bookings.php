<?php
$page_title = "Bookings | Online Venue Booking System";
include 'Header.php';
?>
        <!-- Find Venue Search bar -->
        <div class="page-height">

<div class="container-fluid mt-1 mb-1">
    <div class="row">
        <div class="col-6 offset-3">
            <div class="card">
                <div class="card-header bg-dark text-white">
                    Find Venue
                </div>
                <form id="findvenueform" action="Bookings.php" method="get">
                    <input class="form-control" style="display: inline-block; width: 75%;" type="date" name="findvenue" id="findvenue">
                    <button id="checkvenue" type="submit" class="btn btn-outline-dark" style="width: 20%;">
                    Check</button>
                </form>
            </div>
        </div>
    </div>
</div>
<div id="booking-error" class="col-4 offset-4 card alert-danger p-1">
    <p class="p-2"><b>ERROR!</b> Selected Date is <i>Passed.</i> Plese Select Correct New Date.</p>

</div>
<?php
        if (isset($_GET['findvenue'])) {
        $vdate = mysqli_real_escape_string($connection, $_GET['findvenue']);
//        echo '<script> alert("'.$vdate.'") </script>';

        $sql2 = "SELECT * FROM venues WHERE availability = 2";
        $res = mysqli_query($connection, $sql2);
        //$status = mysqli_fetch_assoc($res);
       
        
        ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-8 offset-2">
            <table class="table table-striped table-bordered">

        <?php
        echo '<thead class="bg-dark text-white">
                    <tr>
                        <th>Sr#</th>
                        <th>Venue</th>
                        <th>Address</th>
                        <th>Price</th>
                    </tr>
                </thead>';
        // if ($check = mysqli_fetch_assoc($result)>0) {
            $isTrue=false;
            while ($num = mysqli_fetch_assoc($res)) {
                // $sql = "SELECT * FROM venue_bookings WHERE venue_id = '".$num['id']."'";
                $sql = "SELECT * FROM venue_bookings";
                $result = mysqli_query($connection, $sql);
                // $row = mysqli_fetch_assoc($result);
                
                //new test
                while ($row = mysqli_fetch_assoc($result)) {

                
                // if($row['venue_id'] != $num['id'] && $row['date'] = $vdate){
                    if($row['venue_id'] == $num['id']){
                        if($row['date'] == $vdate){
                            $isTrue=false;
                            goto next;
                            // echo '<script> alert("id = false") </script>';

                        }
                        else{

                            // echo '<script> alert("id = true") </script>';
                            // echo '<script> alert("'.$row['venue_id'].'") </script>';
                            // echo '<script> alert("'.$vdate.'") </script>';
                            // echo '<script> alert("'.$row['date'].'") </script>';

                            $isTrue= true;
                        }
                }
                else if($row['venue_id'] != $num['id']){
                    $isTrue=true;
                //         //    echo '<script> alert("'.$isTrue.'") </script>';
                }
                else{
                    $isTrue=false;
                }
            }
                // lable test
                next:
                if($isTrue){

                
        ?>

                    <tr>
                        <td id="venue_id" value="<?php echo $num["id"] ?>">
                        <?php echo $num['id']; ?></td>
                        <td><a id="showvenuedetails" href="ShowDetails.php?venue_id=<?php echo $num["id"] ?>" type="button">
                        <?php echo $num['name']; ?></a></td>
                        <td><?php echo $num['address']; ?></td>
                        <td><?php echo $num['price']; ?></td>
                    </tr>
        <?php
                }

        }
    }
        ?>               
            </table>
        </div>
    </div>
</div>


</div>

<!-- <div class="container bg-dark text-white">
    <p>test</p>
</div> -->
<!-- <script>
    //     $("#checkvenue").click(function(e) {
    //     e.preventDefault();
    //     var searchdate = $("#findvenue").val();
    //     var d = new Date();
    //     d.setHours(0,0,0,0);

    //         if (Date.parse(searchdate)-Date.parse(new Date())<0) {
    //             alert("ERROR! Plese Select Correct Date.");
    //         } else {
    //                 $("#findvenueform").submit();
    //             }
    // });
 </script> -->

<?php
include 'Footer.php';
?>