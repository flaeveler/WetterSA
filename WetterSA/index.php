<?php
require __DIR__ . '/autoload.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wetter App</title>
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <!-- Optional Bootstrap theme -->
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/main.css">
    </head>
    <body>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Wetter Schweiz</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-right">
                        <div class="form-group">                         
                            <input type="text" class="form-control" placeholder="Suche nach Ort oder PLZ">
                        </div>
                        <button type="submit" class="btn btn-default">Suchen</button>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>

        <div class="container-fluid">
            <!-- <div class="row wetter" style="color: black;">
                <?php
                ?>
                <p>Aktueller Standort: <?= $arr['name'] ?></p>
                <p>Wetter: <?= $arr['weather']['main'] ?></p>
                <p>Wind: <?= $arr['wind']['speed'] ?></p>
                <p>Aktuelle Temperatur: <?= $arr['main']['temp'] ?></p>
                <p>Max Temperatur: <?= $arr['main']['temp_max'] ?></p>
                <p>Min Temperatur: <?= $arr['main']['temp_min'] ?></p>
                <p>Sonnenaufgang: <?= $arr['sys']['sunrise'] ?></p>
                <p>Sonnenuntergang: <?= $arr['sys']['sunset'] ?></p>

            </div> -->
            <div class="row wetter" style="color: black;">
                <?php
                $city = $_POST['city'];

                $googleApi = new \API\GoogleAPI();
                $zip = $googleApi->get($city);

                $weatherApi = new API\OpenWeatherAPI();
                $arr = $weatherApi->get($zip);


                /*$json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?zip=' . $plz . ',ch&appid=18762d3e06a1a76e06d5535409aa6eea');
                $arr = json_decode($json, true);
                echo '<pre>', print_r($arr, true), '</pre>';*/
                ?>
                <p>Ort: <?= $arr['name'] ?></p>
                <p>Wetter: <?= $arr['weather']['main'] ?></p>
                <p>Wind: <?= $arr['wind']['speed'] ?></p>
                <p>Aktuelle Temperatur: <?= $arr['main']['temp'] ?></p>
                <p>Max Temperatur: <?= $arr['main']['temp_max'] ?></p>
                <p>Min Temperatur: <?= $arr['main']['temp_min'] ?></p>
                <p>Sonnenaufgang: <?= $arr['sys']['sunrise'] ?></p>
                <p>Sonnenuntergang: <?= $arr['sys']['sunset'] ?></p>

                <form action="/" method="post" style="color:black;">
                    <input type="text" placeholder="Suche nach Ort oder PLZ" name="Ort">
                    <button type="submit">
                        Send
                    </button>
                </form>
            </div>
        </div>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>
