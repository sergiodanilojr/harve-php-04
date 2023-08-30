<?php

session_start();

$_SESSION["user_id"] = 1;

// unset($_SESSION["user_id"]);

// var_dump(isset($_SESSION["user_id"]));
$search = array_search("user_id", $_SESSION);
var_dump($search);

//var_dump($_SESSION);



session_abort();