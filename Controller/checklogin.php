<?php
/**
 * Created by PhpStorm.
 * User: jiangying
 * Date: 05/06/2017
 * Time: 19:54
 */


include 'dbconn.php';
//

echo $_POST['username'];
//$password =trim($_POST['passowrd']);
////
//$username = stripslashes($username);
//$password = stripslashes($password);
////$this->host = $host; // Host name
////$this->username = $username; // Mysql username
////$this->password = $password; // Mysql password
////$this->db_name = $db_name; // Database name
//////        $this->tbl_members = $tbl_members;
////
////// Connect to server and select database.
//////			$this->conn = new PDO('mysql:host=' . $host . ';dbname=' . $db_name . ';charset=utf8', $username, $password);
//////			$this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
////conn = @mysqli_connect( $this->host,$this->username,$this->password, $this->db_name) OR die('Database connection error'.mysqli_connect_error());
////
////$conn = new DbConn();
////if($conn){
////    echo "success";
////}
//
//
//$connection = new createCon();
//$conn = $connection->connect();
//$sqlquery = "SELECT * FROM SystemUser WHERE Username =".$username;
//
//if ($result = mysqli_query($conn, $sqlquery)) {
//    //echo "$username";
//}
//
//echo $username;
//echo "dss";
// $servername = "127.0.0.1";
//$username = "root";
// $password = "";
// $dbname = "seaPluzDb";
//
//
//    $con = mysqli_connect($servername, $username, $password, $dbname );
//    if (!$con) {
//        die('Could not connect to database!');
//    } else {
//
//        echo 'Connection established!';
//    }




//$response = '';
//
//try {
//
//    $db = new dbConn;
////    $query = "select * from member";
////
////    $response .= @mysqli_query($db,$query);
////
////    if($response){
////        echo $response;
////    }
//
//} catch (PDOException $e) {
//
//    $err = "Error: " . $e->getMessage();
//
//}
//echo "here";
//
//$stmt = $db->conn->prepare("SELECT * FROM ".$tbl_members." WHERE username = :myusername");
//$stmt->bindParam(':myusername', $myusername);
//$stmt->execute();
//
//// Gets query result
//$result = $stmt->fetch(PDO::FETCH_ASSOC);
//
//if (password_verify($mypassword, $result['password'])) {
//
//    //Success! Register $myusername, $mypassword and return "true"
//    $success = 'true';
//    session_start();
//
//    $_SESSION['username'] = $myusername;
//
//} else {
//
//    //Wrong username or password
//    $success = "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Wrong Username or Password</div>";
//
//}





//// To protect MySQL injection

//
//$response = 'test';
//$loginCtl = new LoginForm;
//$response = $loginCtl->checkLogin($username, $password);
//
//
//
//if ($response == 'true'){
//    $resp = new RespObj($username, $response);
//    $jsonResp = json_encode($resp);
//    echo $jsonResp;
//}
//
//unset($resp, $jsonResp);
//ob_end_flush();

