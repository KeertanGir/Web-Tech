<?php 
    require_once '../Config/Database.php';

    class region extends Database {

        public function read(){
            return $this->conn->query("Select * from regions") ;
        }

        public function create($regionID, $regionName){
            $sql = "insert into regions(region_id, region_name) values (? , ?)";
            $stmt = $this->conn->prepare($sql);

            $stmt->bind_param("is", $regionID, $regionName);
            return $stmt->execute();

        }
    }
?>