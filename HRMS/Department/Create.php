<?php require_once '../template/header.php' ?>

<?php
require_once '../public/Departments.php';

$d = new Departments();

if (isset($_POST['submit'])) {
    $deptID = (int) $_POST['dpt_id'];
    $deptName = $_POST['dpt_Name'];
    $mngrId = (int) $_POST['mngrId'];
    $loc_Id = (int) $_POST['LocId'];

    $result = $d->Create($deptID, $deptName, $mngrId, $loc_Id);
    if ($result) {
        header('location:../View/Department.php');
    } else {
        echo '<p class="container bg-danger text-center text-light">Faild To Store Department</p>';
    }
}

?>



<div class="container">

    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">
            <form action="" method="post">

                <div class="mb-3">
                    <label for="" class="form-label">Department Id</label>
                    <input type="number" class="form-control" name="dpt_id" id="" aria-describedby="helpId"
                        placeholder="Enter Department Id" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Department Name</label>
                    <input type="text" class="form-control" name="dpt_Name" id="" aria-describedby="helpId"
                        placeholder="Enter Department Name" />
                </div>

                <!-- yahan Manager Id Fectch / Read Krni hai -->

                <div class="mb-3">
                    <label for="" class="form-label">Manager Id</label>
                    <select class="form-select form-select-lg" name="mngrId" id="">
                        <option selected>Select one</option>
                        <?php
                            require_once '../public/Employees.php';

                            $emp = new Employees();
                            $result = $emp->read();
                            while($row = $result->fetch_assoc()){
                                echo '<option value="'.$row['employee_id'].'">'.$row['first_name'].'</option>';
                            }
                        ?>
                        
                    </select>
                </div>

                <!-- <div class="mb-3">
                    <label for="" class="form-label">Manager Id</label>
                    <input type="number" class="form-control" name="mngrId" id="" aria-describedby="helpId" placeholder="Enter The Manager Id" />
                    
                </div> -->



                <div class="mb-3">
                    <label for="" class="form-label">Location Id</label>
                    <select class="form-select form-select-lg" name="LocId" id="">
                        <option selected>Select one</option>

                        <?php
                        require_once '../public/Locations.php';

                        $loc = new Locations();

                        $result = $loc->read();
                        while ($row = $result->fetch_assoc()) {
                            echo '  <option value="' . $row['location_id'] . '">' . $row['street_address'] . '</option> ';
                        }


                        ?>


                    </select>
                </div>


                <div class="mb-3">

                    <input type="submit" class="form-control btn btn-primary" name="submit" id=""
                        aria-describedby="helpId" placeholder="Add Department" />

                </div>




            </form>

        </div>
        <div class="col-4"></div>
    </div>

</div>

<?php require_once '../template/footer.php' ?>