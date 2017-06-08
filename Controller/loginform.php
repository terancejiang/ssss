<?php
class LoginForm extends DbConn
{
    public function checkLogin($myusername, $mypassword)
    {

        try {

            $db = new DbConn;
            $tbl_members = $db->tbl_members;


        } catch (PDOException $e) {

            $err = "Error: " . $e->getMessage();

        }

        $stmt = $db->conn->prepare("SELECT * FROM ".$tbl_members." WHERE username = :myusername");
        $stmt->bindParam(':myusername', $myusername);
        $stmt->execute();

        // Gets query result
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if (password_verify($mypassword, $result['password'])) {

            //Success! Register $myusername, $mypassword and return "true"
            $success = 'true';
                session_start();

                $_SESSION['username'] = $myusername;

        } else {

            //Wrong username or password
            $success = "<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-hidden=\"true\">&times;</button>Wrong Username or Password</div>";

        }

        return $success;
    }


}
