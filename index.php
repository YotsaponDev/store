<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  
  <title>ทดสอบ</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>

<nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>

<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td><button class=" button ">ทดสอบ 1</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  <tr>
    <td><button class=" button ">TesTer</td>
    <td>Francisco Chang</td>
    <td>Mexico</td>
  </tr>
  <tr>
    <td><button class=" button ">TEST</td>
    <td>Roland Mendel</td>
    <td>Austria</td>
  </tr>
  <tr>
    <td><button class=" button ">ทดสอบ</td>
    <td>Helen Bennett</td>
    <td>UK</td>
  </tr>
  <tr>
    <td><button class=" button ">ทดสอบยาว</td>
    <td>Yoshi Tannamuri</td>
    <td>Canada</td>
  </tr>
  <tr>
    <td><button class=" button ">ทดสอบยาวยาว</td>
    <td>Giovanni Rovelli</td>
    <td><button class="button" onclick="printPage('index.html'); " />ปริ้นท์สลิป</td>
  </tr>
</table>

</body>
</html>
