<?php require_once '../template/header.php' ?>

<div class="container my-2 p-1">

    <h3>HRMS -> Employees <a href="../Employee/Create.php" class="btn btn-primary m-3" >Add Employee</a> </h3>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Employee Id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Phone Number</th>
                    <th scope="col">Hire Date</th>
                    <th scope="col">Job id</th>
                    <th scope="col">Salary</th>
                    <th scope="col">Commission PCT</th>
                    <th scope="col">Manager Id</th>
                    <th scope="col">Department Id</th>

                </tr>
            </thead>
            <tbody>

                <?php
                    require_once '../public/Employees.php';

                    $emp = new Employees();
                    $result = $emp->read();
                    while($row = $result->fetch_assoc()){
                        echo '
                                 <tr class="">
                                     <td scope="row">'.$row['employee_id'].'</td>
                                     <td>'.$row['first_name'].'</td>
                                     <td>'.$row['last_name'].'</td>
                                     <td>'.$row['email'].'</td>
                                     <td>'.$row['phone_number'].'</td>
                                     <td>'.$row['hire_date'].'</td>
                                     <td>'.$row['job_id'].'</td>
                                     <td>'.$row['salary'].'</td>
                                     <td>'.$row['commission_pct'].'</td>
                                     <td>'.$row['manager_id'].'</td>
                                     <td>'.$row['department_id'].'</td>
                                 </tr>


                        ';
                    }

                ?>

            </tbody>
        </table>
    </div>


</div>

<?php require_once '../template/footer.php' ?>