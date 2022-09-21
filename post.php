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
    <center>ต้องการดูกระทู้หมายเลข <?php echo $_GET['id']?></center>
    <?php
        $n = $_GET['id'];
        if (($n % 2) == 0)
            echo "<center>เป็นกระทู้หมายเลขคู่</center><br>";
        else
            echo "<center>เป็นกระทู้หมายเลขคี่</center><br>";
    ?>
    <table style="border:2px solid black ; width:40% " align="center">
        <tr><td style="background-color: #6cd2fe;"colspan="2">เเสดงความคิดเห็น</a></td></tr>
        <tr><td><textarea name="text" id="A" cols="100" rows="5"></textarea></td></tr>
        <tr><td colspan="2" align="center"><input type="submit" value="ส่งข้อความ"></td></tr>
    </table>
    <br>
    <center><a href="index.php">กลับไปหน้าหลัก</a></center>
</body>
</html>