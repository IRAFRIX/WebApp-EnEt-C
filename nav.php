<?php
    if(!isset($_SESSION["id"])){
?>

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d3d3d3;">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand"><i class="bi bi-house-door-fill"></i> Home</a>
        <ul class="navbar-nav">
        <li class="nav-item">
            <a href="Login.php" class="nav-link"><i class="bi bi-pencil-square"></i> เข้าสู่ระบบ</a>
        </li>
    </ul>
    </div>
</nav>

<?php }else{?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #d3d3d3;">
    <div class="container-fluid">
        <a href="index.php" class="navbar-brand"><i class="bi bi-house-door-fill"></i> Home</a>
        <ul class="navbar-nav">
        <div class="dropdown">
            <a class="btn btn-outline-secondary dropdown-toggle btn0-sm" type="button" id="button1" 
            data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-lines-fill"></i>
            <?php echo $_SESSION["username"];?></a>
            <ul class="dropdown-menu" aria-labelledby="button1">
                <a href="logout.php" class="dropdown-item">
                <i class="bi bi-power"></i> ออกจากระบบ
                </a>
            </ul>
        </div> 
    </ul>
    </div>
</nav>
<?php } ?>