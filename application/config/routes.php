<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['companyDashboard'] = 'CompanyDashboard';
$route['overdueCompliance'] = 'OverdueCompliance';
$route['upcomingCompliance'] = 'UpcomingCompliance';
$route['completedCompliance'] = 'CompletedCompliance';

$route['login/process'] = 'Login/process';
//$route['default_controller'] = 'welcome';
$route['default_controller'] = 'pages/view';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
