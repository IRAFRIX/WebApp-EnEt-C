<?php 
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verify</title>
</head>
<body>
    <H1 style="text-align: center ;">WAKER WEBBROAD</H1>
    <hr>
    <?php
        $Log = $_POST["n"];
        $Pass = $_POST["pa"];
        if($Log == "admin" && $Pass == "ad1234"){
            echo "<center>ยินดีต้อนรับคุณ ADMIN</center>";
            $_SESSION['username']='admin';
            $_SESSION['role']='a';
            $_SESSION['id']= session_id();
        }
        elseif($Log == "member" && $Pass == "mem1234"){
            echo "<center>ยินดีต้อนรับคุณ MEMBER</center>";
            $_SESSION['username']='member';
            $_SESSION['role']='m';
            $_SESSION['id']= session_id();
        }
        else{
            echo "<center>ชื่อบัญชีหรือรหัสผ่านไม่ถูกต้อง</center>";
        }
    ?>
    <center><a href="index.php">กลับไปหน้าหลัก</a></center>
</html>