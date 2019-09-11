<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
    </head>
    </html>

<?php
include_once('prekes-db-functions.php');
print_r($_GET);

$pav = $_GET['pav'];
$nuotr =$_GET['nuotr'];
$apr = $_GET['apr'];
$kaina = $_GET['kaina'];
$gam = $_GET['gam'];
$salis = $_GET['salis'];
$nuol = $_GET['nuol'];
$poz = $_GET['poz'];
$ar_rodyti = $_GET['ar_rodyti'];
$kiekis = $_GET['kiekis'];


createPreke($pav, $nuotr, $apr, $kaina, $gam, $salis, $nuol, $poz, $ar_rodyti, $kiekis);

echo " <h3> Prekė ".$pav." sėkmingai sukurta </h3>";
 ?>
<a class ="btn btn-info" href="index_aa.php">Atgal</a>
