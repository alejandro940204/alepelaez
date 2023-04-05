<?php

    
 if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title' 	=> 'General Options',
        'menu_title'	=> 'General Options',
        'menu_slug' 	=> 'theme-general-options',
        'capability'	=> 'edit_posts',
        'redirect'		=> false
    ));

}
acf_register_block_type(array(
    'name'              => 'main-header',
    'title'             => __('Main Header'),
    'description'       => __(''),
    'render_template'   => 'template-parts/blocks/main-header/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('main', 'header', 'banner', 'top'),
    'category' => 'widgets'

));

acf_register_block_type(array(
    'name'              => 'services',
    'title'             => __('Services'),
    'description'       => __(''),
    'render_template'   => 'template-parts/blocks/services/index.php',
    'icon'              => 'admin-comments',
    'keywords'          => array('services', 'card', 'repeter'),
    'category' => 'widgets'

));

