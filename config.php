<?php

/**
 * Used to store website configuration information.
 *
 * @var string
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website',
        'nav_menu' => [
            '' => 'Home',
            'dbapp' => 'DB App'
			'about-us' => 'About',
            'products' => 'Products',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'pretty_uri' => true,
        'version' => 'v2.0',
    ];

    return isset($config[$key]) ? $config[$key] : null;
}

/* Database connection parameters*/
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