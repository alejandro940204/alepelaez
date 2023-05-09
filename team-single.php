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
                    <?php the_content(); ?>
                    <div class="px-4 py-5 text-center team-hero">
                        <h1 class="display-5 fw-bold text-body-emphasis">TEAM</h1>
                        <div class="col-lg-6 mx-auto">
                            <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
                                <a href="/team/">back to Teams CDR Companies</a>
                            </div>
                        </div>
                    </div>
                    <div class="row team-colors">
                        <div class="col col-1" style="background-color:white ;"></div>
                        <div class="col col-2" style="background-color:#84DADE ;"></div>
                        <div class="col col-3" style="background-color:#006F78 ;"></div>
                        <div class="col col-3" style="background-color:#00A0DF ;"></div>
                        <div class="col col-2" style="background-color:#EBA900 ;"></div>
                        <div class="col col-1" style="background-color:#E43D31 ;"></div>
                    </div>
                    <div class="container col-md-8 team-single text-center">
                        <img width="93" height="94" src="<?php echo $url ?>" class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy" title="Carlos-Duart" data-dt-location="https://alejandro.the-webones.com/carlos-duart-2/">
                        <h3 style="text-align: center;margin: 20px;"><?php get_post_type() ?></h3>
                        <h5 style="text-align: center;margin: 20px;"><?php the_field('position', $team_id) ?></h5>
                        <div class="team-bio text-left">
                            <?php the_field('bio', $team_id) ?>
                        </div>
                    </div>

                    <style>
                        .team-single {
                            padding-top: 70px;
                        }

                        .team-bio {
                            border-top: 1px solid black;
                            padding-top: 50px;
                        }

                        .team-hero {
                            background-color: #E9E9E9;
                        }

                        .team-colors {
                            margin: 0 auto;
                        }

                        .team-colors .col {
                            height: 12px;

                        }
                    </style>
                </div><!-- .entry-content -->
            </article><!-- #post-## -->


        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>