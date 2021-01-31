<?php 

class config{
    public static function get($path=null){
        if($path){
            $config = $GLOBALS['config'];
            $path = explode('/',$path); //gives an array back

            //print_r($path);
            foreach($path as $bit){
                if(isset($config[$bit])){
                    //echo 'Set';
                    $config = $config[$bit];
                }
            }
            //print_r($config);
            return $config;
        }
        return false;
    }
}