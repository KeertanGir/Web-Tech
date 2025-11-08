<?php require_once '../template/header.php' ?>

<?php

require_once '../public/Employees.php';

$emp = new Employees();

if (isset($_POST['submit'])) {
    $empId = (int) $_POST['EmployeId'];
    $empfN = $_POST['EFN'];
    $emplN = $_POST['ELN'];
    $email = $_POST['email'];
    $phone = $_POST['phno'];
    $jobId = $_POST['jobId'];
    $hireDate = $_POST['hrdate'];
    $salary = (int) $_POST['salary'];
    $commission = (int) $_POST['commission'];
    $mngrId = (int) $_POST['MngrId'];
    $deptID = (int) $_POST['deptID'];

    $result = $emp->create($empId, $empfN, $emplN, $email, $phone, $hireDate, $jobId, $salary, $commission, $mngrId, $deptID);
    if ($result) { 
        header('location:../View/Employees.php');
    }else{
        echo '<p class="container bg-danger tect-center text-light">Failed To Store Employee</p>';
    }


}
?>

<div class="container my-2">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">

            <form action="" method="post">

                <div class="mb-3">
                    <label for="" class="form-label">Employee Id</label>
                    <input type="text" class="form-control" name="EmployeId" id="" aria-describedby="helpId"
                        placeholder="Enter Employee Id" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">First Name</label>
                    <input type="text" class="form-control" name="EFN" id="" aria-describedby="helpId"
                        placeholder="Enter First Name" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Last Name</label>
                    <input type="text" class="form-control" name="ELN" id="" aria-describedby="helpId"
                        placeholder="Enter Last Name" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Email</label>
                    <input type="text" class="form-control" name="email" id="" aria-describedby="helpId"
                        placeholder="Enter Employee Email" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Phone Number</label>
                    <input type="text" class="form-control" name="phno" id="" aria-describedby="helpId"
                        placeholder="Enter Employee Phone Number" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Hire Date</label>
                    <input type="date" class="form-control" name="hrdate" id="" aria-describedby="helpId"
                        placeholder="Select Hire Date" />
                </div>

                <!-- yahan Job ID read krni hy -->

                <div class="mb-3">
                    <label for="" class="form-label">Job ID</label>
                    <select class="form-select form-select-lg" name="jobId" id="">
                        <option selected>Select one</option>
                        <!-- yhn Jobs Read krni hain -->
                        <?php
                            require_once '../public/Jobs.php';
                            $jb = new Jobs();
                            $result = $jb->read();
                             while( $row = $result->fetch_assoc()){
                                echo '
                                <option value="'.$row['job_id'].'">'.$row['job_title'].'</option>
                                ';
                             }

                            ?>

                        

                    </select>
                </div>


                <div class="mb-3">
                    <label for="" class="form-label">Salary</label>
                    <input type="Number" class="form-control" name="salary" id="" aria-describedby="helpId"
                        placeholder="Enter Salary" />
                </div>


                <div class="mb-3">
                    <label for="" class="form-label">Commission Percentage</label>
                    <input type="Number" class="form-control" name="commission" id="" aria-describedby="helpId"
                        placeholder="Enter Salary" />
                </div>


                <!-- yahn Manager Id Laghani Hy -->
                <div class="mb-3">
                    <label for="" class="form-label">Manager Id</label>
                    <select class="form-select form-select-lg" name="MngrId" id="">
                        <option selected>Select one</option>

                        <?php
                            require_once '../public/Employees.php';

                            
                            $emp = new Employees();
                            $result = $emp->read();
                            while($row = $result->fetch_assoc()){
                                echo '<option value="'.$row['employee_id'].'">'.$row['first_name'].'</option>';
                            }
                        ?>

                        <option value="">New Delhi</option>

                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Department ID</label>
                    <select class="form-select form-select-lg" name="deptID" id="">
                        <option selected>Select one</option>
                        <?php
                        require_once '../public/Departments.php';

                        $dept = new Departments();
                        $result = $dept->read();
                        while ($row = $result->fetch_assoc()) {
                            echo '
                                  <option value="' . $row['department_id'] . '">' . $row['department_name'] . '</option>  
                                ';
                        }

                        ?>
                    </select>
                </div>

                <div class="mb-3">
                    <input type="submit" class="form-control btn btn-primary m-2" name="submit" id=""
                        aria-describedby="helpId" placeholder="Add Employee" />

                </div>


            </form>

        </div>

        <div class="col-4"></div>
    </div>
</div>



<?php require_once '../template/footer.php' ?>