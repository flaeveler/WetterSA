<?php
$coordinates = '47.405800,8.398764';
$api_url = 'https://api.darksky.net/forecast/8bb8dcae9ff9b9f7f09760e76a53ec43/' . $coordinates . '?units=auto&lang=de';

$forecast_arr = json_decode(file_get_contents($api_url), true);

//aktuelle Wetterlage

$temperatur_current = round($forecast_arr['currently']['temperature']);
$windspeed_current = round($forecast_arr['currently']['windSpeed']);
$summary_current = $forecast_arr['currently']['summary'];
$humidity_current = $forecast_arr['currently']['humidity'] * 100;

//timezone
date_default_timezone_set($forecast_arr['timezone']);

