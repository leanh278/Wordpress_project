<?php
/*
 Template Name: News
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
            </div>
            </div>
        </div>
    </div>


<div class="container">
    <div class="new">
        <p>Stay informed about the most recent news and updates from Entobel regarding their efforts to contribute to a more sustainable food system.</p>
        <div class="new-list">
            <?php
            // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
        
                <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="new-item">
                    <?php the_post_thumbnail();?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <a class="read-more" href="<?php the_permalink(); ?>">READ MORE »</a>
                    <span class ="date"> <?php echo get_the_date( 'F j, Y' ); ?></span>
                </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

            
        </div>
    </div>
</div>



    <style>
        .menu-item-98 a{
            color: #9E9E9E; !important;
        }
    </style>

 
<?php get_footer(); ?>
