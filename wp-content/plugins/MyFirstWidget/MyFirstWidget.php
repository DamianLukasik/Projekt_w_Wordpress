<?php

/* 
 * Plugin Name: MyFirstWidget
 * Description: Description MyFirstWidget
 * Version: 1.0
 * Author: Damian Łukasik
 * Author URI: https://www.linkedin.com/in/damian-%C5%82ukasik/
 * License: GPL
 */

class MFW extends WP_Widget {
    
    function __construct() {
        //
        $widget_ops = [
            'classname' => "MFW",
            'description' => 'Lista produktów'
        ];
        parent::__construct("MFW", "Produkty",$widget_ops);
    }    
    function form($instance) {
        $defaults = array("tekst" => "Jakiś tekst");
        $instance = wp_parse_args((array) $instance, $defaults);
        $tekst = $instance['tekst'];
        ?>
<p>
    <label>Nazwa</label>
    <input type="text" name="<?= $this->get_field_name('tekst'); ?>" value="<?= esc_attr($tekst); ?>"/>
</p>
<?php
    }
    function update($new_instance, $old_instance) {
        $instance = $old_instance;
        $instance['tekst'] = strip_tags($new_instance['tekst']);
        return $instance;
    }
    function widget($args, $instance) {
        echo $args["before_widget"];
        if(!empty($instance['tekst'])){
            echo $instance['tekst'];
        }
        echo $args["after_widget"];
    }
}

function MFW_add_widget() {
    register_widget("MFW");
}
add_action("widgets_init","MFW_add_widget");