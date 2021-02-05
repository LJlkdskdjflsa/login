<?php
class Token {
    public static function generate(){
        return Session::put(Config::get('session/tokenName'),md5(uniqid()));
    }
    public static function check($token){
        $tokenName = Config::get('session/tokenName');
        // echo $token . '<br>';
        // echo (Session::get($tokenName)) ;
        // echo "token check <br>";
        if (Session::exists($tokenName) && $token === Session::get($tokenName)){
            Session::delete($tokenName);
            echo "token check alright";
            return true ;
        }
        //echo "token check NOT PASSED <br>";
        return false ;
    }
}