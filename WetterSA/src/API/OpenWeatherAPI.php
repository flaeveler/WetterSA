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
        $url = 'http://api.openweathermap.org/data/2.5/weather?zip='.$input.',ch&appid=18762d3e06a1a76e06d5535409aa6eea';
        $json = file_get_contents($url);
        $arr = json_decode($json, true);
        
        return $arr;
    }
    //put your code here
}
