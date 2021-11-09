<?php
/**
* Plugin Name: Produccion- Modulo de Produccion Restaurant
* Plugin URI: https://loginweb.dev/fatcom/
* Description: Plugins Diseñado y Desarrollado por Loginweb, para Restaurant.
* Version: 1.0
* Author: Ing. Raul Montero Acosta
* Author URI: https://raulmontero.xyz
 */

 // menu TPV items --------------------------------------------------------------------
add_action('admin_menu','lw_add_menu_main');

function lw_add_menu_main() {
  
  //MENU TPV
  add_menu_page('Produccion', //page title
        'Produccion', //menu title
        'manage_options', //capabilitiesw
        'insumos', //menu slug
        'pd_pos', //function
        'dashicons-align-full-width'
  );
}

// Cargando views php -----------------------------------------------------
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'Views/Insumos/index.php');

?>