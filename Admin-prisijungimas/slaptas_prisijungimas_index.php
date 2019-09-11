<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <?php
//tikrinti prisijungima



         ?>
        <h1>Sveiki atvykę</h1>
        <form  action="patikrinimas.php" method="get">
            <label for="vardas"> Prisijungimo vardas</label>
            <input type="text" name="vardas"  > <br>
            <label for="slapt"> Slaptažodis </label>
            <input type="text" name="slapt" > <br>
            <input type="submit" value="Prisijungti">

        </form>

    </body>
</html>
