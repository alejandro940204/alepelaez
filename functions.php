<?php
add_filter('template_include', 'custom_team_template', 99);

function custom_team_template($template) {
    global $post;

    if ($post->post_type == 'dt_team' && is_single()) {
        $new_template = locate_template(array('team-single.php'));

        if (!empty($new_template)) {
            return $new_template;
        }
    }

    return $template;
}

function enqueue_bootstrap_styles() {
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', array(), '4.5.0', 'all' );
}
add_action( 'wp_enqueue_scripts', 'enqueue_bootstrap_styles' );

add_action( 'acf/include_fields', function() {
	if ( ! function_exists( 'acf_add_local_field_group' ) ) {
		return;
	}

	acf_add_local_field_group( array(
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
	) );
} );

//--------------- UPDATE Team Memebers --------------------------------
add_action( 'rest_api_init', function () {
    
    add_filter( 'rest_authentication_errors', function( $result ) {
        if ( ! empty( $result ) ) {
            return $result;
        }
        if ( ! is_user_logged_in() ) {
            return new WP_Error( 'rest_not_logged_in', 'No estás conectado.', array( 'status' => 401 ) );
        }
        return $result;
    });
   
  });

  function sincronizar_entradas($entrada_id, $sitio1_url, $sitio2_url) {
    
    $response = wp_remote_get($sitio1_url . '/wp-json/wp/v2/dt_team/' . $entrada_id);
    $entrada1 = json_decode(wp_remote_retrieve_body($response), true);
    
    $response = wp_remote_post($sitio2_url . '/wp-json/wp/v2/dt_team/' . $entrada_id, array(
        'method' => 'POST',
        'headers' => array('Content-Type' => 'application/json'),
        'body' => json_encode($entrada1)
    ));
}

add_action('save_post', function ($post_id) {
    // Verifica si la entrada es del CPT "team"
    if (get_post_type($post_id) == 'dt_team') {
        // Sincroniza la entrada en el primer sitio
        sincronizar_entradas($post_id, 'https://alejandro.the-webones.com/', 'https://jorges169.sg-host.com/');
    }
}, 10, 1);



  

