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
                    <div class="wpb_column vc_column_container vc_col-sm-12">
                        <div class="vc_column-inner">
                            <div class="wpb_wrapper">
                                <div class="wpb_text_column wpb_content_element ">
                                    <div class="wpb_wrapper">
                                        <h2 style="text-align: center;">TEAM</h2>
                                        <p style="text-align: center;"><a href="/team/">back to Teams CDR Companies</a></p>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="vc_row wpb_row vc_row-fluid vc_custom_1662739684856">
                        <div class="wpb_column vc_column_container vc_col-sm-2">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-8">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper">
                                    <div class="wpb_single_image wpb_content_element vc_align_center">

                                        <figure class="wpb_wrapper vc_figure">
                                            <div class="vc_single_image-wrapper   vc_box_border_grey"><img width="93" height="94" src="https://alejandro.the-webones.com/wp-content/uploads/2017/05/Carlos-Duart.png" class="vc_single_image-img attachment-full" alt="" decoding="async" loading="lazy" title="Carlos-Duart" data-dt-location="https://alejandro.the-webones.com/carlos-duart-2/"></div>
                                        </figure>
                                    </div>

                                    <div class="wpb_text_column wpb_content_element  vc_custom_1662741293696">
                                        <div class="wpb_wrapper">
                                            <h3 style="text-align: center;">CARLOS DUART</h3>

                                        </div>
                                    </div>

                                    <div class="wpb_text_column wpb_content_element  vc_custom_1662741872745">
                                        <div class="wpb_wrapper">
                                            <h5 style="text-align: center;">President</h5>

                                        </div>
                                    </div>
                                    <div class="vc_separator wpb_content_element vc_separator_align_center vc_sep_width_100 vc_sep_pos_align_left vc_separator_no_text vc_sep_color_black"><span class="vc_sep_holder vc_sep_holder_l"><span class="vc_sep_line"></span></span><span class="vc_sep_holder vc_sep_holder_r"><span class="vc_sep_line"></span></span>
                                    </div>
                                    <div class="wpb_text_column wpb_content_element ">
                                        <div class="wpb_wrapper">
                                            <p>Mr. Carlos Duart has over 25 years of experience in emergency management services, beginning his career with Hurricane Andrew in 1992. Since then, he has served in numerous management and technical positions overseeing over $2 billion in damages and recovery for debris removal projects and $10 billion in disaster recovery.</p>
                                            <p>He was the former chairman and president of Metric Engineering Group, Inc. where he oversaw operations, business development and strategic direction, growing the consortium of companies to over $75 million in revenues and 450 employees. During his tenure, he completed four (4) successful acquisitions (including CDR Maguire) and expanded the group’s presence nationally and internationally, as well as into new services including Intelligent Transportation Systems (ITS) and Project Development. He created the group’s international operations with projects with the World Bank and Inter-American Development Bank in South and Central America, and the Caribbean Islands. The group ranked #262 (2011) on ENR’s Top 500 Design Firms and #47 (2010) on ENR’s Top 100 Construction Management list.</p>
                                            <p>Mr. Duart holds a bachelor’s degree in Accounting and a master’s degree in Taxation from Florida International University. He has attended Harvard’s Business School Executive Program in Leading Professional Services Firms, Financial and General Management.</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpb_column vc_column_container vc_col-sm-2">
                            <div class="vc_column-inner">
                                <div class="wpb_wrapper"></div>
                            </div>
                        </div>
                    </div>
                </div><!-- .entry-content -->
            </article><!-- #post-## -->


        <?php endwhile; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>