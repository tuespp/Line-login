        <?php
        require('dbconnect.php');

        $userid = $_POST['user'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $accessToken = $_POST['accessToken'];

        $sql = "SELECT * FROM users_all WHERE user_id='". $userid ."'";
        $result= mysqli_query($con, $sql);
        $Num_Rows = mysqli_num_rows($result);

        if ($Num_Rows == 0) {

            echo "<script> window.location.href='../page/main.php'</script>";
        } else {
            echo "<script> window.location.href='../page/shop.php'</script>";
        }

        $sql2 = "INSERT INTO user_timestamp (name,email,user_id,access_token) VALUES ('$name','$email','$userid','$accessToken')";
        $result2 = mysqli_query($con, $sql2);


        
        ?>