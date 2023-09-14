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
    <style>
        body {
            background-color: #f0f0f0;
        }
ul {
    list-style: none;
    font-family: Segoe UI, Tahoma, Geneva, Verdana, sans-serif;
    font-size: 15px;
    text-align: center;
    padding: 0px;
    margin-top: 4px;
}

    ul li {
        width: 200px;
        float: left;
        background-color: dimgrey;
    }

li ul {
    display: none;
}

a {
    text-decoration: none;
    display: block;
    background-color: white;
    line-height: 25pt;
    color: #2596be;
    font-weight: bolder;
    font-family: monospace;
    padding: 7px 0px;
}

    a:hover {
        background-color:cyan;
        color: blue;
    }

li:hover ul {
    display: block;
}

.menubar {
    background-color: white;
    width: 100%;
    height: 50px;
}


.menu {
    width: 370px;
}

    </style>
</head>
<body>
    <ul class="menubar">
        <li class="menu"><a href="index.php?menu=home">Senarai Peralatan</a></li>

        <li class="menu">
            <a href="index.php?menu=pelajar">Senarai Pelajar</a></li>

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