<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package alepelaez
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'alepelaez' ); ?></a>

	<header id="masthead" class="site-header">
	<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container ">
	<?php
  the_custom_logo();
			if ( is_front_page() && is_home() ) :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
			else :
				?>
				<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				<?php
			endif;
			?>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav m-auto mb-2 mb-lg-0">
			<?php
			
		$menu_id = 'main';
		$menu_items = wp_get_nav_menu_items($menu_id);

		foreach($menu_items as $item) {
					$current_uri = 'http';
			if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
			$current_uri .= 's';
		}
		$current_uri .= '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

			if ($item->url == $current_uri)
			echo '<li class="nav-item">
		<a class="nav-link active"  href="'.$item->url.'">'.$item->title.'</a></li>';	
		else
		echo '<li class="nav-item">
		<a class="nav-link"  href="'.$item->url.'">'.$item->title.'</a></li>';				
		}
		?>    
        
      </ul>
	 
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>		

		
	</header><!-- #masthead -->

	
		