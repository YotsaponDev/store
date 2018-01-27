<?php
	session_start(); //เปิด seesion เพื่อทำงาน
	$username = $_POST['txtUsername']; //ประกาศซตัวแปรชื่อ username โดยการรับค่ามาจากกล่อง username ที่หน้า Login
	$password = $_POST['txtPassword']; //ประกาศซตัวแปรชื่อ password โดยการรับค่ามาจากกล่อง password ที่หน้า Login
if($username == "") {                    //ถ้ายังไม่ได้กรอกข้อมูลที่ชื่อผู้ใช้ให้ทำงานดังต่อไปนี้
	echo"<body onload=\"window.alert('คุณยังไม่ได้ป้อนชื่อผู้ใช้');return history.go(-1)\">";	
} else if($password == "") {        //ถ้ายังไม่ได้กรอกรหัสผ่านให้ทำงานดังต่อไปนี้
	echo"<body onload=\"window.alert('คุณยังไม่ได้ป้อนรหัสผ่าน');return history.go(-1)\">";
} else {                                               //ถ้ากรอกข้อมูลทั้งหมดแล้วให้ทำงานดังนี้
	include("dbcon.php");           //เรียก function สำหรับติดต่อฐานข้อมูลจากหน้า connect.php ขึ้นมา
	$sql = mysqli_query($con,"select * FROM login WHERE username ='$username' AND password ='$password' ");//ใช้ภาษา SQL ตรวจสอบข้อมูลในฐานข้อมูล

	$num = mysqli_num_rows($sql);  //ให้เอาค่าที่ได้ออกมาประกาศเป็นตัวแปรชื่อ $num
	if($num <=0) {                                                           //ถ้าหากค่าที่ได้ออกมามีค่าต่ำกว่า 1
		echo"<body onload=\"window.alert('ชื่อผู้ใช้ และ รหัสผ่าน ไม่ถูกต้อง');return history.go(-1)\">";			
	} else { 
		$value = mysqli_fetch_array($sql);                  
		$_SESSION[ses_id] = session_id();  //สร้าง session สำหรับให้ User นำไปใช้งาน
		$_SESSION[ses_username] = $value["nickname"];
		//$_SESSION["id"] = $value["user_id"];
		header("location:myhome.php");  //ส่งค่าจากหน้านี้ไปหน้า
	}
}
	//mysqli_close($con);
?>