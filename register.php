<?php 
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <H1 style="text-align: center ;">WAKER WEBBROAD</H1>
    <hr>
    <table style="border:2px solid black ; width:40% " align="center">
        <tr><td style="background-color: #6cd2fe;"colspan="2">กรอกข้อมูล</a></td></tr>
        <tr><td>ชื่อบัญชี:</td><td><input type="text" name="n1" size="50"></td></tr>
        <tr><td>รหัสผ่าน:</td><td><input type="text" password="p1" size="50"></td></tr>
        <tr><td>ชื่อ-นามสกุล:</td><td><input type="text" TLName="tn" size="50"></td></tr>
        <tr><td rowspan="3">เพศ:</td><td><input type="radio" name="gender" value="m">ชาย</td></tr>
        <tr><td><input type="radio" name="gender" value="f">หญิง</td></tr>
        <tr><td><input type="radio" name="gender" value="o">อื่นๆ</td></tr>
        <tr><td>อีเมล:</td><td><input type="text" email="e" size="50"></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="สมัรสมาชิก"></td></tr>
    </table><br>
    <center><a href="index.php">กลับไปหน้าหลัก</a></center>
</body>
</html>