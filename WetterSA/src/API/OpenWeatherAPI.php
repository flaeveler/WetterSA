<?php 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace API;

/**
 * Description of OpenWeatherAPI
 *
 * @author matth
 */
class OpenWeatherAPI {
     public function get($input) {
        $url = "http://api.openweathermap.org/data/2.5/weather?zip=".$input.",ch&units=metric&lang=de&appid=484cf3512b934c59262c15ea71087ed9";
        $json = file_get_contents($url);
        $arr = json_decode($json, true);
        
        return $arr;
    }
    //put your code here
}
