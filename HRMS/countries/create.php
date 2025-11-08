<?php require_once '../template/header.php' ?>


<?php
require_once '../public/Countries.php';

$c = new Countries();

if (isset(($_POST['submit']))) {
    $ri = (int) $_POST['Region_ID'];
    $cn = $_POST['cnt_name'];
    $ci = $_POST['cnt_id'];
    $result = $c->create($ci, $cn, $ri);

    if ($result) {
        header('location:../View/Countries.php');
    } else {
        echo '<p class="container bg-danger text-center text-light"> Failed To Store Country </p>';
    }

}
?>


<div class="container-fluid">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 p-2">
            <form action="" method="post">
                <div class="mb-3">
                    <label for="" class="form-label  ">Country Id</label>
                    <input type="text" class="form-control" name="cnt_id" require aria-describedby="helpId"
                        placeholder="Enter Country ID" />
                </div>
                <div class="mb-3">
                    <label for="" class="form-label  ">Country Name</label>
                    <input type="text" class="form-control" name="cnt_name" require aria-describedby="helpId"
                        placeholder="Enter Country Name" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Region ID</label>
                    <select class="form-select form-select-lg" name="Region_ID" id="">
                        <option selected>Select one</option>

                        <?php

                        require_once '../public/region.php';
                        $reg = new region();
                        $result = $reg->read();
                        while ($row = $result->fetch_assoc()) {
                            echo '
                                <option value=' . $row['region_id'] . '>' . $row['region_name'] . '</option>
                                
                         ';
                        }

                        ?>

                    </select>
                </div>

                <div class="mb-3">

                    <input type="submit" class="form-control btn btn-primary" name="submit" aria-describedby="helpId"
                        placeholder="Add Country" />

                </div>



            </form>

        </div>
        <div class="col-4"></div>
    </div>

</div>

<?php require_once '../template/footer.php' ?>