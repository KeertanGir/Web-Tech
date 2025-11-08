<?php 
    require_once '../Config/Database.php';

    class Departments extends Database {
        public function read(){
            return $this->conn->query('select * from departments');
        }

        public function Create($dept_id, $dept_name , $mngr_id, $loc_id){
            $sql = 'insert into departments(department_id, department_name, manager_id, location_id ) values (?, ?, ?, ?)';
            $stmt = $this->conn->prepare($sql);
            
            $stmt->bind_param("isii", $dept_id, $dept_name , $mngr_id, $loc_id);
            return $stmt->execute();
        }
    }
?>