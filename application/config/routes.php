<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

$route['default_controller'] = "dashboards";
$route['404_override'] = '';

//Show Routes
$route['/'] = "dashboards/index";
$route['signin'] = "dashboards/sign_in";
$route['register'] = "dashboards/register";
$route['new_user'] = "dashboards/new_user";
$route['edit_user'] = "dashboards/edit_user";
$route['edit_profile'] = "dashboards/edit_profile";
$route['dashboard'] = "dashboards/dashboard";
$route['profile'] = "dashboards/profile";
$route['logout'] = "dashboards/logout";

//Real methods
$route['createNewUser'] = "dashboards/createNewUser";
$route['retrieveOneUser'] = "dashboards/retrieveOneUser";
$route['updateUserProfile'] = "dashboards/updateUserProfile";
$route['reloadProfile'] = "dashboards/reloadProfile";
$route['updateUser'] = "dashboards/updateUser";
$route['updatePassword'] = "dashboards/updatePassword";
$route['updateDescription'] = "dashboards/updateDescription";
$route['destroyUser'] = "dashboards/destroyUser";
$route['createMessage'] = "dashboards/createMessage";

//end of routes.php