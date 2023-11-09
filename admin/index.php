<?php
require '../conn.php';
if(!isset($_SESSION['idpengguna'])) header('location: ../');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengurusan Peralatan</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <ul class="menubar">
        <li class="menu"><a href="index.php?menu=home">Carian Alatan</a></li>

        <li class="menu">
            <a href="index.php?menu=admin">Senarai Warden</a></li>

        <li class="menu">
            <a href="index.php?menu=pass">Tukar Katalaluan</a></li>

        <li class="menu">
            <a href="../logout.php">Log Out</a></li>
    </ul>
<?php
$menu = 'home'; 
if(isset($_GET['menu'])){
    $menu=$_GET['menu'];
}
include "$menu.php";
?>

</body>
</html>