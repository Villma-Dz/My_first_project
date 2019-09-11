<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
        <!-- reikalinga kad prisitaikantis dizainas veiktu tvarkingai -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/master.css">
        <!-- !!!! VISSA MANO CSS failas pats zemiausias -->
    </head>

    <body>

        <h1> Prekių katalogas </h1>

        <h5>
            <?php
                include_once('prekes-db-functions.php');

     //  visos prekes

        $visosPrekes = getPrekes(50); // grista MYSQL OBJ (jo vidueje yra daug prekiu)
        //print_r($visosPrekes); // test

        $prekes =  mysqli_fetch_assoc( $visosPrekes ); // array asociatyvus
        //print_r(  $prekes );  // test

        // ar tiesa?   (ar turime preke?)
        while ( $prekes ) {
            echo   $prekes['pavadinimas'] ;

            echo " <a class='btn bg-success text-white ' href='page-preke-update-form.php?nr={$prekes['id']}'> REDAGUOTI </a>";
            echo " <a class='btn bg-danger text-white' href='preke-delete.php?nr={$prekes['id']}'> TRINTI </a><hr><br/> ";
            $prekes =  mysqli_fetch_assoc( $visosPrekes ); // array asociatyvus
        }
     ?>
 </h5>
<a class ="btn btn-success" href="index_aa.php">Grįžti</a>


        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js">    </script>

        <script type="text/javascript" src="main.js"> </script>


    </body>
</html>
