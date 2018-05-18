<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'aa12a662qredpjn.czvw0awnaj4a.us-east-1.rds.amazonaws.com:3306');
define('DB_USERNAME', 'bobodell');
define('DB_PASSWORD', 'CSrds01!');
define('DB_NAME', 'ebdb');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>