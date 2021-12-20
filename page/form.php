<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Line Notify</title>
    <link rel="stylesheet" href="../css/form.css">
</head>
<style>

</style>
<body>
<br>
<h1>ADDRESS</h1>
<div class="container">
  <div class="card">
  
   <h7>input your address</h7><br>
    <form action="../connect_database/form_notify.php" method="post">
        <input type="text" method="post" name="order"  value="NO.5842" readonly="readonly"><br>
        <input type="text" method="post" name="fname" placeholder="First name" required><br>
         <input type="text" method="post" name="lname" placeholder="Last name" required><br>
         <input type="text" method="post" name="phone" placeholder="Phone"required><br>
        <textarea name="address"class="ad" type="text" method="post"placeholder="Address " required></textarea><br>
        <input type="submit" name="submit" class="btn btn-success "value="SAVE">
    </form>
  </div>
</div>
    
</body>
</html>