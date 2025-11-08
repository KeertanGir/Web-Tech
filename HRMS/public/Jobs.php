<?php
    require_once '../Config/Database.php';

    class Jobs extends Database {

        public function read(){
           return $this->conn->query('select * from jobs');
        }

        public function create($jobId, $jobTitle, $minSalary, $maxSalary){
            $sql = 'insert into jobs(job_id, job_title, min_salary, max_salary) values (?,?,?,?)';
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("ssii", $jobId, $jobTitle, $minSalary, $maxSalary);
            return $stmt->execute();
        }
    }
?>