<?php
include_once('prekes-db-functions.php');

$numeris = $_GET['nr'];
print_r($numeris);
$preke = deletePreke($numeris);
echo " <h3 class='bg-success'> Prekė   ".$numeris."pašalinta sėkmingai </h3>";


//$a = $_SESSION["Gydytojas sėkmingai pašalintas"];

//header('Location: '.'index.php');
 ?>
