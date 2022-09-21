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
    หมวดหมู่:
    <select name="thing">
        <option value="All">--ทั้งหมด--</option>
        <option value="Normal">เรื่องทั่วไป</option>
        <option value="Learn">เรื่องเรียน</option>
    </select>
</body>
<?php
}
?>
</html>