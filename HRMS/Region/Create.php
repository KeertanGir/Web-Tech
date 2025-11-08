<?php require_once '../template/header.php' ?>


<?php
    require_once '../public/region.php';

    $r = new region();

    if(isset(($_POST['submit']))){

        $regionId = (int) $_POST['reg_id'];
        $regionName = $_POST['reg_name'];

        $result = $r->create($regionId, $regionName);
        if($result){
            header('location: ../View/Regions.php');
        }else{
            echo '<p class="container bg-danger text-center text-light " >Failed To Store Region</p>';
        }

    }

?>
<!-- Create Krny ka Html Hy -->
<div class="container my-2">

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
             <form action="" method="post">

        <div class="mb-3">
            <label for="" class="form-label">Region Id</label>
            <input type="number" class="form-control" name="reg_id" aria-describedby="helpId" placeholder="Enter Region ID" />
        </div>

        <div class="mb-3">
            <label for="" class="form-label">Region Name</label>
            <input type="text" class="form-control" name="reg_name" aria-describedby="helpId" placeholder="Enter Region Name" />
        </div>

        <div class="mb-3">
            
            <input type="submit" class="form-control btn btn-primary" name="submit" id="" aria-describedby="helpId" placeholder="Add Region" />
            
        </div>


    </form>

        </div>
        <div class="col-4"></div>
    </div>

   
</div>



<?php require_once '../template/footer.php' ?>