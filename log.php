<?php include('uregvalid.php'); ?>
<?php include('loginvalid.php'); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>user login page</title>
    <link rel="stylesheet" href="loginstyle.css">
  <style>
  p{
    margin: 40px ;
  }
  </style>
  </head>
  <body>
    <div class="main">
      <p><center><font color="#b0b2b5" size="5">BLUEBUS BOOKING</font></center></p>
        <center><a href="confirmation.php"><button type="submit" name="see" class="submitbtn2" id="">USER CAN CHECK BUS TICKET IF U HAVE BOOKED THE TICKET CLICK HERE</button></a></center>
          <div class="formbox">
          <div class="buttonbox">
            <div class="btn">
              <button type="button" class="togglbtn" onclick="login()">Log in</button>
              <button type="button" class="togglbtn" onclick="register()">Register</button>
            </div>
          </div>
        <form  method="post" id="login" action="indexs.php" class="inputgrp">
          <div class="errors2" > <?php echo $errors1['err'];  ?></div>
          <input type="text" class="inputfield" placeholder="user name" name="uname" required>
          <input type="password" class="inputfield" placeholder="Enter password" name="password" required>
          <button type="submit"  class="submitbtn" name="login">Log in</button>
    </form>
        <form  method="post" id ="register" class="inputgrp2">
          <input type="text" class="inputfield" name="name" placeholder="Name" required>
          <input type="text" class="inputfield" name="uname" placeholder="Unique username" required>
          <div class="errors" > <?php echo $errors['user'];  ?></div>
          <input type="email" class="inputfield" name="eid" placeholder="email id" required>
          <input type="password" class="inputfield" name="password" placeholder="password" required>
          <input type="password" class="inputfield" name="cpassword" placeholder="confirm password" required>
          <div class="errors" > <?php echo $errors['pass'];  ?></div>
          <button type="submit"  class="submitbtn2" name="register">Register</button>
        </form>
    </div>

        <script type="text/javascript">

        <?php if ($p==1){
          echo "alert('unsucessful registration!! Username already exits or pasword did not match.Click OK and register again');";}
          else{
            echo "alert('Registration successfull!! Click OK');";
          }
           ?>
        </script>


      <script>
      var x = document.getElementById("login");
      var y = document.getElementById("register");
      function register() {
        x.style.left="-400px";
        y.style.left="50px";
      }
      function login() {
        x.style.left="50px";
        y.style.left="450px";
      }
      </script>

</body>
</html>
