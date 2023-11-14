<?php
/*
 Template Name: Production sites
 */
?>
<?php get_header(); ?>
    <div id="slider">
        <div class="slider_img">
            <img src="<?php echo get_field('banner')?>" alt="">
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
        <div class="reasons">
            <h1>We have chosen Vietnam for<br> three main reasons:</h1>
            <div class="reasons-list">
                <div class="reasons-item">
                    <span><?php echo get_field('reasons_1')?></span>
                </div>
                <div class="reasons-item">
                    <span><?php echo get_field('reasons_2')?></span>
                </div>
                <div class="reasons-item">
                    <span><?php echo get_field('reasons_3')?></span>
                </div>
            </div>
        </div>

        <div class="quality margin">
            <div class="quality-left center quality_img">
                <h3><?php echo get_field('item_1')['site']?></h3>
                <h1><?php echo get_field('item_1')['name']?></h1>
                <p><?php echo get_field('item_1')['title']?></p>
                <span><?php echo get_field('item_1')['text']?></span>
            </div>
            <div class="quality-right">
                <img src="<?php echo get_field('item_1')['img']['url']?>" alt="">
            </div>
        </div>

        <div class="quality margin">
            <div class="quality-left quality_img ">
            <img src="<?php echo get_field('item_2')['img']['url']?>" alt="">
            </div>
            <div class="quality-right center">
                <h3><?php echo get_field('item_2')['site']?></h3>
                <h1><?php echo get_field('item_2')['name']?></h1>
                <p><?php echo get_field('item_2')['title']?></p>
                <span><?php echo get_field('item_2')['text']?></span>
            </div>
        </div>
    </div>

<?php get_footer(); ?>
