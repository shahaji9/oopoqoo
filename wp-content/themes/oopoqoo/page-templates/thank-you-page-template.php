<?php
/*
* Template Name: Thank You Page Template
*/

get_header(); ?>

    <div class="thank-you-page-wrapper">
        <div id="primary" class="content-area">
    
            <div class="one-half-home-page home-video-section">
                <div class="video-and-logo-section">
                    <div class="video-wrapper">
                        <div class="banner-image">
                            <?php $image = get_field('banner_image');
                            $banner_img_src = get_template_directory_uri() ."/assets/images/default-banner.jpg";
                            $banner_img_alt = "Default Header Banner";
                            if(isset($image) && !empty($image)){
                                $banner_img_src = $image['url'];
                                $banner_img_alt = $image['alt'];
                            } ?>
                            <div class="parallax-banner-scroll home-page-main" style='background-image: url("<?php echo $banner_img_src; ?>");'>
                            <div class="header-banner-overlap-content">
                                <?php
                                $logo = get_field('logo');                                  
                                if(isset($logo) && !empty($logo)){ ?>
                                    <img src="<?php echo $logo; ?>" alt="OOPOQOO  " />                                    
                                <?php } else { ?>
                                    <h1 class="banner-title"><?php echo get_the_title(); ?></h1>
                                <?php } 

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
        </div><!-- #primary -->
    </div>

<?php
get_footer();
