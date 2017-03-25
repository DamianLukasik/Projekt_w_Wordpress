<?php

/* 
 * Plugin Name: MyFirstPlugin
 * Description: Description MyFirstPlugin 
 * Version: 1.0
 * Author: Damian Łukasik
 * Author URI: https://www.linkedin.com/in/damian-%C5%82ukasik/
 * License: GPL
 */

wp_register_style('my_plugin_name_dashicons', plugins_url( MY_PLUGIN_NAME.'style.css'));
wp_enqueue_style('my_plugin_name_dashicons');

function MyFirstPlugin_add_menu(){
    add_menu_page(       
        'Produkty', 
        'Produkty', 
        null,
        'glowna-MyFirstPlugin', 
        'glowna_MyFirstPlugin', 
        plugin_dir_url( __FILE__ ) . 'white-shop-20.ico', 
        24
    );
    add_submenu_page(
        'glowna-MyFirstPlugin',       // parent slug
        'Wszystkie produkty',    // page title
        'Wszystkie produkty',             // menu title
        'manage_options',           // capability
        'wszystkie-MyFirstPlugin',      // slug
        'wszystkie_MyFirstPlugin' // callback
    );
    add_submenu_page(
        'glowna-MyFirstPlugin',       // parent slug
        'Dodaj nowy produkt',    // page title
        'Dodaj nowy produkt',             // menu title
        'manage_options',           // capability
        'dodaj-MyFirstPlugin',      // slug
        'dodaj_MyFirstPlugin' // callback
    );
}

add_action('admin_menu','MyFirstPlugin_add_menu');

// Navigation 
function glowna_MyFirstPlugin(){    
    include 'MyFirstPlugin_main_menu.php';
}
function wszystkie_MyFirstPlugin(){    
    include 'MyFirstPlugin_main_menu.php';
}
function dodaj_MyFirstPlugin(){    
    include 'MyFirstPlugin_add.php';
}