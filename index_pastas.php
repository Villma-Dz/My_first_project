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

        <div class="container">
            <h1>Jūsų užklausa</h1>
    <form  action="siustiEmail.php" method="post">
        <input type="text" name="vardas" value="" placeholder="Jūsų vardas">
        <input type="text" name="pastas" value="" placeholder="Jūsų el. paštas"> <br>
        <br>
        <textarea name="klausimas" rows="8" cols="80"></textarea>

        <button type="submit" class='btn btn-info'>KLAUSTI</button>
    </form>
        </div>



        <!-- bootstrap'ui -->
        <script src="libs/jquery-3.4.1.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"></script>

        <!-- mano js failas visasda pats zemiausias ir failo apacioje -->
        <script type="text/javascript" src="main.js">

        </script>


    </body>
</html>
