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

add_action('acf/include_fields', function () {
    if (!function_exists('acf_add_local_field_group')) {
        return;
    }

    acf_add_local_field_group(array(
        'key' => 'group_6319532131c57',
        'title' => 'Team Bio',
        'fields' => array(

            array(
                'key' => 'field_645a4a42d82f3',
                'label' => 'Bio',
                'name' => 'bio',
                'aria-label' => '',
                'type' => 'wysiwyg',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 1,
                'delay' => 0,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'dt_team',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
});

//--------------- UPDATE Team Memebers --------------------------------
function sincronizar_td_team()
{
    $origen_url = 'https://alejandro.the-webones.com';
    $destino_url = 'https://jorges169.sg-host.com';

    $origen_auth = array('Authorization' => 'Basic YWxlcGVsYWV6OTRAZ21haWwuY29tOmhZbFNQZFNTNGE4MkFKJGxqTDgjclFyRA==');
    $destino_auth = array('Authorization' => 'Basic YWxlcGVsYWV6OTRAZ21haWwuY29tOmhZbFNQZFNTNGE4MkFKJGxqTDgjclFyRA==');
    
    $td_team_origen = wp_remote_get($origen_url . '/wp-json/wp/v2/td_team?_embed', array('headers' => $origen_auth));
    

    if (is_wp_error($td_team_origen) || is_wp_error($td_team_acf_origen)) {
    return;
    }

    $td_team_origen = json_decode(wp_remote_retrieve_body($td_team_origen));
    $td_team_acf_origen = json_decode(wp_remote_retrieve_body($td_team_acf_origen));

    foreach ($td_team_origen as $td_team) {

        $td_team_destino = wp_remote_post($destino_url . '/wp-json/wp/v2/td_team', array(
            'headers' => $destino_auth,
            'body' => json_encode($td_team),
        ));

        if (is_wp_error($td_team_destino)) {
            continue;
        }
    
    // Decodificar la respuesta de la API REST de WordPress
    $td_team_destino = json_decode(wp_remote_retrieve_body($td_team_destino));
    
}
}

add_action('save_post_td_team', 'sincronizar_td_team');
add_action('delete_post_td_team', 'sincronizar_td_team');

add_filter( 'rest_api_allowed_http_methods', function( $allowed_methods ) {
    $allowed_methods[] = 'PUT';
    return $allowed_methods;
} );
