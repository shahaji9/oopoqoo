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
    <!-- <div class="parallax-banner-scroll" style='background-image: url("<?php echo $banner_img_src; ?>");'> -->
    <img class="desktop-banner-img" src="<?php echo $banner_img_src; ?>" alt="<?php echo $banner_img_alt; ?>" />
    <img class="mobile-banner-img" src="<?php echo $mobile_banner_img_src; ?>" alt="<?php echo $mobile_img_alt; ?>" />
    <div class="header-banner-overlap-content">            
        <?php
        $banner_title = get_field('banner_content');                
        if(isset($banner_title) && !empty($banner_title)){ ?>
            <h1 class="banner-title"><?php the_field('banner_content'); ?></h1>
        <?php } else { ?>
            <h1 class="banner-title"><?php echo get_the_title(); ?></h1>
        <?php } ?>                
    </div>
    <!-- </div> -->
</div>