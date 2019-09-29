<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/master.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <title>Rusiški maisto papildai</title>
</head>

<body>
    <div class="container-fluid">
        <header>
            <div class="row">
                <div class="col-lg-5">
                    <a href="index.php">
                    <img src="img/RMPlogo.png" width=350px alt="RusiskiMaistoPapildai"> </a>
                </div>
                <div class="col-lg-5 ">
                    <div class=" row mt-2 mb-2">
                        <i class="fa fa-phone" style="font-size:50px;color:blue; margin-right:20px"></i>
                        <h4> (8-683) 15174 </h4>
                    </div>
                    <div class=" row mt-2 mb-2">
                        <a href="kontaktai.php">
                        <i class="fa fa-map-marker" style="font-size:50px;color:blue; margin-right: 30px"></i> </a>
                        <h4> Gedimino g. 116 Kaišiadorys</h4>
                    </div>
                    <div class=" row mt-2 mb-2">
                        <i class="fa fa-search" style="font-size:50px;color:blue; margin-right: 20px"></i>
                        <p>PAIEŠKA</p>
                    </div>
                </div>
                <div class="col-lg mt-2  ">
                    <div class=" row mt-2 ">
                        <a href="index_pastas.php">
                        <i class="fa fa-envelope-open-o" style="font-size:50px;color:#FF0000"></i> </a>
                    </div>
                    <div class=" row mt-5 mb-2">
                        <i class="fa fa-shopping-basket" style="font-size:50px;color:#00B800"></i>
                    </div>

                </div>
            </div>

            <nav class="aukstis-150">
                <ul>
                    <li class="float-kaire"> <a href="papildai.php">Maisto papildai</a> </li>
                    <li class="float-kaire"> <a href="arbatos.php">Arbatos ir vaistažolės</a></li>
                    <li class="float-kaire"> <a href="kosmetika.php">Kosmetika</a></li>
                    <li class="float-kaire"> <a href="tepalai.php">Gydomieji tepalai</a></li>
                    <li class="float-kaire"> <a href="higiena.php">Higienos reikmenys</a></li>
                    <li class="float-kaire"> <a href="prekes.php">Visos prekės</a></li>
                    <div class="isjungiu-float"> </div>
                </ul>
            </nav>
        </header>
        <main>
            <div class="">
                <!--Carousel Wrapper-->
                <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                        <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                    </ol>
                    <!--/.Indicators-->
                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <img class="d-block w-50 "  src="img/1.jpg" alt="Undevit">
                        </div>
                        <!--/First slide-->
                        <!--Second slide-->
                        <div class="carousel-item">
                            <img class="d-block w-50 "  src="img/2.jpg" alt="Antistress">
                        </div>
                        <!--/Second slide-->
                        <!--Third slide-->
                        <div class="carousel-item">
                            <img class="d-block w-50 "  src="img/3.jpg" alt="Teimuro">
                        </div>
                        <!--/Third slide-->
                    </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->
            </div>

<h1>    <marquee>Rusiški maisto papildai - Jūsų sveikatai! </marquee>      </marquee></h1>

        </main>

        <footer>
            <div class="row aukstis-100 ">
                <div class="col">
                <h4> FB grupė</h4>
                </div>
                <div class="col">
                <h4> <a href="kontaktai.php">Kontaktai</a></h4>
                </div>
                <div class="col">
                <h4>Informacija</h4>
                </div>
                <div class="col">
                <h4>D.U.K.</h4>
                </div>
            </div>

        </footer>

        <!-- konteinerio pabaiga -->
    </div>
    <script src="libs/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script type="text/javascript" src="libs/bootstrap/js/bootstrap.min.js"> </script>
    <script type="text/javascript" src="main.js"> </script>
</body>

</html>
