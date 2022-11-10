<?php 

// Const variables
define('APPROOT', dirname(dirname(__FILE__)));

//URLROOT (Dynamic links)
$path =  realpath("../");
$path = explode('\\', $path);

$project_name_array = explode('/', $_SERVER['DOCUMENT_ROOT']);
$project_name = end($project_name_array);


if (str_contains($_SERVER["HTTP_HOST"], $project_name . ".test")) {
    define('URLROOT', "http://" . $_SERVER["HTTP_HOST"]);
} else {
    define('URLROOT', "http://" . $_SERVER["HTTP_HOST"] . "/" . end($path));
}


//Sitename
define('SITENAME', 'Test Project');

//DB Params 

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'rabit');
