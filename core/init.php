<?php
session_start();

$GLOBALS['config'] = array(
    'mysql' =>array(
        'host' => '127.0.0.1',
        'username' => 'root',
        'password' => '',
        'db' => 'loginSystem'
    ),
    'remember' => array(
        'cookieName' => 'hash',
        //experation time (A day)
        'cookieExpiry' => 604800
    ),
    'session' => array(
        'sessionName' => 'user'
    )
);


require_once("./classes/config.class.php");
require_once("./classes/cookie.class.php");
require_once("./classes/dbh.class.php");
require_once("./classes/hash.class.php");
require_once("./classes/input.class.php");
require_once("./classes/redirect.class.php");
require_once("./classes/session.class.php");
require_once("./classes/token.class.php");
require_once("./classes/user.class.php");
require_once("./classes/validation.class.php");

