<?php
require_once("./core/init.php");
//echo Config::get('mysql/host'); //127.0.0.1
/*
$users = DB::getInstance()->query('SELECT username FROM users');
if($users->count()){
    foreach($users as $user){
        echo $user->username;   
    }
}
*/

//$user = DB::getInstance()->query("SELECT username FROM users WHERE username = ?",array('alex'));
$user = DB::getInstance()->get('users',array('username', '=','alex'));

if ($user->count()){
    echo "no user";
}else{
    echo "OK";
}