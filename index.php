<?php
/*
Plugin Name: Mi primer plugin
Description: Crea un menú de configuración de un texto para mostrar en el pie del cms
Author: leonardo15043
Author URI: https://www.example.com/
*/

add_action("admin_menu", "menu_admin_mi_modulo");
function menu_admin_mi_modulo() {
  add_menu_page('Configuración Modulo', 'Configuración Modulo', 'manage_options', 'menu_config_mimodulo', 'controller_modulo');
}

function controller_modulo(){
  include "mimodulo.php";
}
