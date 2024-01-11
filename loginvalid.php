<?php
$db = mysqli_connect('localhost','root','','rail') or die("could not connect to database");
$errors1=array('err'=>'');
if(isset($_POST['login'])){
  $uname= mysqli_real_escape_string($db,$_POST['uname']);
  $password= mysqli_real_escape_string($db,$_POST['password']);

  $query="SELECT * FROM user WHERE uname='$uname' AND password ='$password'";
  $results=mysqli_query($db,$query);

  if (mysqli_num_rows($results)){
    header("location :index.html");
  }
  else{
    $errors1['err']="*wrong input credentials";
  }

}





 ?>