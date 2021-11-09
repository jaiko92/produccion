<?php
/**
* Plugin Name: Fatcom-wp - Modulo de Produccion
* Plugin URI: https://loginweb.dev/fatcom/
* Description: Plugins Diseñado y Desarrollado por Loginweb, para Gestionar la Facturacion Computarizada, Flujo de Caja, Compras.
* Version: 3.0
* Author: Ing. Raul Montero Acosta
* Author URI: https://raulmontero.xyz
 */

 // menu TPV items --------------------------------------------------------------------
add_action('admin_menu','lw_add_menu_2');
function lw_add_menu_2() {
  
  //MENU TPV
  add_menu_page('Produccion', //page title
        'Produccion', //menu title
        'manage_options', //capabilitiesw
        'Insumos', //menu slug
        'lw_pos', //function
        'dashicons-align-full-width'
  );
}

// Cargando views php -----------------------------------------------------
define('ROOTDIR', plugin_dir_path(__FILE__));
require_once(ROOTDIR . 'Views/Insumos/index.php');

?>