<?php session_start() ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Payment page</title>
    <style>
    body{
      background-image: url("buses.jpg");
      background-attachment:fixed;
      background-position: center;
      background-size: cover;


    }
      </style>
  </head>
  <body>
    <center>
    <?php $no=$_SESSION['seat'] ?>
    <font color="white"><h1>THIS IS THE PAYMENT PAGE</h1></font><br><br>
    <font color="red"><h2>PAY Rs <?php if(isset($_GET['rate'])){echo $_GET['rate']*$no;} ?></h2></font><br>
    <a href="insert.php?dis=1"> <button type="paysubmitbtn" name="button">pay</button></a>

</center>
  </body>
</html>
