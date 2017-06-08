<?php

//class DbConn
//{
//    public $conn;
//    public function __construct()
//    {
////        require 'dbconf.php';
////        $this->host = $host; // Host name
////        $this->username = $username; // Mysql username
////        $this->password = $password; // Mysql password
////        $this->db_name = $db_name; // Database name
//////        $this->tbl_members = $tbl_members;
////
////			// Connect to server and select database.
//////			$this->conn = new PDO('mysql:host=' . $host . ';dbname=' . $db_name . ';charset=utf8', $username, $password);
//////			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////        $this->conn = @mysqli_connect( $this->host,$this->username,$this->password) OR die('Database connection error'.mysqli_connect_error());
//        $servername = "127.0.0.1";
//        $username = "root";
//        $password = "";
//        $name = "seaPluzDb";
//// Create connection
//        $conn = new mysqli($servername, $username,$password,$name);
//
//// Check connection
//        if ($conn->connect_error) {
//            die("Connection failed: " . $conn->connect_error);
//        }
//        echo "Connected successfully";
//
//    }
class createCon
{
    var $servername = "127.0.0.1";
    var $username = "root";
    var $password = "";
    var $dbname = "seaPluzDb";
    var $myconn;

    function connect()
    {
        $con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;
            //    echo 'Connection established!';}
            return $this->myconn;
        }

        function close()
        {
            mysqli_close($this->myconn);
            //    echo 'Connection closed!';
        }

    }
}
