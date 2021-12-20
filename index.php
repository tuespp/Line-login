<?php

require('./connect_database/host_ngrok.php');

?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIFF - LINE Front-end Framework</title>
    <link rel="stylesheet" href="css/index.css">
</head>

<body>


    <form class="form" id="test" action="connect_database/checkdata.php" method="POST">
        <h1 class="page" style="color:rgb(48, 152, 238)">LOGIN LINE API</h1>
        <img id="pictureUrl">

        <p id="displayName">Name : </p>
        
        <input type="hidden" id="user" name="user">
        <input type="hidden" id="name" name="name">
        <input type="hidden" id="status" name="status">
       
        <input type="hidden" id="email" name="email">
       
        <input type="hidden" id="access" name="accessToken">
      
        <input style="text-decoration: none;text-align:center;padding-top:10px" class="btn" id="btn" type="submit" value="NEXT"></input>

    </form>

  <script src="js/index.js"></script>

</body>

</html>