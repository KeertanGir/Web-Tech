<?php require_once '../template/header.php' ?>


<?php
require_once '../public/jobs_history.php';

    $jbh = new JobHistory();


if (isset($_POST['submit'])) {
    $employeeId = (int) $_POST['emp_Id'];
    $strt_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $jobId =  $_POST['jobId'];
    $deptID = (int) $_POST['DeptId'];

    $result = $jbh->create($employeeId, $strt_date, $end_date, $jobId, $deptID);
    if ($result) {

        header('location:../View/Jobs_history.php');

    }else{
        echo '<p class="container bg-danger text-center text-light">Faild To store</p>';
    }

}

?>

<div class="container my-3">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">

            <form action="" method="post">

                <div class="mb-3">
                    <label for="" class="form-label">Employee ID</label>
                    <select class="form-select form-select-lg" name="emp_Id" id="">
                        <option selected>Select one</option>

                        <?php
                        require_once '../public/Employees.php';

                        $emp = new Employees();
                        $result = $emp->read();
                        while ($row = $result->fetch_assoc()) {
                            echo ' 
                                  <option value="' . $row['employee_id'] . '">' . $row['first_name'] . ' ' . $row['last_name'] . ' (ID : ' . $row['employee_id'] . ')</option>
                                ';
                        }

                        ?>


                    </select>
                </div>


                <div class="mb-3">
                    <label for="" class="form-label">Start Date</label>
                    <select class="form-select form-select-lg" name="start_date" id="">
                        <option selected>Select one</option>

                        <?php
                        require_once '../public/Employees.php';

                        $emp = new Employees();
                        $result = $emp->read();
                        while ($row = $result->fetch_assoc()) {
                            echo ' 
                                  <option value="' . $row['hire_date'] . '">' . $row['first_name'] . ' ' . $row['last_name'] . '</option>
                                ';
                        }

                        ?>


                    </select>
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">End Date</label>
                    <input type="date" class="form-control" name="end_date" id="" aria-describedby="helpId"
                        placeholder="" />
                </div>


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
                    <label for="" class="form-label">Department Id</label>
                    <select class="form-select form-select-lg" name="DeptId" id="">
                        <option selected>Select one</option>

                        <?php
                        require_once '../public/Departments.php';

                        $dept = new Departments();
                        $result = $dept->read();
                        while ($row = $result->fetch_assoc()) {
                            echo ' 
                                  <option value="' . $row['department_id'] . '">' . $row['department_name'] . ' </option>
                                ';
                        }

                        ?>


                    </select>
                </div>





                <div class="mb-3">

                    <input type="submit" class="form-control btn btn-primary " name="submit" id=""
                        aria-describedby="helpId" placeholder="Add Job History" />

                </div>






            </form>

        </div>
        <div class="col-4"></div>
    </div>
</div>


<?php require_once '../template/footer.php' ?>