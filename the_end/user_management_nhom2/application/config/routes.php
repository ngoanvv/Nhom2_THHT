<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
| example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
| https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
| $route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
| $route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
| $route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples: my-controller/index -> my_controller/index
|   my-controller/my-method -> my_controller/my_method
*/
$route['default_controller'] = 'welcome';

$route['login'] = 'login_register/login';
$route['register'] = 'login_register/register';
$route['logout'] = 'login_register/logout';

$route['admin/home'] = 'admin/home';

$route['admin/abc'] = 'admin/check_login/check';


$route['admin/user'] = 'admin/user';
$route['admin/user/edit_role'] = 'admin/user/edit_role';
$route['admin/user/edit_group'] = 'admin/user/edit_group';
$route['admin/user/insert'] = 'admin/user/insert';

$route['admin/profile'] = 'admin/profile/index';

$route['404_override'] = '';
$route['translate_uri_dashes'] = TRUE;

//router api

$route['users']['get'] = 'users/index';
$route['users/(:num)']['get'] = 'users/index/$1';
$route['users/(:num)']['get'] = 'users/find/$1';
$route['users/(:num)']['put'] = 'users/index/$1';
$route['users']['post'] = 'users/index';
$route['users/(:num)']['delete'] = 'users/index/$1';
$route['loginapi']['get'] = 'loginapi/index';
$route['loginapi']['post'] = 'loginapi/index';
$route['registerapi']['post'] = 'registerapi/index';
$route['logoutapi']['post'] = 'logoutapi/index';

/*
| -------------------------------------------------------------------------
| Sample REST API Routes
| -------------------------------------------------------------------------
*/
$route['api/example/users/(:num)'] = 'api/example/users/id/$1'; // Example 4
$route['api/example/users/(:num)(\.)([a-zA-Z0-9_-]+)(.*)'] = 'api/example/users/id/$1/format/$3$4'; // Example 8

$route['admin/home'] = 'crawler/home';
$route['admin/crawler/hvolindex'] = 'crawler/hvolindex';
$route['admin/crawler/hvolindex/hvolview'] = 'crawler/hvolview';
$route['admin/crawler/chitkitsaindex'] = 'crawler/chitkitsaindex';

$route['admin/crawler/banhangindex'] = 'crawler/banhangindex';

$route['admin/crawler/banhangview'] = 'crawler/banhangview';

