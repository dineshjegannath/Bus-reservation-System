<!DOCTYPE html>
<html>
<head>
  <title>CONFIRMATION PAGE</title>
    <style>
    body{
    background-image: url("buses.jpg");
    background-attachment:fixed;
    background-position: center;
    }
    table,th,td{
      border:2px solid black;
      width: 1100px;
      background-color: white;
    }
    .btn{
      width:10%;
      height:5%;
      font-size:22px;
      padding:0px;
    }
    </style>
  </head>
  <body>
    <center>
      <font color="white"><h1>WELCOME,NOW U CAN ENTER THE DESTINATION AND ORGIN AND DATE OF TRAVEL TO SEE WHETHER YOU HAVE BOOKED YOUR TICKET </h1></font>
      <font color="white"><h2>BUSES ALWAYS STARTS FROM CHENNAI AND GOES TO MUMBAI,KOLKATA,AGRA,DELHI,HYDERABAD</h2></font>
      <div class="container">
      <form  action="" method="POST">
      <select type="text" name="orgin" placeholder="orgin">
        <option value="orgin">ORGIN</option>
        <option value="chennai">CHENNAI</option>
      </select>
      <select type="text" name="destination" placeholder="destination">
        <option value="destination">DESTINATION</option>
        <option value="mumbai">MUMBAI</option>
        <option value="kolkata">KOLKATA</option>
        <option value="agra">AGRA</option>
        <option value="delhi">DELHI</option>
        <option value="hyderabad">HYDERABAD</option>
      </select>
      <input type="date" name="dot" placeholder="dot">
      <button type="submit"  class="submitbtn2" name="submit">submit</button>
    </form>
    <table>
      <tr>
        <th>ORGIN</th>
        <th>DESTINATION</th>
        <th>DATE OF TRAVEL</th>
        <th>BUS NUMBER</th>
        <th>NAME</th>
        <th>AGE</th>
        <th>GENDER</th>
        <th>TIME</th>
      </tr>
      <?php
      $conn=mysqli_connect("localhost","root","","rail");

      if(isset($_POST['submit']))
      {
        $orgin=$_POST['orgin'];
        $destination=$_POST['destination'];
        $dot=$_POST['dot'];
      $sql="SELECT * from booking b,dates d ,place p ,passenger c where p.orgin='$orgin' and p.destination='$destination' and d.dot='$dot' and b.busno=d.busno and d.busno=p.busno and c.busno=d.busno";
      $result=$conn->query($sql);
      if($result->num_rows > 0){
        while($row=$result-> fetch_assoc()){ ?>
          <tr>
          <td><?php echo $row["orgin"]; ?></td>
          <td><?php echo $row["destination"]; ?></td>
          <td><?php echo $row["dot"]; ?></td>
          <td><?php echo $row["busno"]; ?></td>
          <td><?php echo $row["name"]; ?></td>
          <td><?php echo $row["age"]; ?></td>
          <td><?php echo $row["gender"]; ?></td>
          <td><?php echo $row["time"]; ?></td>
      </tr>
      <?php
      }
      echo"</table>";
    }
      else {
      echo "YOU ARE NOT A PASSENGER";
    }
  }
      $conn->close();
      ?>
</body>
</html>
