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
//$user = DB::getInstance()->get('users',array('username', '=','alex'));
//$user = DB::getInstance()->query('SELECT * FROM users');
$user = DB::getInstance()->insert('users',array('username'=>'dale','password'=>'dalepass','salt'=>'salt','name'=>'dale'));
