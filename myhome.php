<?php
		session_start(); //เปิด session
		include("dbcon.php");
		$ses_userid =$_SESSION[ses_id];                 //สร้าง session สำหรับเก็บค่า ID
		$ses_username = $_SESSION[ses_username];         //สร้าง session สำหรับเก็บค่า username
		
		if($ses_userid <> session_id() or $ses_username ==""){  //ตรวจสอบว่าทำการ Login เข้าสู่ระบบมารึยัง
			header("location:index.php");
		}
	?>

<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Theme Made By www.w3schools.com - No Copyright -->
  <title>Boss Home</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css\home.css" />

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand"> Welcome : <?php echo $ses_username;?></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#band">KNOWLEDGE</a></li>
        <li><a href="#tour">CONTACT</a></li>
        <li><a href="logout.php">LOGOUT</a></li> 
      </ul>
    </div>
  </div>
</nav>
<br>
<div id="myCarousel" class="carousel slide" data-ride="carousel">


    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The Band Section) -->
<div id="band" class="container text-center">
  <h3>THE BOSS</h3>
  <p><em>We love Coffee</em></p>
  <br>
  <form method="post" action="order.php">
  <table align = left>
  <tr>
    <th>เมนู</th>
    <th>จำนวน</th>
    <th>ปรุงแต่ง</th>
    <th>ร้อน/เย็น/ปั่น</th>
  </tr>
  <tr>
    <td><select name="menu" id = "menu">
    <option value="1">กาแฟ</option>
    <option value="2">นมสด</option>
    <option value="3">โอวัลติน</option>
    <option value="4">มอคค่า</option>
    <option value="5">ไมโล</option>
  </select></td>
    <td><select name="value" id = "value">
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
    <option value="5">5</option>
  </select></td>
    <td><select name="flavor" id = "flavor">
    <option value="1">ปกติ</option>
    <option value="2">เพิ่มน้ำตาล</option>
    <option value="3">หวานน้อย</option>
    <option value="4">กาแฟดำ</option>
    <option value="5">ไม่ใส่คอฟฟี่เมท</option>
  </select></td>
    <td><select name="temp" id = "temp">
    <option value="1">ร้อน</option>
    <option value="2">เย็น</option>
    <option value="3">ปั่น</option>
  </select></td>
  </tr>
<input type="submit" name="Submit" value="สั่ง">
  </form>
  <tr>
  <?php
//1. เชื่อมต่อ database: 

//2. query ข้อมูลจากตาราง tb_member: 
$query = "SELECT * FROM login" or die("Error:" . mysqli_error()); 
//3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result . 
$result = mysqli_query($con, $query); 
//4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล: 
 
echo "<table border='1' align='center' width='500'>";
//หัวข้อตาราง
echo "<tr align='center' bgcolor='#CCCCCC'><td>รหัส</td><td>Uername
</td><td>ชื่อ</td><td>นามสกุล</td><td>อีเมล์</td><td>แก้ไข</td><td>ลบ</td></tr>";
while($row = mysqli_fetch_array($result)) { 
  echo "<tr>";
  echo "<td>" .$row["id"] .  "</td> "; 
  echo "<td>" .$row["username"] .  "</td> ";  
  echo "<td>" .$row["password"] .  "</td> ";
}
echo "</table>";
//5. close connection
mysqli_close($con);
 ?> 

 <!--
<script>
function getDataFromDb()
{
$.ajax({
url: "dbcon.php" ,
type: "POST",
data: ''
})
.success(function(result) {
var obj = jQuery.parseJSON(result);
if(obj != '')
{
//$("#myTable tbody tr:not(:first-child)").remove();
$("#login").empty();
$.each(obj, function(key, val) {
var tr = "<tr>";
tr = tr + "<td>" + val["id"] + "</td>";
tr = tr + "<td>" + val["username"] + "</td>";
tr = tr + "<td>" + val["password"] + "</td>";
tr = tr + "</tr>";
$('#myTable > tbody:last').append(tr);
});
}
 
});
}
setInterval(getDataFromDb, 10000);   // 1000 = 1 second.
</script>
</head>
<body>
<center>
<h1>My Web</h1>
<table width="600" border="1" id="myTable">
//head table
<!--
<thead>
<tr>
<td width="91"> <div align="center">CustomerID </div></td>
<td width="98"> <div align="center">Name </div></td>
<td width="198"> <div align="center">Email </div></td>
<td width="97"> <div align="center">CountryCode </div></td>
<td width="59"> <div align="center">Budget </div></td>
<td width="71"> <div align="center">Used </div></td>
</tr>
</thead>
// body dynamic rows
<tbody id="myBody"></tbody>
</table>
 -->

  </tr>

</table>
    </div>
  </div>
<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
  <p>Develop by Boss Yotsapon.<br> <a href="https://www.facebook.com/boss.yotsapon" data-toggle="tooltip" title="Visit me.">www.facebook.com/boss.yotsapon</a></p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
