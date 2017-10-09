<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'site';
$route['servicos'] = 'site/servicos';
$route['pacotes'] = 'site/pacotes';
$route['galeria'] = 'site/galeria';
$route['contato'] = 'site/contato';
$route['404_override'] = 'site/erro404';
$route['translate_uri_dashes'] = FALSE;
