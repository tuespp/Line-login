<?php
        require('dbconnect.php');

        $name = $_POST["name"];
        $userid = $_POST["user"];
        $email = $_POST["email"];
        $accessToken = $_POST["accessToken"];
        $phone = $_POST["phone"];



        $x = "";

        $sql2 = "SELECT * FROM users_all";
        $result2 = mysqli_query($con, $sql2);

        while ($row = mysqli_fetch_array($result2)) {

            if ($phone == $row['phone']) {

                $sql3 = "UPDATE users_all SET user_id = '$userid', access_token='$accessToken'WHERE phone = '$phone' ";
                $result3 = mysqli_query($con, $sql3);
                if ($result3) {
                    echo "<script> window.location.href='../page/shop.php'</script>";
                    $x = 1;
                }
            } else {
            }
        }


        if ($x != 1) {

            $sql6 = "SELECT * FROM users_all WHERE phone='" . $phone . "'";
            $result6 = mysqli_query($con, $sql6);
            $Num_Rows = mysqli_num_rows($result6);

            if ($Num_Rows == 0) {

                $sql = "INSERT INTO users_all (name,email,phone,user_id,access_token) 
                        VALUES ('$name','$email','$phone','$userid','$accessToken')";
                $result = mysqli_query($con, $sql);

                if ($result) {

                    echo "<script> window.location.href='../page/shop.php'</script>";
                } else {
                    echo mysqli_error($con);
                }
            } else {
                echo "<script> window.location.href='../page/shop.php'</script>";
            }
        }
        
    