<?php
/*
* Template Name: About Us Page Template
*/

get_header(); ?>

    <div class="">
        <?php get_template_part( 'template-parts/header', 'banner' ); ?>

        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="about-us-page-wrapper parallax-content-scroll">                
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
            </main><!-- #main -->
            <div id="our-team-vision" class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="our-people-wrapper">
                            <?php $section_heading = get_field('section_heading');
                            if( isset($section_heading) && !empty($section_heading) ){ ?>
                                <h2><?php the_field('section_heading'); ?></h2>
                            <?php } ?>
                            <div class="our-people-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <?php $our_team_description = get_field('our_team_description');
                                        if( isset($our_team_description) && !empty($our_team_description) ){ ?>
                                            <p><?php the_field('our_team_description'); ?></p>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="member-box">
                                    <div class="row">
                                        <?php
                                        for($i = 1; $i <= 10; $i++){
                                            $our_people_information = "";
                                            if( get_field('our_people_'.$i) ):
                                                $our_people_information = get_field('our_people_'.$i);
                                                if(isset($our_people_information['member_photo']) && !empty($our_people_information['member_photo'])): ?>
                                                    <div class="col-md-12">
                                                        <div class="people-row-wrapper">
                                                            <div class="people-left">
                                                                <?php if( $our_people_information['member_photo'] ): ?>
                                                                    <img src="<?php echo $our_people_information['member_photo']; ?>" alt="Team members" />
                                                                <?php endif; ?>
                                                               
                                                            </div>
                                                            <div class="people-right">
                                                                <div class="people-information">
                                                                    <div class="row">
                                                                   
                                                                    <?php if( $our_people_information['short_information'] ): ?>
                                                                        <?php echo $our_people_information['short_information']; ?>
                                                                    <?php endif; ?>
                                                                    </div>
                                                                </div>
                                                            </div>                                                           

                                                        </div>

                                                        <div class="team-short">
                                                                    <?php if( $our_people_information['member_name'] ): ?>
                                                                        <h3><?php echo $our_people_information['member_name']; ?></h3>
                                                                    <?php endif; ?>
                                                                    <?php if( $our_people_information['job_title'] ): ?>
                                                                        <div class="job-title"><?php echo $our_people_information['job_title']; ?></div>
                                                                    <?php endif; ?>
                                                                </div>
                                                    </div>
                                            <?php endif;
                                            endif;
                                        } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="our-people-wrapper">
                            <?php $our_vision_heading = get_field('our_vision_heading');
                            if( isset($our_vision_heading) && !empty($our_vision_heading) ){ ?>
                                <h2><?php the_field('our_vision_heading'); ?></h2>
                            <?php } ?>
                            <?php $our_vision_description = get_field('our_vision_description');
                            if( isset($our_vision_description) && !empty($our_vision_description) ){ ?>
                                <p><?php the_field('our_vision_description'); ?></p>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>            
        </div><!-- #primary -->
    </div>

<?php
get_footer();
