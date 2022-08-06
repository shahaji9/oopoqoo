<?php
/*
* Template Name: Contact Us Page Template
*/

get_header(); ?>

    <div class="">
        <?php get_template_part( 'template-parts/header', 'banner' ); ?>

        <div id="primary" class="content-area">
            <main id="main" class="site-main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 contact-left dark-blue-bg">
                            <div class="contact-left-wrapper">
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
                        <div class="col-lg-6 col-md-12 contact-right light-blue-bg">
                            <div class="contact-right-wrapper">
                                <?php $address = get_field('address');
                                if(isset($address) && !empty($address)){ ?>
                                    <div class="address"><?php the_field('address'); ?></div>
                                <?php } ?>
                                <?php $locationiframe = get_field('location_iframe_code');
                                if(isset($locationiframe) && !empty($locationiframe)){ ?>
                                    <div class="iframe-code"><?php the_field('location_iframe_code'); ?></div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </main><!-- #main -->
        </div><!-- #primary -->
    </div>

<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
<style>
    .contact-left-wrapper .phone-number{
        font-size: 18px;
        margin-top: 3px;
        font-family: 'Roboto', sans-serif;
        font-weight: 400;
    }
</style>
<?php
get_footer();
