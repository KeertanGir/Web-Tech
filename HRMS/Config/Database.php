<?php 

    class Database{

        private $host = "localhost";
        private $user = "root";
        private $password = "";
        private $database = "hr";
        protected $conn;

        public function __construct(){
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->database);
            if(!$this->conn){
                echo "Not Connected";
            }
        }
    }

?>