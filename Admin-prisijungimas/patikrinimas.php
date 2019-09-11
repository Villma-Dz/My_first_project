<?php session_start();
include_once('prekes-db-functions.php');
?>

<?php
$slapt = $_GET['slapt'];

$safeslapt = mysqli_real_escape_string(GetPrisijungimas(), $slapt);

if( array_key_exists('vardas', $_GET)) {
    $v = $_GET['vardas'];
    // ar $v egzistuoja IR ar $v tekstas  > 0
    if (  isset($v)    &&    strlen($v) != 0   && isset($safeslapt) &&  strlen($safeslapt) != 0  ) {
        if ($v=="Vilma" &&  $slapt=="vilma123") {
            header('Location: '.'index_aa.php');}
         else {
             echo "Tokio vartotojo nėra";
             echo "<a href='slaptas_prisijungimas_index.php'> Atgal </a> ";}}
    else {
            echo "Klaida. Neužpildėt gerai laukų!<br />";
            echo "<a href='slaptas_prisijungimas_index.php'> Atgal </a> ";}

}
