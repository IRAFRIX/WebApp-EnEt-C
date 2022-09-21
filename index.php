<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
</head>
<?php
    if(!isset($_SESSION['id'])){
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
    <a style="float: right ;" href="Login.php">เข้าสู่ระบบ</a>
    <br>
    <a href="newpost.php">สร้างกระทู้ใหม่</a>
    <ul>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<li><a href=post.php?id="."$i".">กระทู้ที่ ".$i."</a></li>";
            }
        ?>
    </ul>
</body>
<?php
    }else{
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
    <div style="float:right ;">
        <?php
        echo "ผู้ใช้งานระบบ:".$_SESSION['username'];
        ?>
        <a href="logout.php">ออกจากระบบ</a>
    </div>
    <br>
    <a href="newpost.php">สร้างกระทู้ใหม่</a>
    <ul>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<li><a href=post.php?id="."$i".">กระทู้ที่ ".$i."</a></li>";
            }
        ?>
    </ul>
</body>
<?php
    }
?>
</html>