<?php require_once '../template/header.php' ?>

<?php
 require_once '../public/Jobs.php';
 
 $jb = new Jobs();

 if(isset($_POST['submit'])){
    $jobId = $_POST['jobId'];
    $jobTitle = $_POST['job_title'];
    $min_Salary = (int) $_POST['min_sal'];
    $max_Salary = (int) $_POST['max_sal'];

    $result = $jb->create( $jobId , $jobTitle, $min_Salary, $max_Salary );
    if($result){
        header('location:../View/Jobs.php');
    }else{
        echo '<p class="container bg-danger text-center text-light" >Failed To Store Jobs</p>';
    }

 }
?>

<div class="container my-3">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="" method="post">

                <div class="mb-3">
                    <label for="" class="form-label">Job Id</label>
                    <input type="text" class="form-control" name="jobId" id="" aria-describedby="helpId"
                        placeholder="Enter Job Id" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Job title</label>
                    <input type="text" class="form-control" name="job_title" id="" aria-describedby="helpId"
                        placeholder="Enter Job Title" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Min Salary</label>
                    <input type="number" class="form-control" name="min_sal" id="" aria-describedby="helpId"
                        placeholder="Enter Min salary" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Job</label>
                    <input type="number" class="form-control" name="max_sal" id="" aria-describedby="helpId"
                        placeholder="Enter Max Salary" />
                </div>

                <div class="mb-3">
                   
                    <input type="submit" class="form-control btn btn-primary" name="submit" id="" aria-describedby="helpId" placeholder="" />
                  
                </div>


            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>


<?php require_once '../template/footer.php' ?>