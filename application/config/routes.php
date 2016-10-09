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
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'main';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['verify']			= 'main/verify_user';

$route['logout']			= 'user/unset_data';
$route['students']			= 'pages/student_list';
/*
* Employee Routes
*/
$route['add_employee']		= 'employee/add_employee';

/*
* Branch Routes 
*/
$route['add_branch']		= 'branch/add_branch';

$route['save_branch']		= 'branch/save_branch';

$route['insert_user']		= 'user/insert_user';
$route['request']			= 'user/request';
$route['add_announcement']	= 'user/add_announcement';
$route['save_announcement'] = 'user/save_announcement';
$route['delete_ann/(:num)'] = 'user/delete_ann/$1';
$route['view_announcement'] = 'user/view_announcement';
$route['delete_user/(:num)']= 'user/delete_user/$1';

