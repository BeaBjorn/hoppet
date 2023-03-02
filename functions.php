<?php
/*
Created by : Beatrice Bjorn
For : Projekt - CMS - webbdesign för CMS, DT197G
Last updated : 2022-07-11
*/
?>


<?php
/* This code block allows for menus to be created on the website */
    add_action('init', 'register_my_menus');
    function register_my_menus(){
        register_nav_menus(array(
            'main_nav' => 'huvudmeny'
        ));
    }

/* This code block adds the possebility to add feutured images to posts and decides their sizes */
    add_theme_support('post-thumbnails');
    add_image_size('green-block-small', 400, 400, array('center', 'center'));
    add_image_size('green-block-large', 600, 600, array('center', 'center'));


/* This code block allows the user to set and change header images on the pages where the "header-image" function is called. 
   It sets the sizes of the image and also a default image taht will be displayed if no other images has been uploaded */    
    $args = array(
        'default-image' => get_template_directory_uri() . '/images/front_horse.jpg', 
        'width' => 2000, 
        'height' => 1200, 
        'uploads' => true,
    );
    add_theme_support('custom-header', $args);


/* This code block allows for widget areas on the website. The function "hoppet_widget_init" holds information for two widget areas.  */
    add_action('widgets_init', 'hoppet_widget_init');

    function hoppet_widget_init(){
        register_sidebar(array(
            'name' => 'yellow-widget',
            'id' => 'yellow-puff',
            'before_widget' => '<div>',
            'after_widget' => '</div>',
        ));
        register_sidebar(array(
            'name' => 'purple-widget',
            'id' => 'purple-puff',
            'before_widget' => '<div class="purple-widget">',
            'after_widget' => '</div>',
        ));
    }

?>