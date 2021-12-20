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
<link rel="stylesheet" href="../css/login.css">
</head>

<body>
<form class="form" id="test" action="../connect_database/logindata.php" method="POST">
<div class="inputform">
<h1 class="page">LOGIN LINE API</h1>
    
    <input  id="name" name="email" placeholder=" Email">
    
    <input id="password" type="password"  name="password" placeholder=" Password">
    <input class="submit" type="submit" name="submit" value="LOGIN">

    </div>


  </form>
  

 <a class="btn-2" href="<?= $host_ngrok ?>/DEENA/line_adddata/index.php">LOG IN WITH LINE</a> 
  
 

</body>

</html>