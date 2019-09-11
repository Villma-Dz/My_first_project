<?php
include_once('prekes-db-functions.php');

$prekes_id = $_GET['nr'];
$preke = getPreke($prekes_id);

print_r($preke);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>

        <h1>Prekių redagavimas</h1>
        <form  action="preke-update.php" method="get">
            <input type="hidden" name="nr" value="<?php echo $preke[0]; ?>" >

            <label for="pav">Pavadinimas</label>
            <input type="text" name="pav" value="<?php echo $preke[1]; ?>" ><br>

            Pasirink nuotrauką: <input type="file" name="nuotr" value="<?php echo $preke[2];?>" ><br>

            <label for="apr">Aprašymas</label> <br>
            <textarea name="apr" rows="14" cols="80" placeholder="Įveskite aprašymą" value="<?php echo $preke[3];?>"></textarea> <br>

            <label for="kaina">Kaina</label>
            <input type="text" name="kaina" value="<?php echo $preke[4]; ?>"  >

            <label for="gam">Gamintojas</label>
            <input type="text" name="gam" value="<?php echo $preke[5]; ?>" >

            <label for="salis">Šalis</label>
            <input type="text" name="salis" value="<?php echo $preke[6]; ?>" > <br>

            <label for="nuol">Nuolaida</label>
            <input type="number" name="nuol" value="<?php echo $preke[7]; ?>"  >

            <label for="poz">Pozicija</label>
            <input type="number" name="poz" value="<?php echo $preke[8]; ?>">

            <label for="kiekis">Kiekis</label>
            <input type="number" name="kiekis" value="<?php echo $preke[10]; ?>" > <br>

            <label for="ar_rodyti">Ar rodyti</label> <br />
            <input type="radio" name="ar_rodyti" value="<?php echo $preke[9]; ?>" > Taip <br>
            <input type="radio" name="ar_rodyti" value="<?php echo $preke[9]; ?>" > Ne <br>

            <button type="submit" >Išsaugoti</button>
        </form>


    </body>
</html>
