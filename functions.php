<?php
add_filter('template_include', 'custom_team_template', 99);

function custom_team_template($template) {
    global $post;

    if ($post->post_type == 'teams' && is_single()) {
        $new_template = locate_template(array('team-single.php'));

        if (!empty($new_template)) {
            return $new_template;
        }
    }

    return $template;
}