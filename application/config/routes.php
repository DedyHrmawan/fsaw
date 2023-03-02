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
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


$route['login']          = 'welcome';
$route['login/auth']     = 'AuthController/auth';
$route['logout']     = 'AuthController/logout';
// Tata Usaha 
$route['dashboard-tu']          = 'TataUsahaController/VDashboardTu';
$route['pegawai']               = 'TataUsahaController/VPegawai';
$route['pegawai/store']         = 'TataUsahaController/storePegawai';
$route['pegawai/edit']          = 'TataUsahaController/editPegawai';
$route['pegawai/delete']        = 'TataUsahaController/deletePegawai';
$route['pegawai/ajxGetPegawai'] = 'TataUsahaController/ajxGetPegawai';

$route['user']              = 'TataUsahaController/VUser';
$route['user/store']        = 'TataUsahaController/storeUser';
$route['user/edit']         = 'TataUsahaController/editUser';
$route['user/delete']       = 'TataUsahaController/deleteUser';
$route['user/ajxGetUser']   = 'TataUsahaController/ajxGetUser';

// WAKA 
$route['dashboard-waka'] = 'WakaController/VDashboardWaka';
$route['nilaipegawai'] = 'WakaController/VPegawaiWaka';
$route['nilaipegawai/ajxGetNilai'] = 'WakaController/ajxGetNilai';
$route['nilaipegawai/edit'] = 'WakaController/editCalon';

$route['kriteria-pendidikan']                   = 'WakaController/VKriteriaPendidikan';
$route['kriteria-pendidikan/store']             = 'WakaController/storePendidikan';
$route['kriteria-pendidikan/edit']              = 'WakaController/editPendidikan';
$route['kriteria-pendidikan/delete']            = 'WakaController/deletePendidikan';
$route['kriteria-pendidikan/ajxGetPendidikan']  = 'WakaController/ajxGetPendidikan';

$route['kriteria-testulis']                   = 'WakaController/VKriteriaTesTulis';
$route['kriteria-testulis/store']             = 'WakaController/storeTulis';
$route['kriteria-testulis/edit']              = 'WakaController/editTulis';
$route['kriteria-testulis/delete']            = 'WakaController/deleteTulis';
$route['kriteria-testulis/ajxGetTulis']       = 'WakaController/ajxGetTulis';

$route['kriteria-wawancara']                   = 'WakaController/VKriteriaWawancara';
$route['kriteria-wawancara/store']             = 'WakaController/storeWawancara';
$route['kriteria-wawancara/edit']              = 'WakaController/editWawancara';
$route['kriteria-wawancara/delete']            = 'WakaController/deleteWawancara';
$route['kriteria-wawancara/ajxGetWawancara']   = 'WakaController/ajxGetWawancara';

$route['kriteria-praktik']                   = 'WakaController/VKriteriaPraktik';
$route['kriteria-praktik/store']             = 'WakaController/storePraktik';
$route['kriteria-praktik/edit']              = 'WakaController/editPraktik';
$route['kriteria-praktik/delete']            = 'WakaController/deletePraktik';
$route['kriteria-praktik/ajxGetPraktik']     = 'WakaController/ajxGetPraktik';

$route['kriteria-btq']                   = 'WakaController/VKriteriaBtq';
$route['kriteria-btq/store']             = 'WakaController/storeBtq';
$route['kriteria-btq/edit']              = 'WakaController/editBtq';
$route['kriteria-btq/delete']            = 'WakaController/deleteBtq';
$route['kriteria-btq/ajxGetBtq']         = 'WakaController/ajxGetBtq';

$route['perangkingan'] = 'WakaController/VPerangkingan';

// Kepsek 
$route['ranking']               = 'KepsekController/VRanking';
$route['penentuan']             = 'KepsekController/VPenentuan';
$route['penentuan/terima']      = 'KepsekController/terima';
$route['kepsek/ajxGetPegawai']  = 'KepsekController/ajxGetPegawai';
$route['dashboard-kepsek']      = 'KepsekController/VDashboardKepsek';
$route['downloadrank']          = 'KepsekController/downloadPdf';
$route['downloadPenentuan']     = 'KepsekController/downloadPenentuan';
$route['waka/downloadrank']     = 'WakaController/downloadPdf';
$route['waka/simpanbobot']      = 'WakaController/simpanbobot';
