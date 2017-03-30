<?php // add_filter('jpeg_quality', function($arg){return 1;});

add_action('init', 'init_remove_support',100);
function init_remove_support()
{
   $post_type = 'your post type';
   remove_post_type_support( $post_type, 'editor');
}

?>
