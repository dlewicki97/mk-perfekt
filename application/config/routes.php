<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['default_controller'] = 'home';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['o-nas'] = 'home/about';
$route['produkty'] = 'home/products';
$route['produkty/(.*)/(.+)'] = 'home/single_product/$1';
$route['aktualnosci/(.*)/(.+)'] = 'home/single_news/$1';
$route['marki/(.*)/(.+)'] = 'home/single_brand/$1';
$route['produkty-kategoria/(.*)/(.+)'] = 'home/single_product_category/$1';
$route['galeria'] = 'home/gallery';
$route['galeria/(.*)/(.+)'] = 'home/single_gallery/$1';
$route['do-pobrania'] = 'home/downloads';
$route['do-pobrania/(.*)/(.+)'] = 'home/single_downloads/$1/$2';
$route['kontakt'] = 'home/contact';
$route['dla-regionu'] = 'home/towns';
$route['dla-regionu/(.*)/(.+)'] = 'home/single_town/$2';
$route['warto-wiedziec'] = 'home/good_to_know';
$route['warto-wiedziec/(.*)/(.+)'] = 'home/single_good_to_know/$1/$2';
$route['akcje-promocyjne'] = 'home/promotional_actions';
$route['akcje-promocyjne/(.*)/(.+)'] = 'home/single_promotional_actions/$1/$2';
$route['produkt-region/(.*)/(.+)/(.+)'] = 'home/town_article/$2/$3';



//SCIAGA
// $route['odziez/(.*)/(.+)'] = 'home/odziez/$1/$2';
// $route['obuwie/(.*)/(.+)'] = 'home/obuwie/$1/$2';
// $route['akcesoria/(.*)/(.+)'] = 'home/akcesoria/$1/$2';
// $route['kolekcje/(.*)/(.+)'] = 'home/kolekcje/$1/$2';
// $route['gazetka/(.*)/(.+)'] = 'home/gazetka/$1/$2';
// $route['produkt/(.*)/(.+)'] = 'home/produkt/$1/$2';
// $route['o_nas'] = 'home/o_nas';
// $route['wydarzenia'] = 'home/wydarzenia';
// $route['wpis'] = 'home/wpis';
// $route['aktualnosci'] = 'p/aktualnosci';
// $route['uzywane_podglad/(.*)/(.+)'] = 'p/uzywane_podglad/$1/$2';
// $route['promocje'] = 'p/promocje';
// $route['promocja/(.*)/(.+)'] = 'p/promocja/$1/$2';
// $route['uslugi'] = 'p/uslugi';
// $route['usluga/(.*)/(.+)'] = 'p/usluga/$1/$2';
// $route['o-nas/(.*)/(.+)'] = 'p/o_nas/$1/$2';
// $route['kontakt/(.*)/(.+)'] = 'p/kontakt/$1/$2';
// $route['media'] = 'p/media';
// $route['nowe/(.*)/(.+)'] = 'p/nowe/$1/$2';
// $route['nowe'] = 'p/nowe';
// $route['akcesoria/(.*)'] = 'p/akcesoria/$1';