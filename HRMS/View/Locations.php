<?php require_once '../template/header.php' ?>

<div class="container my-2 p-1">
    <h3>HRMS -> Locations <a href="../Location/Create.php" class="btn btn-primary m-3">Add Location</a></h3>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Location Id</th>
                    <th scope="col">Street Address</th>
                    <th scope="col">Postal Code</th>
                    <th scope="col">City</th>
                    <th scope="col">State Province</th>
                    <th scope="col">Country Id</th>
                </tr>
            </thead>
            <tbody>

                <?php
                    require_once '../public/Locations.php';
                    $loc = new Locations();
                    $result = $loc->read();
                    while($row = $result->fetch_assoc()){
                        echo '
                            <tr class="">
                               <td scope="row">'.$row['location_id'].'</td>
                               <td>'.$row['street_address'].'</td>
                               <td>'.$row['postal_code'].'</td>
                               <td>'.$row['city'].'</td>
                               <td>'.$row['state_province'].'</td>
                               <td>'.$row['country_id'].'</td>
                            </tr>
                        ';
                    }  
                ?>


                
            </tbody>
        </table>
    </div>

</div>


<?php require_once '../template/footer.php' ?>