<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "dashboards";
$route['404_override'] = '';

//Show Routes
$route['/'] = "dashboards/index";
$route['signin'] = "dashboards/sign_in";
$route['register'] = "dashboards/register";
$route['new_user'] = "dashboards/new_user";
$route['edit_user'] = "dashboards/edit_user";
$route['dashboard'] = "dashboards/dashboard";
$route['profile'] = "dashboards/profile";
$route['logout'] = "dashboards/logout";

//Real methods
$route['createNewUser'] = "dashboards/createNewUser";
$route['retrieveOneUser'] = "dashboards/retrieveOneUser";




//end of routes.php