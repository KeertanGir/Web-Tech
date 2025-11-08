<?php
    require_once '../Config/Database.php';

    class Locations extends Database{

        public function read(){
           return $this->conn->query('Select * from locations');
        }

        public function create($loc_id, $street_addr, $postal_cod, $city, $state, $country_Id){
            $sql = 'insert into locations(location_id, street_address, postal_code, city, state_province, country_id) values (?, ?, ?, ?, ?, ?)';
            $stmt = $this->conn->prepare($sql);
            
            $stmt->bind_param('isssss', $loc_id, $street_addr, $postal_cod, $city, $state, $country_Id);
            return $stmt->execute();
        }
    }

?>