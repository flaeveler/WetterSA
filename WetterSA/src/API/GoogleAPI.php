<?php 

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace API;

/**
 * Description of GoogleAPI
 *
 * @author matth
 */
class GoogleAPI {
    public function get($input) {
        $url = "http://maps.googleapis.com/maps/api/geocode/json?address=" . $input . ",ch";
        $json = file_get_contents($url);
        $arr = json_decode($json, true);
        
        //print_r($arr);
        
        foreach ($arr["results"][0]["address_components"] as $component) {
            if (array_search("postal_code", $component["types"]) === false) {
                continue;
            }
            
            $input = $component["long_name"];
            break;
        }
        
        return $input;
    }
}
