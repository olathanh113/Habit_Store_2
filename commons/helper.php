<?php

if (!function_exists('require_file')) {
    function require_file($pathFloder) {
        $files = array_diff(scandir($pathFloder),['.','..']);
        
        foreach($files as $file){
            require_once $pathFloder . $file;
        }
        
    }
}

if (!function_exists('debug')) {
    function debug($data) {
        echo "<pre>";

        print_r($data);

        die;
    }
}