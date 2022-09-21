<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Title</title>
</head>
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
    <ul>
        <?php
            for($i=1;$i<=10;$i++){
                echo "<li><a href=post.php?id="."$i".">กระทู้ที่ ".$i."</a></li>";
            }
        ?>
    </ul>
</body>
</html>