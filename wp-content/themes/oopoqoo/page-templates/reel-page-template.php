<?php
/*
* Template Name: Reel Page Template
*/

get_header(); ?>

    <div class="reel-page-wrapper">
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
            
            <div class="col-md-12">
                <div class="row">
                    <div class="reel-main-video">
                        <?php $main_video = get_field('main_video');
                        if( isset($main_video) && !empty($main_video) ){ ?>                            
                            <?php the_field('main_video'); ?>
                        <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-full-width">
                <div class="reel-row-custom">                    
                    <?php
                        for($i = 1; $i <= 8; $i++){
                            $reel_embed = "";
                            if( get_field('reel_one_half_section_'.$i) ):
                                $reel_embed = get_field('reel_one_half_section_'.$i);
                                if(isset($reel_embed['video_embed_code']) && !empty($reel_embed['video_embed_code'])): ?>
                                    <div class="col-one-half">
                                        <div class="reel-content">
                                            <div class="reel-heading"><h2><?php echo $reel_embed['video_heading']; ?></h2></div>
                                            <div class="reel-main-video">
                                                <?php echo $reel_embed['video_embed_code']; ?>
                                            </div>                                                
                                        </div>
                                    </div>
                                <?php endif; ?>
                            <?php endif;
                        } ?>
                </div>
            </div>
        </div><!-- #primary -->
    </div>

<?php
get_footer();
