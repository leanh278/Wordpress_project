<?php
/*
 Template Name: Career
 */
?>
<?php get_header(); ?>
<div class="container">
    <div class="quality margin" style="align-items: center;">
        <div class="quality-left center quality_img">
            <h1><?php echo get_field('item')['header']?></h1>
            <p><?php echo get_field('item')['title']?></p>
            <span><?php echo get_field('item')['text']?></span>
            <div class="quality-button" style="margin: unset;justify-content: end;">
                <a href="<?php the_permalink($page = 124) ?>" class="quality-button" style="margin: unset">
                Spontaneous application
                </a>
            </div>
        </div>
        <div class="quality-right">
            <img src="<?php echo get_field('item')['img']['url']?>" alt="">
        </div>
    </div>

    <div class="positions">
        <h1>Open Positions</h1>
        <div class="positions-list">
            <a class="positions-item" href="<?php echo get_field('positions_1')['link']?>">
                <h2><?php echo get_field('positions_1')['name']?></h2>
                <i class='bx bx-right-arrow-alt'></i>
            </a>
            <a class="positions-item" href="<?php echo get_field('positions_2')['link']?>">
                <h2><?php echo get_field('positions_2')['name']?></h2>
                <i class='bx bx-right-arrow-alt'></i>
            </a>
            <a class="positions-item" href="<?php echo get_field('positions_3')['link']?>">
                <h2><?php echo get_field('positions_3')['name']?></h2>
                <i class='bx bx-right-arrow-alt'></i>
            </a>
            <a class="positions-item" href="<?php echo get_field('positions_4')['link']?>">
                <h2><?php echo get_field('positions_4')['name']?></h2>
                <i class='bx bx-right-arrow-alt'></i>
            </a>
            <a class="positions-item" href="<?php echo get_field('positions_5')['link']?>">
                <h2><?php echo get_field('positions_5')['name']?></h2>
                <i class='bx bx-right-arrow-alt'></i>
            </a>
            <a class="positions-item" href="<?php echo get_field('positions_6')['link']?>">
                <h2><?php echo get_field('positions_6')['name']?></h2>
                <i class='bx bx-right-arrow-alt'></i>
            </a>
            <a class="positions-item" href="<?php echo get_field('positions_7')['link']?>">
                <h2><?php echo get_field('positions_7')['name']?></h2>
                <i class='bx bx-right-arrow-alt'></i>
            </a>
            <a class="positions-item" href="<?php echo get_field('positions_8')['link']?>">
                <h2><?php echo get_field('positions_8')['name']?></h2>
                <i class='bx bx-right-arrow-alt'></i>
            </a>
        </div>
    </div>
</div>
<style>
        .menu-item-92 a{
            color: #9E9E9E; !important;
        }
    </style>
<?php get_footer(); ?>