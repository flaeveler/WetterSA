<?php

https://maps.googleapis.com/maps/api/geocode/json?address=
//1600+Amphitheatre+Parkway,+Mountain+View,+CA&key= AIzaSyDM3rHqHszmJ_V-yUZV9onYalXzMCKdVTo 
$location = $_POST['ort'];

$location_str = str_replace(' ', '+', $location);

$geocod_url = 'https://maps.googleapis.com/maps/api/geocode/json?address='
        . $location_str . '&key=AIzaSyDM3rHqHszmJ_V-yUZV9onYalXzMCKdVTo';

$location_json = json_decode(file_get_contents($geocod_url), true);


$coordinates = $location_json['results']['0']['geometry']['location'];

$city_name = $location_json['results']['0']['address_components']['0']['long_name'];

$coordinates_google = $coordinates['lat'] . ',' . $coordinates['lng'];



$api_url = 'https://api.darksky.net/forecast/8bb8dcae9ff9b9f7f09760e76a53ec43/' . $coordinates_google . '?units=auto&lang=de';

$forecast_arr = json_decode(file_get_contents($api_url), true);

//aktuelle Wetterlage

$temperatur_current = round($forecast_arr['currently']['temperature']);
$windspeed_current = round($forecast_arr['currently']['windSpeed']);
$summary_current = $forecast_arr['currently']['summary'];
$humidity_current = $forecast_arr['currently']['humidity'] * 100;

//timezone
date_default_timezone_set($forecast_arr['timezone']);

