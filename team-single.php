<?php
/*
Template Name: Equipo (Single)
Template Post Type: team
*/
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php while (have_posts()) : the_post();
            $team_id = get_the_ID();
            $image = wp_get_attachment_image_src(get_post_thumbnail_id($team_id), 'large');
            $url = $image[0];
        ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
               
                <div class="entry-content">
                    <div class="hero-width">
                    <div class="px-4 py-5 text-center team-hero">
                        <h1 class="display-5 fw-bold text-body-emphasis">TEAM</h1>
                        <div class="col-lg-6 mx-auto">
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                <a href="/team/">back to Teams CDR Companies</a>
                            </div>
                        </div>
                    </div>
                    <div class="team-colors">
                       
                    </div>
                    </div>
                    
                    <div class="container col-md-8 team-single text-center">
                        <img width="93" height="94" src="<?php echo $url ?>" class="attachment-full" alt="" decoding="async" loading="lazy" >
                        <h3 style="text-align: center;margin: 20px;"><?php echo get_the_title() ?></h3>
                        <h5 style="text-align: center;margin: 20px;"><?php the_field('position', $team_id) ?></h5>
                        <div class="team-bio text-left">
                            <?php the_field('bio', $team_id) ?>
                        </div>
                    </div>
<style>
    .wf-wrap{
        width: auto !important;
    }
</style>
                </div><!-- .entry-content -->
            </article><!-- #post-## -->


        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>