<?php require_once '../template/header.php' ?>

<div class="container my-2 p-1" >

    <h3>HRMS -> Regions  <a href="../Region/Create.php" class="btn btn-primary m-3">Add Region</a></h3>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Region Id</th>
                    <th scope="col">Region Name</th>
                </tr>
            </thead>
            <tbody>
            
                <?php
                require_once '../public/region.php';
                $r = new region();
                $result = $r->read();
                while( $row = $result->fetch_assoc()){
                    echo '
                         <tr class="">
                             <td scope="row">'.$row['region_id'].'</td>
                             <td>'.$row['region_name'].'</td>
                         </tr>
                    ';
                }

                ?>

            </tbody>
        </table>
    </div>



</div>


<?php require_once '../template/footer.php' ?>