<?php
    include_once('header.php');
    include_once('prekes-db-functions.php');
//  visos prekes
$visosPrekes = getPrekes5(50); // grista MYSQL OBJ (jo vidueje yra daug prekiu)

$prekes =  mysqli_fetch_assoc( $visosPrekes ); // array asociatyvus
// print_r($prekes);
// ar tiesa?   (ar turime preke?)
while ( $prekes ) {
    echo "<div class='card float-kaire ' style='width:300px; height:600px;'>";
    echo "<img width='300px' src='img/img/{$prekes['nuotrauka']}' alt='Card image' >";
    echo "<div class='card-body'>";
    echo "<h4>".$prekes['pavadinimas']."</h4>";
    echo "<p class='card-text'>Kaina: ".$prekes['kaina']." &euro; </p>";
    echo "<a href='page-preke-rodyti.php?nr={$prekes['id']}' class='btn btn-primary stretched-link'> Plačiau...</a> ";
    echo "<a href='pirkti_form.php' class='btn btn-primary'>Pirkti</a>";
    echo "</div> </div>";
    $prekes =  mysqli_fetch_assoc( $visosPrekes ); // array asociatyvus
}
echo "<div class='isjungiu-float'> </div>";
?>
