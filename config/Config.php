<?php
    class Config{
        private $hostname;
        private $username;
        private $password;
        private $dbName;
        private $conn;
        private static $object;
        public function __construct($hostname, $username, $password, $dbName){
            $this->hostname = $hostname;
            $this->username = $username;
            $this->password = $password;
            $this->dbName = $dbName;
        }
        public function connectDb(){
            
            try{
                $this->conn = new mysqli($this->hostname, $this->username, $this->password, $this->dbName);
                
            }
            catch(Exception $e){
                echo $e;
                echo '(<script>alert("Error in connection");</script>)';
            }

            // try{
            // $this->conn = new PDO(
            //     "mysql:host=$this->hostname; dbname=$this->dbName",
            //     $this->username, $this->password);
            // }
            // catch(Exception $e){
            //     echo "error in connection";
            // }
            return $this->conn;
        }
        public static function getObject(){
            $object = new Config("localhost", "Abhinna", '$abhi123', "nepcart_db");
            return $object;
        }
    }

?>