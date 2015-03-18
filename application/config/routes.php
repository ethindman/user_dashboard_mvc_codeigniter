<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "dashboards";
$route['/'] = "dashboards/index";
$route['signin'] = "dashboards/sign_in";
$route['register'] = "dashboards/register";
$route['addNewUser'] = "dashboards/addNewUser";
$route['editUser'] = "dashboards/editUser";
$route['showDashboard'] = "dashboards/showDashboard";
$route['showProfile'] = "dashboards/showProfile";
$route['logout'] = "dashboards/logout";
$route['404_override'] = '';

//end of routes.php