<?php
/*
 Template Name: For the planet
 */
?>
<?php get_header(); ?>
<div class="container">
    <div class="products">
        <div class="products-left">
            <h1><?php echo get_field('table_1')['header']?></h1>
            <p><?php echo get_field('table_1')['title']?></p>
            <span><?php echo get_field('table_1')['text']?></span>
        </div>
        <div class="products-right">
            <img src="<?php echo get_field('table_1')['img']['url']?>" alt="">
            <div class="products-text">
                <p>DID YOU KNOW?</p>
                <h1>4KG</h1>
                <span>OF WILD FISH ARE REQUIRED TO PRODUCE 1KG OF FISH MEAL</span>
            </div>
        </div>
    </div>

    <div class="page-mission" style="margin: 0 0 40px;">
        <div class="page-mission-left">
            <div class="page-mission-header">
            <?php echo get_field('item_1')['header']?>
            </div>
            <div class="page-mission-left-text"style="color: #4B4B4B;font-size: 16px;text-align: justify;font-weight: unset;">
            <?php echo get_field('item_1')['text']?> 
            </div>
        </div>
    </div>
</div>

<div class="achievement">
        <div class="container">
        <div class="page-SDG">
        <div class="page-mission-left">
            <div class="page-mission-header" style="color: #024E82">
            <?php echo get_field('item_2')['header']?>
            </div>
            <div class="page-mission-left-text"style="color: #4B4B4B;font-size: 16px;text-align: justify;font-weight: unset;">
            <?php echo get_field('item_2')['text']?>  
            </div>
        </div>
        <div class="SDG-list">
            <div class="SDG-item">
                <img src="<?php echo get_field('sdgs_1')['img']['url']?>" alt="">
                <p><?php echo get_field('sdgs_1')['name']?>​</p>
                <span><?php echo get_field('sdgs_1')['text']?></span>
            </div>
            <div class="SDG-item">
            <img src="<?php echo get_field('sdgs_2')['img']['url']?>" alt="">
                <p><?php echo get_field('sdgs_2')['name']?>​</p>
                <span><?php echo get_field('sdgs_2')['text']?></span>
            </div>
            <div class="SDG-item">
            <img src="<?php echo get_field('sdgs_3')['img']['url']?>" alt="">
                <p><?php echo get_field('sdgs_3')['name']?>​</p>
                <span><?php echo get_field('sdgs_3')['text']?></span>
            </div>
            <div class="SDG-item">
            <img src="<?php echo get_field('sdgs_4')['img']['url']?>" alt="">
                <p><?php echo get_field('sdgs_4')['name']?>​</p>
                <span><?php echo get_field('sdgs_4')['text']?></span>
            </div>
        </div>
    </div>
        </div>
    </div>

<div class="container">
    <div class="quality margin">
        <div class="quality-left center quality_img">
            <h1><?php echo get_field('table_2')['header']?></h1>
            <p><?php echo get_field('table_2')['title']?></p>
            <span><?php echo get_field('table_2')['text']?></span>
        </div>
        <div class="quality-right">
            <img src="<?php echo get_field('table_2')['img']['url']?>" alt="">
        </div>
    </div>

    <div class="achievement">
        <div class="dedicated">
            <h1><?php echo get_field('item_3')['header']?></h1>
            <p><?php echo get_field('item_3')['text']?></p>
            
            <div class="quality-button">
                <a href="<?php the_permalink($page = 31) ?>" class="quality-button">
                Become a partner
                </a>
            </div>

        </div>
    </div>
</div>
<style>
        .menu-item-89 a{
            color: #9E9E9E; !important;
        }
    </style>
<?php get_footer(); ?>
