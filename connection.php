<?php

// specify host name
$dbhost = 'localhost';
// specify user name
$dbuser = 'root';
// specify password
$dbpass = '';
// specify database name
$dbname = 'todos_test';


$connect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
