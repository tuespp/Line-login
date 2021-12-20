<?php

require('../connect_database/host_ngrok.php');

?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://static.line-scdn.net/liff/edge/2/sdk.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>LIFF - LINE Front-end Framework</title>
    <link rel="stylesheet" href="../css/main.css">
</head>

<body>


<form class="form" id="test" action="../connect_database/addinfo.php" method="POST">
        <h1 class="page" style="color:rgb(48, 152, 238)">Information</h1>
        <p id="displayName" ></p>
        <img id="pictureUrl">
       
     
        <span class="tag-p" style="display: none;">
        <p id="statusMessage">Status : </p>
        <p id="userId">userId : </p>
        <p id="decodedIDToken"><b>email:</b> </p>
        <p id="os"><b>OS:</b> </p>
        <p id="language"><b>Language:</b> </p>
        <p id="version"><b>Version:</b> </p>
        <p id="isInClient"><b>isInClient:</b> </p>
        <div class="token">
        <p id="accessToken"><b>AccessToken:</b>
        </div>
        <p id="type"><b>type:</b> </p>
        <p id="viewType"><b>viewType:</b> </p>
        <p id="utouId"><b>utouId:</b> </p>
        <p id="roomId"><b>roomId:</b> </p>
        <p id="groupId"><b>groupId:</b> </p>
        </span>

        <input type="hidden" id="name" name="name" placeholder="name">
        <input type="hidden"  id="user" name="user">
        <input type="hidden"  id="email" name="email">
        <input type="hidden"  id="access" name="accessToken">
        <p>Please enter number</p>
        <input type="text" name="phone" placeholder="Phone" required>

        <input class="btn"  id="btn" type="submit" value="SAVE">

    </form>

    <button class="btn-2" id="btnLogOut" onclick="logOut()">Log Out</button>

    <script src="../js/main.js"></script>
</body>


</html>