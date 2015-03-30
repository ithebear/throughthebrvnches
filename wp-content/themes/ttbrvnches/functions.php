<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function throughthebrvnches_widgets_init(){   
    register_sidebar( array(
      'name' => 'TTB Homepage Widget',
      'id' => 'ttb_homepge_widget',
       'before_widget' => '<aside>',
        'after_widget' => '</aside>',
        'before_title' => '<h3 class="widget-title">',
        'after-title' => '</h3>',
    ));
}

add_action( 'widgets_init', 'throughthebrvnches_widgets_init');