<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">

    </head>
    <body>
        <h1 > Administravimo puslapis </h1>

<?php
include_once('prekes-db-functions.php');


?>
<a class="btn btn-success" href="page-preke-create-form.php">Naujos prekės įvedimas</a>

<a class="btn btn-success" href="page-visos-prekes.php">Prekių redagavimas</a>

<button class="btn btn-success" onclick="windowClose() ">Baigti darbą</button>

        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>
        <script type="text/javascript" src="main.js"></script>


    </body>
</html>
