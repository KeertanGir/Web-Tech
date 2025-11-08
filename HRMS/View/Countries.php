<?php require_once "../template/header.php" ?>

<div class="container my-2 p-1">
    <h3>HRMS -> Countries  <a href="../Countries/create.php" class="btn btn-primary m-3" >Add Country</a> </h3>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Country Id</th>
                    <th scope="col">Country Name</th>
                    <th scope="col">Region Id</th>
                </tr>
            </thead>
            <tbody>

                <?php
                require_once "../public/Countries.php";
                $c = new Countries();
                $result = $c->read();
                while ($row = $result->fetch_assoc()) {
                    echo '
                         <tr class="">
                            <td scope="row">'.$row['country_id'].'</td>
                            <td>'.$row['country_name'].'</td>
                            <td>'.$row['region_id'].'</td>
                        </tr>
                    ';
                }
                ?>

                

            </tbody>
        </table>
    </div>


</div>



<?php require_once "../template/footer.php" ?>