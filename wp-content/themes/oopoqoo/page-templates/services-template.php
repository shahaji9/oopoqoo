<?php
/*
* Template Name: Services Page Template
*/

get_header(); ?>

    <div class="">
        <?php get_template_part( 'template-parts/header', 'banner' ); ?>

        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="about-us-page-wrapper parallax-content-scroll">                
                   
                </div>
            </main><!-- #main -->
            <div id="our-team-vision" class="col-md-12">
                <div class="row">
                    <div class="col">
                        <div class="our-people-wrapper">
                            <?php $section_heading = get_field('services_heading');
                            if( isset($section_heading) && !empty($section_heading) ){ ?>
                                <h2><?php the_field('services_heading'); ?></h2>
                            <?php } ?>
                            <div class="our-people-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php $our_team_description = get_field('services_info_1');
                                        if( isset($our_team_description) && !empty($our_team_description) ){ ?>
                                            <p><?php the_field('services_info_1'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="member-box">
                                    <div class="row">
                                        <?php
                                        for($i = 1; $i <= 10; $i++){
                                            $our_people_information = "";
                                            if( get_field('services_list_'.$i) ):?>
                                            <div class="col-md-12">
                                                
                                                    <li class="sevices-list">
                                                        <?php $our_people_information = get_field('services_list_'.$i);?>
                                                        <?php echo $our_people_information; ?>
                                                    </li>
                                                
                                            </div>
                                                                     
                                            <?php                 
                                            endif;
                                        } ?>
                                             <?php
                                                while ( have_posts() ) : the_post();

                                                    get_template_part( 'template-parts/content', 'page-full' );

                                                    // If comments are open or we have at least one comment, load up the comment template.
                                                    if ( comments_open() || get_comments_number() ) :
                                                        comments_template();
                                                    endif;

                                                endwhile; // End of the loop.
                                                ?>

                                    </div>
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
