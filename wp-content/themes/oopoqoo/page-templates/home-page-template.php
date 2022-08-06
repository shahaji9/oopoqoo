<?php
/*
* Template Name: Home Page Template
*/

get_header(); ?>

    <div class="">
        <div id="primary" class="content-area">
    
            <div class="one-half-home-page home-video-section">
                <div class="video-and-logo-section">
                    <div class="video-wrapper">
                        <!-- <video class="desktop-video" width="100%" preload="auto" autoplay loop muted>
                            <source src="<?php echo get_template_directory_uri(); ?>/assets/videos/oopoqoo_with_logo.mp4" type="video/mp4">                        
                            Your browser does not support HTML5 video.
                        </video> -->

                        <div class="banner-image">
                            <?php $image = get_field('desktop_banner_image');
							$mobile_image = get_field('mobile_banner_image');
                            $banner_img_src = get_template_directory_uri() ."/assets/images/default-banner.jpg";
                            $banner_img_alt = "Default Header Banner";
                            if(isset($image) && !empty($image)){
                                $banner_img_src = $image['url'];
                                $banner_img_alt = $image['alt'];
                            }
							
							$mobile_banner_img_src = $banner_img_src;
							$mobile_img_alt = "Mobile Banner";
							if(isset($mobile_image) && !empty($mobile_image)){
								$mobile_banner_img_src = $mobile_image['url'];
								$mobile_img_alt = $mobile_image['alt'];
							} ?>
                            <div class="parallax-banner-scroll home-page-main" style='background-image: url("<?php echo $banner_img_src; ?>");'>								
                            <div class="header-banner-overlap-content">            
                                <?php
                                $home_page_logo = get_field('home_page_logo');
                                if(isset($home_page_logo) && !empty($home_page_logo)){
                                    $home_page_logo_src = $home_page_logo['url'];
                                    $home_page_logo_alt = $home_page_logo['alt'];
                                }           
                                if(isset($home_page_logo) && !empty($home_page_logo)){ ?>
                                    <img src="<?php echo $home_page_logo_src; ?>" alt="<?php echo $home_page_logo_alt; ?>" />                                    
                                <?php } else { ?>
                                    <h1 class="banner-title"><?php echo get_the_title(); ?></h1>
                                <?php } ?>                
                            </div>
                        </div>
                    </div>                
                </div>
            </div>
    
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

            <div class="home-page-our-services parallax-content-scroll">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="service-box remove-bottom-spacing">
                                <?php $who_we_are = get_field('who_we_are'); ?>
                                <?php if( $who_we_are['title'] ): ?>
                                    <h2><?php echo $who_we_are['title']; ?></h2>
                                <?php endif; ?>                                
                                <div class="service-description">
                                    <?php if( $who_we_are['description'] ): ?>
                                        <?php echo $who_we_are['description']; ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col">
                             <div class="service-box">
                                <?php $what_we_do = get_field('what_we_do'); ?>
                                <?php if( $what_we_do['title'] ): ?>
                                    <h2><?php echo $what_we_do['title']; ?></h2>
                                <?php endif; ?>                                
                                <div class="service-description">
                                    <?php if( $what_we_do['description'] ): ?>
                                        <?php echo $what_we_do['description']; ?>
                                    <?php endif; ?>
                                </div>
                            </div> 
                        </div> -->
                    </div>
                </div>
            </div>
        </div><!-- #primary -->
    </div>

<?php
get_footer();
