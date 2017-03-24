<?php

/* 
 * Plugin Name: MyFirstPlugin
 * Description: Description MyFirstPlugin 
 * Version: 1.0
 * Author: Damian Łukasik
 * Author URI: https://www.linkedin.com/in/damian-%C5%82ukasik/
 * License: GPL
 */

function MyFirstPlugin_add_menu(){
    add_menu_page('Produkty', 'Produkty', 'administrator', 'glowna-MyFirstPlugin', 'glowna_MyFirstPlugin','',24);
}

add_action('admin_menu','MyFirstPlugin_add_menu');

function glowna_MyFirstPlugin(){    
    include 'page_MyFirstPlugin.php';
}
