<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
        <title></title>
    </head>
    <body>
        <?php
        include_once('prekes-db-functions.php');

        $preke = getPreke(10);
        print_r($preke);

         ?>

        <div class="card" style="width:300px">
          <img class="card-img-top" src="img/img/<?php echo $preke[2]?>" alt="Card image">
          <div class="card-body">
            <h4 class="card-title"><?php echo $preke[1]?> </h4>
            <p class="card-text">Kaina: <?php echo $preke[4]?> &euro; </p>
            <a href="<?php echo $preke[3]?>" class="btn btn-primary stretched-link"> Plačiau...</a>
            <a href="#" class="btn btn-primary">Pirkti</a>

          </div>
        </div>
    </body>
</html>
