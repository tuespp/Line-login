<?php
require_once('dbconnect.php');



if (isset($_POST['submit'])) {

  /* $username =$_POST['email'];
  $password =$_POST['password']; */
    $username = $con->real_escape_string($_POST['email']);
    $password = $con->real_escape_string($_POST['password']);

    $sql = "SELECT * FROM users_all 
                  WHERE  email='" . $username . "' 
                  AND  password='" . $password . "' ";

    $result = $con->query($sql);
    $row = $result->fetch_assoc();

    if (!empty($row)) {

      /*   $_SESSION["id"] = $row["id"];
        $_SESSION["username"] = $row["username"];
        $_SESSION["name"] = $row["name"];
        $_SESSION["address"] = $row["address"];
        $_SESSION["tel"] = $row["tel"];
        $_SESSION["password"] = $row["password"];
        $_SESSION["level"] = $row["level"];
        $_SESSION["img"] = $row["img"]; */

        header("location: ../page/shop.php");

        // if($_SESSION['level'] == 'admin'){
        //     header("location: index.php");
        // }
        // if($_SESSION['level'] == 'employee'){
        //     header("location: index.php");
        // }
        // if($_SESSION['level'] == 'member'){
        //     header("location: index.php");
        // }

    }
     else {
        echo "<script>";
        echo "alert(\" username หรือ  password ไม่ถูกต้อง\");";
        echo "</script>";
        header('Refresh:0; url=../page/login.php');
    }
}
?>