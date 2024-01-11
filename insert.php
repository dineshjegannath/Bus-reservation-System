<html>
<head>
  <title>FINAL PAGE</title>
  <style>
  body{
    background-image: url("4thbus.jpg");
    background-attachment:fixed;
    background-position: center;
    background-size: cover;
  }
  </style>
  <style>
  table,th,td{border: 2px solid black;width: 500px; background-color: white;}
  </style>
  <center>
  <table>
    <tr>
      <th>NAME</th>
      <th>AGE</th>
      <th>GENDER</th>
    </tr>
  </center>
</head>
</html>
<?php
session_start();
$name=array();
$gender=array();
$age=array();
$db= mysqli_connect('localhost','root','','rail')or die("could not connect to database");
$num=$_SESSION['seat'];
$rate=$_SESSION['rate'];
$bus=$_SESSION['Busno'];
if(isset($_POST['submitbtn2'])){
  $name=$_POST['name'];
  $gender=$_POST['gender'];
  $age=$_POST['age'];
for ($i=0; $i<$num ; $i++) {
  $query="INSERT INTO passenger (name,gender,age,busno)
         VALUES ('$name[$i]','$gender[$i]','$age[$i]','$bus')";
         if(mysqli_query($db,$query)){

           //Record Created messages!
          echo "Recorded added sucessfully";
         }
}
header("Location:ticketpayment.php?rate=$rate");
}
if(isset($_GET['dis'])){

$query=mysqli_query($db,"SELECT * FROM passenger WHERE busno='$bus'");
?>
<center>
  <font color="white"><h1>Booking Successful </h1></font>
    <font color="white"><h2>Now you are a passenger of <?php echo $_SESSION['Busno']; ?> <br> </h2> <h3>Kindly check your name below</h3><br></font>
  </center>

    <?php
while($row=mysqli_fetch_assoc($query)){?>
  <tr>
  <font color="white"><td><?php echo $row["name"]; ?></td><font>
  <font color="white"><td><?php echo $row["age"]; ?></td><font>
  <font color="white"><td><?php echo $row["gender"]; ?></td><font>
</tr>
 <?php
}
echo "</table>";
}
 ?>
<a href="log.php"><button type="submit" name="see" class="submitbtn2" id="">LOG OUT</button></a>
