<?php
/*
* Template Name: Current Openings Page Template
*/

get_header(); ?>

    <div class="">
        
        <?php get_template_part( 'template-parts/header', 'banner' ); ?>

        <div id="primary" class="content-area">
            <main id="main" class="site-main">

                <?php
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', 'page-full' );

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;

                endwhile; // End of the loop.
                ?>

            </main><!-- #main -->

            <div id="current-openings-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 dark-blue-bg">
                            <div class="current-opening-wrapper">
                                <h2>Join Us</h2>
                                <h6>Great things in business are always done by a team of people.</h6>
                                <p>Creative ideas grow better when we dream together as a team, we are always on 
                                    the lookout for creative minds that are willing to bring out the best in them and who
                                    ready to work towards the same goal.</p>
                                    <p>We are hiring for the following positions:</p>
                                <?php
                                $args = array(  
                                    'post_type' => 'current_openings',
                                    'post_status' => 'publish',
                                    'posts_per_page' => -1, 
                                    'orderby' => 'publish_date', 
                                    'order' => 'DESC'
                                );

                                $loop = new WP_Query( $args );  ?>

                                <ul class="job-listing">
                                    <?php 
                                    $i = 1;
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                    if($i == 1){ ?>
                                        <li><a href="#" data-id="<?php echo get_the_ID(); ?>" class="active"><?php the_title(); ?></a></li>
                                    <?php
                                        $i++;
                                    } else { ?>
                                        <li><a href="#" data-id="<?php echo get_the_ID(); ?>"><?php the_title(); ?></a></li>
                                    <?php }
                                    endwhile; ?>
                                </ul>
                                <?php wp_reset_postdata(); ?>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 light-blue-bg">
                            <div class="current-opening-wrapper">
                                <div class="ajax-loader">
									<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ajax-loader.gif" />
								</div>
                                <div id="current-opening-jd">
                                    <?php $i = 1;
                                    while ( $loop->have_posts() ) : $loop->the_post();
                                        if($i == 1){ ?>
                                            <h2><?php the_title(); ?></h2>
                                            <div class="job-description"><?php the_content(); ?></div>
                                        <?php $i++; }
                                    endwhile; ?>
                                </div>
                                <div class="apply-now-button">
                                    <button class="apply-now-btn">Apply</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- #primary -->
    </div>

<?php
get_footer();
