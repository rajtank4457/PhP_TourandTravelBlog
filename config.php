<?php

session_start();


define('LOCALHOST', 'localhost');
define('ROOT', 'root');
define('PASSWORD', '');
define('DATABASE', 'dbtour&travel');
define('SITEURL', 'http://localhost/PhPJournalProject/Tour&TravelBlog/');



$conn = mysqli_connect(LOCALHOST,ROOT,PASSWORD,DATABASE) or die(mysqli_error($conn));
$db_select = mysqli_select_db($conn,DATABASE) or die(mysqli_error($conn))

?>