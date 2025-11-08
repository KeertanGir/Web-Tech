<?php

    require_once '../Config/Database.php';

    class JobHistory extends Database{
        public function read(){
            return $this->conn->query('select * from job_history');
        }

        public function create($emp_Id, $start_date, $end_date , $job_id, $dept_Id){
            $sql = 'insert into job_history(employee_id, start_date, end_date, job_id, department_id) values( ?, ?, ?, ?, ?)';
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_Param("isssi", $emp_Id, $start_date, $end_date, $job_id, $dept_Id);
            return $stmt->execute();
        }
    }

    
?>