<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
    </head>
    <body>
        <h1>Naujos prekės įvedimas</h1>
        <form class="" action="preke_create.php" method="get">
            <label for="pav">Pavadinimas</label>
            <input type="text" name="pav" ><br>

             Pasirink nuotrauką: <input type="file" name="nuotr" placeholder="Naršyti"><br>

            <label for="apr">Aprašymas</label> <br>
            <textarea name="apr" rows="14" cols="80" placeholder="Įveskite aprašymą"></textarea> <br>


            <label for="kaina">Kaina</label>
            <input type="text" name="kaina" >

            <label for="gam">Gamintojas</label>
            <input type="text" name="gam" >

            <label for="salis">Šalis</label>
            <input type="text" name="salis" > <br>

            <label for="nuol">Nuolaida</label>
            <input type="number" name="nuol" >

            <label for="poz">Pozicija</label>
            <input type="number" name="poz" >

            <label for="kiekis">Kiekis</label>
            <input type="number" name="kiekis" > <br>

            <label for="ar_rodyti">Ar rodyti</label> <br />
            <input type="radio" name="ar_rodyti" value="1" checked> Taip <br>
            <input type="radio" name="ar_rodyti" value="0" > Ne <br>




            <button type="submit" >Išsaugoti</button>
        </form>
    </body>
</html>
