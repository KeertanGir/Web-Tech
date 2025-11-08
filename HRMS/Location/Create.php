<?php require_once '../template/header.php' ?>


<?php
require_once '../public/Locations.php';

$loc = new Locations();

if (isset($_POST['submit'])) {


    $locId = (int) $_POST['loc_id'];
    $stAddr = $_POST['st_addr'];
    $postalCD = $_POST['pstl_cd'];
    $city = $_POST['city'];
    $stprov = $_POST['st_prov'];
    $countryID = $_POST['county_id'];

    $result = $loc->create($locId, $stAddr, $postalCD, $city, $stprov, $countryID);

    if ($result) { 
        header('location: ../View/Locations.php');
    }else{
        echo '<p class="container bg-danger text-center text-light">Faild To Store Location</p>';
    }    


}

?>



<div class="container my-2">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4">

            <form action="" method="post">

                <div class="mb-3">
                    <label for="" class="form-label">Location Id</label>
                    <input type="Number" class="form-control" name="loc_id" id="" aria-describedby="helpId"
                        placeholder="Enter Location Id" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Street Address</label>
                    <input type="input" class="form-control" name="st_addr" id="" aria-describedby="helpId"
                        placeholder="Enter Street Address" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Postal Code</label>
                    <input type="input" class="form-control" name="pstl_cd" id="" aria-describedby="helpId"
                        placeholder="Enter Postal Code" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">City</label>
                    <input type="input" class="form-control" name="city" id="" aria-describedby="helpId"
                        placeholder="Enter City" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">State Province</label>
                    <input type="input" class="form-control" name="st_prov" id="" aria-describedby="helpId"
                        placeholder="Enter State Province" />
                </div>

                <div class="mb-3">
                    <label for="" class="form-label">Country</label>
                    <select class="form-select form-select-lg" name="county_id" id="">
                        <option selected>Select one</option>

                        <?php
                        require_once '../public/Countries.php';
                        $country = new Countries();
                        $result = $country->read();
                        while ($row = $result->fetch_assoc()) {
                            echo '   <option value="' . $row['country_id'] . '">' . $row['country_name'] . '</option>';
                        }



                        ?>


                    </select>
                </div>

                <div class="mb-3">
                   
                    <input type="submit" class="form-control btn btn-primary " name="submit" id="" aria-describedby="helpId" placeholder="Add Location" />

                </div>



            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>

<?php require_once '../template/footer.php' ?>