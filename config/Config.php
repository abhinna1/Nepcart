<?php
    class Config{
        private $hostname;
        private $username;
        private $password;
        private $dbName;
        private $conn;
        public function __construct($hostname, $username, $password, $dbName){
            $this->hostname = $hostname;
            $this->username = $username;
            $this->password = $password;
            $this->dbName = $dbName;
        }
        public function connectDb(){
            $conn = new sqli($hostname, $username);
            if ($conn->connect_error) {
                echo '(<script>alert("Error in connection");</script>)';
            }
            else{
                echo '<script type="text/JavaScript"> 
                alert("connected to database");
                </script>';
            }
        }
    }

?>