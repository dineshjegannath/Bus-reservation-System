<!DOCTYPE html>
<html>
<head>
  <title>... Dinesh J fe549d ...</title>
  <style>
  body{
    background-image: url("3rdbus.jpg");
    background-attachment:fixed;
    background-position: center;
  }
    </style>
    <center>
      <font color="white"><h1>U HAVE ENTERED THE BOOKING PAGE</h1><font>
      <font color="white"><h2>FOR BUS NUMBER :<?php echo $_GET['Busno']; ?></h2><font>
    </head>
<?php
session_start();
$_SESSION['Busno']=$_GET['Busno'];
 ?>
 <!DOCTYPE html>
 <html>
 <head>
   <title>booking PAGE</title>
 </head>
   <div class="container">
   <form  action="" method="POST">
   <input type="text" name="seats" placeholder="no of seats">
   <button type="submit"  class="submitbtn2" name="submit">submit</button>
 </form>

<?php
if(isset($_POST['submit']))
{

$db= mysqli_connect('localhost','root','','rail')or die("could not connect to database");
$result=mysqli_query($db,"SELECT seat, rate  from booking  where busno='{$_GET['Busno']}'");
$row=mysqli_fetch_assoc($result);
$bus=$_GET['Busno'];
$_SESSION['seat']=$_POST['seats'];
$_SESSION['rate']=$row['rate'];
if($row['seat']>$_POST['seats']&&$_POST['seats']>0){$row['seat']=$row['seat']-$_POST['seats']; $st=$row['seat'];
                                        $reduce=mysqli_query($db,"UPDATE  booking SET seat='$st'  where busno='{$_GET['Busno']}'"); ?>

  <?php for($i=0;$i<$_POST['seats'];$i++){?>
    <center>
      <font color="white"><h3>ENTER THE NAME,AGE,GENDER OF THE PASSENGER</h3></font>
    <form class="" action="insert.php"  method="post">
      <input type="text" name='name[]' placeholder="name"><br><br>
      <input type="number" name="age[]" placeholder="age"><br><br>
      <select class=""  name="gender[]">
        <option disabled value="">select gender</option>
        <option value="Male">Male</option>
        <option value="Feale">Female</option>
      </select><br><br>
    </body>
</center>
<?php } ?>
      <button type="submit" name="submitbtn2">Submit</button>
  </form>
<?php }
else {
echo "NO SEAT AVAILABLE";
}?>


<?php } ?>
