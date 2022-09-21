<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<?php
if(!isset($_SESSION['id'])){
    header("location:index.php");
}
else{
?>
<body>
<H1 style="text-align: center ;">WAKER WEBBROAD</H1>
    <hr>
    <table style="width:35% ">
    <?php
    echo "ผู้ใช้ :&nbsp;".$_SESSION['username'];
    ?><br>
    <tr><td>หมวดหมู่ :</td><td>
    <select name="thing">
        <option value="All">--ทั้งหมด--</option>
        <option value="Normal">เรื่องทั่วไป</option>
        <option value="Learn">เรื่องเรียน</option>
    </select><br>
    <tr><td>หัวข้อ :</td><td><input type="text" size="25"></td></tr>
    <tr><td>เนื้อหา :</td><td><textarea cols = 25 rols=1></textarea></td></tr>
    <tr><td colspan="2" align="center"><input type="submit" value="บันทึกข้อความ"></td></tr>
    </table>
    <center><a href="index.php">กลับไปหน้าหลัก</a></center>
</body>
<?php
}
?>
</html>