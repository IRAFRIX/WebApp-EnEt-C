<?php 
    session_start();
    if(isset($_SESSION['id'])){
        header("location:index.php");
        die();
    }
?>
<!DOCTYPE html>
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
            $_SESSION['username']='admin';
            $_SESSION['role']='a';
            $_SESSION['id']= session_id();
            header("location:index.php");
            die();
        }
        elseif($Log == "member" && $Pass == "mem1234"){
            $_SESSION['username']='member';
            $_SESSION['role']='m';
            $_SESSION['id']= session_id();
            header("location:index.php");
            die();
        }
        else{
            $_SESSION['error']='error';
            header("location:login.php");
            die();
        }
    ?>
    <center><a href="index.php">กลับไปหน้าหลัก</a></center>