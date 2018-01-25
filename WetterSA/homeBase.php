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
                    <a class="navbar-brand" href="#">Homebase
                    </a>
                </div>

<!--                 Collect the nav links, forms, and other content for toggling 
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <form class="navbar-form navbar-right">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button type="submit" class="btn btn-default">Submit</button>
                    </form>
                </div> /.navbar-collapse 
            </div> /.container-fluid 
        </nav>-->

        <div class="container-fluid">
<!--            <div class="row">
                <div class="col-md-3">Favoriten</div>
                <div class="col-md-6">Main weather</div>
                <div class="col-md-3">Home Base, Local
                    <div id="login">
                        <form action="index.php" method="post">
                            <p>
                                <label>Username:</label>
                                <input type="text" class="form-control" id="username" name="username" placeholder="E.g. username" >
                            <p>
                            <p>
                                <label>Password:</label>
                                <input type="password" class="form-control" id="password" name="password" placeholder="E.g. password" >
                            <p>
                            <p>

                                <input type="submit" value="login" name="submit" class="btn btn-primary">
                            <p>

                        </form>

                    </div>
                </div>
            </div>
            <div class = "row" style = "color: #ffffff;">
                <?php
                $city = $_POST["city"];

                $googleApi = new \API\GoogleAPI();
                $zip = $googleApi->get($city);

                $weatherApi = new API\OpenWeatherAPI();
                $arr = $weatherApi->get($zip);


                /* $json = file_get_contents('http://api.openweathermap.org/data/2.5/weather?zip='.$plz.',ch&appid=18762d3e06a1a76e06d5535409aa6eea');
                  $arr = json_decode($json, true);
                  echo '<pre>', print_r($arr, true), '</pre>'; */
                ?>
                <p>Ort: <?= $arr["name"] ?></p>
                <p>Wind: <?= $arr["wind"]["speed"] ?></p>  
                <p>Wetter: <?= $arr["weather"]["0"]["main"] ?></p> 
                <form action="/" method="post" style="color:black;">
                    <input type="text" placeholder="city" name="city">
                    <button type="submit">
                        Send
                    </button>
                </form>
            </div>-->
        </div>
        <script src="js/jquery-1.11.3.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
    </body>
</html>

