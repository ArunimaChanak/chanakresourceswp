<?php

get_template_part('includes/function/site','enqueue');
get_template_part('includes/function/site','pagination');

get_template_part('includes/function/theme','support');
get_template_part('includes/function/site','widgets');
get_template_part('includes/function/register','menu');

get_template_part('includes/function/custom','post');
get_template_part('includes/function/meta','box'); 

require_once 'class-wp-bootstrap-navwalker.php';

function is_blog () {
    return ( !is_front_page() && (is_archive() || is_author() || is_category() || is_home() || is_single() || is_tag()) && 'post' == get_post_type());
}

?>
