<?php
/*
 Template Name: Expertise
 */
?>
<?php get_header(); ?>
    <div id="slider">
        <div class="slider_img">
        <video width="100%"  loop autoplay muted playsinline>
                <source src="<?php echo get_field('banner')?>" type="video/mp4">
              </video>
            <div class="slider-overlay"></div>
            <div class="slider_innerr">
            <div class="slider-text">
                <h1><?php echo get_field('header')?></h1>
                <p><?php echo get_field('text')?></p>  
            </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="quality">
            <div class="quality-left">
                <h1>Quality and traceability</h1>
                <p><?php echo get_field('quality_titel')?></p>
                <span><?php echo get_field('quality_text')?></span>
                <div class="quality-logo">
                    <img src="<?php echo get_field('quality_logo_1')['url']?>" alt="">
                    <img src="<?php echo get_field('quality_logo_2')['url']?>" alt="">
                    <img src="<?php echo get_field('quality_logo_3')['url']?>" alt="">
                </div>
            </div>
            <div class="quality-right">
                <img src="<?php echo get_field('quality_img')['url']?>" alt="">
            </div>
        </div>
        <div class="stability">
            <h1>Stability and consistency</h1>
            <p><?php echo get_field('stability_text')?></p>
        </div>
    </div>

    <div class="achievement">
        <div class="container">
            <div class="achievement-list">
                <div class="achievement-item">
                    <img src="<?php echo get_field('item_1')['img']['url']?>" alt="">
                    <h4><?php echo get_field('item_1')['name']?>​</h4>
                    <p><?php echo get_field('item_1')['text']?></p>
                </div>
                <div class="achievement-item">
                    <img src="<?php echo get_field('item_2')['img']['url']?>" alt="">
                    <h4><?php echo get_field('item_2')['name']?>​</h4>
                    <p><?php echo get_field('item_2')['text']?></p>
                </div>
                <div class="achievement-item">
                    <img src="<?php echo get_field('item_3')['img']['url']?>" alt="">
                    <h4><?php echo get_field('item_3')['name']?>​</h4>
                    <p><?php echo get_field('item_3')['text']?></p>
                </div>
                <div class="achievement-item">
                    <img src="<?php echo get_field('item_4')['img']['url']?>" alt="">
                    <h4><?php echo get_field('item_4')['name']?>​</h4>
                    <p><?php echo get_field('item_4')['text']?></p>
                </div>
            </div>
        </div>
    </div>
    <style>
        .footer{
            margin: unset;
        }
    </style>
<?php get_footer(); ?>