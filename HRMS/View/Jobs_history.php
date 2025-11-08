<?php require_once '../template/header.php' ?>

<div class="container my-2 p-1">
    <h3>HRMS -> Job History <a href="../JobHistory/Create.php" class="btn btn-primary m-3">Add Job History</a> </h3>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Employee Id</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">End Date</th>
                    <th scope="col">Job Id</th>
                    <th scope="col">Department Id</th>
                </tr>
            </thead>

            <tbody>

                <?php
                    require_once '../public/jobs_history.php';

                    $jbh = new JobHistory();
                    $result = $jbh->read();
                    while ($row = $result->fetch_assoc()){
                        echo '
                         <tr class="">
                             <td scope="row">'.$row['employee_id'].'</td>
                             <td>'.$row['start_date'].'</td>
                             <td>'.$row['end_date'].'</td>
                             <td>'.$row['job_id'].'</td>
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