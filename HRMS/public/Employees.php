<?php

    require_once '../Config/Database.php';

    class Employees extends Database {
        public function read(){
            return $this->conn->query('select * from employees');
        }

        public function create($emp_id, $emp_fn, $emp_ln, $email , $phno, $hireDate, $jobId, $salary , $commisionPct , $managerid, $deptId  ){
            $sql = 'insert into employees(employee_id, first_name, last_name, email, phone_number, hire_date, job_id, salary, commission_pct, manager_id, department_id) values (?, ?, ?, ?, ?, ?, ?, ?, ?, ? ,?)';
            $stmt = $this->conn->prepare($sql);
            $stmt->bind_param("issssssiiii", $emp_id, $emp_fn, $emp_ln, $email, $phno, $hireDate, $jobId, $salary, $commisionPct, $managerid, $deptId);
            return $stmt->execute();
        }
    }


?>