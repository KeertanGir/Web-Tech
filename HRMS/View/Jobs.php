<?php require_once '../template/header.php' ?>

<div class="container my-2 p-1">
    <h3>HRMS -> Jobs <a href="../Jobs/Create.php" class="btn btn-primary m-3">Add Job</a> </h3>

    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Job Id</th>
                    <th scope="col">Job Title</th>
                    <th scope="col">Min Salary</th>
                    <th scope="col">Max Salary</th>
                </tr>
            </thead>
            <tbody>

                <?php
                require_once '../public/Jobs.php';
                $jb = new Jobs();
                $result = $jb->read();
                while ($row = $result->fetch_assoc()) {
                    echo '
                        <tr class="">
                            <td scope="row">'.$row['job_id'].'</td>
                            <td>'.$row['job_title'].'</td>
                            <td>'.$row['min_salary'].'</td>
                            <td>'.$row['max_salary'].'</td>
                        </tr>

                        ';
                }

                ?>



            </tbody>
        </table>
    </div>


</div>


<?php require_once '../template/footer.php' ?>