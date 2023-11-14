<?php get_header(); ?>
<div id="slider">
    <div class="slider_img">
        <img src="https://www.entobel.com/wp-content/uploads/2023/03/Entobel-Main-BG-1024x683-1.jpeg" alt="">
        <div class="slider-overlay"></div>
        <div class="slider_innerr" style="padding: 0 20px;">
        <div class="slider-text">
            <h1><?php the_title(); ?></h1>
            <p style="width: unset;margin-top: 35px;"><?php echo get_the_date( 'F j, Y' ); ?></p>
        </div>
        </div>
    </div>
</div>
    <div id = "main-content" class="container">
        <div class="post">
            <?php if (have_posts() ) : while( have_posts() ) : the_post(); ?> 
                <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile ?>
            <?php else: ?>
                <?php get_template_part('content','none'); ?>
            <?php endif; ?>
        </div>    
    </div>

    <div class="achievement">
        <div class="container">
        <div class="new">
        <h2>You might find these interesting</h2>
        <div class="new-list">
            <?php
            // the query
            $wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
        
                <!-- the loop -->
                <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>
                <div class="new-item">
                    <?php the_post_thumbnail();?>
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    <a class="read-more" href="'. get_permalink(get_the_ID()).'">READ MORE »</a>
                    <span class ="date">At <?php echo get_the_date( 'F j, Y' ); ?></span>
                </div>
                <?php endwhile; ?>
                <!-- end of the loop -->

            
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
