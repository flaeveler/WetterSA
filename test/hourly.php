<ul class="list-group mb-4"  style="margin: 0 auto; max-width: 320px">

    <!--Stüdliche Vorhersage-->
    <?PHP
    $index = 0;
    foreach ($forecast_arr['hourly']['data'] as $hour):
        ?>

        <li class="list-group-item d-flex justify-content-between">
            <p class="lead m-0">
                <?php echo date("H:i", $hour['time']); ?>
            </p>
            <p class="lead m-0">
                <?php echo round($hour['temperature']); ?>&deg;
            </p>
        </li>
        <?php
//                    counter ++
        $index = $index + 1;
        if ($index == 12)
            break;

    endforeach;
    ?>
</ul>

