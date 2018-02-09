<div class="row">

    <!--Fünftages Vorhersage-->
    <?PHP
    $index = 0;
    foreach ($forecast_arr['daily']['data'] as $day):

        $average_temperatur = (round($day['temperatureMax']) + round($day['temperatureMin'])) / 2;
        ?>

        <div class="col-12 col-md-6">
            <div class="card p-4 mb-4">
                <h2 class="h4">
                    <?php echo date("l", $day['time']); ?>
                </h2>
                <h2 class="h4">
                    <?php echo $day['summary']; ?>
                </h2>
                <h3 class="display-4">
                    <?php echo round($average_temperatur); ?>&deg;
                </h3>
                <div class="d-flex justify-content-between">
                    <p class="lead">
                        Max: <?php echo round($day['temperatureMax']); ?>&deg;
                    </p>
                    <p class="lead">
                        Min: <?php echo round($day['temperatureMin']); ?>&deg;
                    </p>

                </div>
                <div class="d-flex justify-content-between">
                    <h4 class="lead">
                        Sonnenaufgang: <?php echo date("H:i", $day['sunriseTime']); ?>
                    </h4>

                    <h4 class="lead">
                        Sonnenuntergang: <?php echo date("H:i", $day['sunsetTime']); ?>
                    </h4>
                </div>
                <p class="lead">
                    Windgeschwindikeit: <?php echo round($day['windSpeed']); ?> Km/h
                </p>
            </div>
        </div>
        <?php
//                    counter ++
        $index = $index + 1;
        if ($index == 5)
            break;

    endforeach;
    ?>
</div>
