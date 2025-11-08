<?php require_once '../template/header.php' ?>

<div class="container my-2 p-1">
    <h3>HRMS -> Department <a href="../Department/Create.php" class="btn btn-primary m-3">Add Department</a> </h3>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Department Id</th>
                    <th scope="col">Department Name</th>
                    <th scope="col">Manager Id</th>
                    <th scope="col">Location Id</th>
                </tr>
            </thead>
            <tbody>

                <?php
                require_once '../public/Departments.php';

                $dept = new Departments();
                $result = $dept->read();

                while ($row = $result->fetch_assoc()) {
                    echo '
                         <tr class="">
                             <td scope="row">'.$row['department_id'].'</td>
                             <td>'.$row['department_name'].'</td>
                             <td>'.$row['manager_id'].'</td>
                             <td>'.$row['location_id'].'</td>
                         </tr>

                    ';
                }
                ?>



            </tbody>
        </table>
    </div>


</div>


<?php require_once '../template/footer.php' ?>