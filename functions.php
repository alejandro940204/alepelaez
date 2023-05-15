<?php
add_filter('template_include', 'custom_team_template', 99);

function custom_team_template($template)
{
    global $post;

    if ($post->post_type == 'dt_team' && is_single()) {
        $new_template = locate_template(array('team-single.php'));

        if (!empty($new_template)) {
            return $new_template;
        }
    }

    return $template;
}

function enqueue_bootstrap_styles()
{
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array(), '4.5.0', 'all');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_styles');

