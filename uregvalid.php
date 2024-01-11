<?php

$db = mysqli_connect('localhost','root','','rail') or die("could not connect to database");
$errors=array('pass'=>'','user'=>'');
if(isset($_POST['register'])){
  $username = mysqli_real_escape_string($db,$_POST['name']);
  $uname = mysqli_real_escape_string($db,$_POST['uname']);
  $eid = mysqli_real_escape_string($db,$_POST['eid']);
  $password = mysqli_real_escape_string($db,$_POST['password']);
  $cpassword = mysqli_real_escape_string($db,$_POST['cpassword']);
  $checkuni="SELECT * FROM user WHERE uname='$uname' LIMIT 1";
  $results=mysqli_query($db,$checkuni);
  $user=mysqli_fetch_assoc($results);
  $p=0;
  if ($user){
    if($user['uname']=== $uname){
    $errors['user']="*username already taken";
    $p=1;
    }
  }


  if($password!=$cpassword){
    $errors['pass']="*Password does not match";
    $p=1;

  }
  if($p==0){

    $query="INSERT INTO user (name,uname,eid,password)
           VALUES ('$username','$uname','$eid','$password')";
    mysqli_query($db,$query);
  }
}



 ?>