<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Line Notify</title>
</head>

<script src="../css/message_oa.css"></script>

<?php

require('../connect_database/dbconnect.php');
$sql = "SELECT * FROM users_all WHERE user_id != ''";
$result = mysqli_query($con, $sql);


?>

<body>
    <br>
    <h1>REPLY MESSAGE</h1>
    <div class="container">
        <div class="card">

            <h7>Send message to user</h7><br>
            <form action="../connect_database/sendms_oa.php" method="post">
                <select name="name" >
                    <option value="">
                        <--  Select Username  -->
                    </option>
                    <?php

                    while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                        <option value="<?php echo $row['user_id']; ?>"><?php echo $row['name']; ?></option>

                    <?php
                    }
                  
                    ?>
                </select>

                <br>
                
              <!--   <input type="text" method="post" name="fname" placeholder="First name" required><br>
                <input type="text" method="post" name="lname" placeholder="Last name" required><br>
                <input type="text" method="post" name="phone" placeholder="Phone" required><br> -->
                <textarea name="text" class="ad" type="text" method="post" placeholder="Address " required></textarea><br>
                <input type="submit" name="submit" class="btn" value="SEND">
            </form>
        </div>
    </div>

</body>

</html>