<?php
/*
Template Name: Equipo (Single)
Template Post Type: team
*/
get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>


                <div class="entry-content">
                    <?php the_content(); ?>

                    <div class="container col-md-8 team-single text-center">
                        <img width="93" height="94" src="https://alejandro.the-webones.com/wp-content/uploads/2017/05/Carlos-Duart.png" class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy" title="Carlos-Duart" data-dt-location="https://alejandro.the-webones.com/carlos-duart-2/">
                        <h3 style="text-align: center;margin: 20px;">CARLOS DUART</h3>
                        <h5 style="text-align: center;margin: 20px;">President</h5>
                        <div class="team-bio text-left">
                            <p>Mr. Carlos Duart has over 25 years of experience in emergency management services, beginning his career with Hurricane Andrew in 1992. Since then, he has served in numerous management and technical positions overseeing over $2 billion in damages and recovery for debris removal projects and $10 billion in disaster recovery.</p>
                            <p>He was the former chairman and president of Metric Engineering Group, Inc. where he oversaw operations, business development and strategic direction, growing the consortium of companies to over $75 million in revenues and 450 employees. During his tenure, he completed four (4) successful acquisitions (including CDR Maguire) and expanded the group’s presence nationally and internationally, as well as into new services including Intelligent Transportation Systems (ITS) and Project Development. He created the group’s international operations with projects with the World Bank and Inter-American Development Bank in South and Central America, and the Caribbean Islands. The group ranked #262 (2011) on ENR’s Top 500 Design Firms and #47 (2010) on ENR’s Top 100 Construction Management list.</p>
                            <p>Mr. Duart holds a bachelor’s degree in Accounting and a master’s degree in Taxation from Florida International University. He has attended Harvard’s Business School Executive Program in Leading Professional Services Firms, Financial and General Management.</p>

                        </div>
                    </div>

                    <style>
                        .team-bio {
                            border-top: 1px solid black;
                            padding-top: 50px;
                        }
                    </style>
                </div><!-- .entry-content -->
            </article><!-- #post-## -->


        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>