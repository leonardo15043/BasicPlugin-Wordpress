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

  if($_POST && $_POST['valor_texto']) {
    $texto = $_POST['valor_texto'];
    if(update_option('valor_texto', $texto)) {
      echo '<p>El valor ha sido almacenado</p>';
    } else {
      echo '<p>No se pudo configurar el texto</p>';
    }
  }
  include "mimodulo.php";
}

add_action('wp_footer', 'data_footer');
function data_footer() {
  if($valor_texto = get_option('valor_texto')) {
    echo "<p>{$valor_texto}</p>";
  }
}
