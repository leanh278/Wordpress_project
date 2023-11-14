<?php
/*
 Template Name: Home
 */
?>
<?php get_header(); ?>
<!-- <?php register_nav_menu('main-menu', 'Main menu'); ?>
<div id = "content" class="container ">
    <div class="content-body">
        <div id = "main-content">    
            <?php if (have_posts() ) : while( have_posts() ) : the_post(); ?> 
                <?php get_template_part('content', get_post_format()); ?>
            <?php endwhile ?>
                <?php wp_pagination(); ?>
            <?php else: ?>
                <?php get_template_part('content','none'); ?>
            <?php endif; ?>
        </div>
        
        <div id = "sidebar">    
            <?php get_sidebar(); ?>
        </div>
    </div>

</div> -->

    <div id="slider">
        <div class="slider_nav">
            <video width="100%"  loop autoplay muted playsinline>
                <source src="<?php echo get_field('banner_img')['url'] ?>" type="video/mp4">
              </video>
            <div class="slider_inner">
            <?php echo get_field('banner_name') ?>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="page-nav">
            <div class="page-mission">
                    <div class="page-mission-left">
                        <div class="page-mission-header">
                        Our mission
                        </div>
                        <div class="page-mission-left-text">
                        <?php echo get_field('mission_text') ?>
                        </div>
                    </div>
                    <div class="page-mission-right">
                    <?php echo get_field('mission_description') ?>
                    </div>
            </div>

            <div class="page-video">
            <iframe  src="<?php echo get_field('youtube')?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>

            <div class="page-product">
                <div class="page-product-header">
                Our Products
                </div>
                <div class="page-product-text">
                Entobel offers sustainable alternatives to conventional protein, oil, and fertilizer sources.<br> Besides being rich in nutrients, our products have various functionalities.
                </div>
                <div class="page-product-list">
                    <a  href="<?php the_permalink($page = 41) ?>" class="page-product-item">
                        <img src="https://www.entobel.com/wp-content/uploads/2023/02/H-Meal-min.png" alt="">
                        <div>
                            <h2>H-Meal</h2>
                             <p>Functional BSFL protein meal</p>
                        </div>
                    </a>
                    <a  href="<?php the_permalink($page = 75) ?>" class="page-product-item">
                        <img src="https://www.entobel.com/wp-content/uploads/2023/02/H-Oil-min-768x1024.png" alt="">
                        <div>
                            <h2>H-Oil</h2>
                             <p>Lauric acid-rich BSFL Oil</p>
                        </div>
                    </a>
                    <a  href="<?php the_permalink($page = 80) ?>" class="page-product-item">
                        <img src="https://www.entobel.com/wp-content/uploads/2023/02/H-Ferti-min-768x1024.png" alt="">
                        <div>
                            <h2>H-Ferti</h2>
                             <p>BSFL soil amendment</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="page-img">
        <div class="container">
            <div class="page_process">
                <div class="page_process-header">
                Our process
                </div>
                <img src="<?php echo get_field('process-img')['url'] ?>" alt="">
            </div>
        </div>
    </div>

    <div class="container">

        <div class="page_process">
            <div class="pages_item">
                <div class="page_item-left">
                    <div class="page_item-header">
                    <?php echo get_field('introduce_1')['title'] ?>
                    </div>
                    <div class="page_item-text">
                    <?php echo get_field('introduce_1')['text'] ?>
                    </div>
                    <p><?php echo get_field('introduce_1')['description'] ?></p>
                    <div class="quality-button" style="margin: unset;justify-content: start; ">
                    <a href="<?php the_permalink($page = 27) ?>" class="quality-button" style="margin: unset">
                    What we do
                    </a>
                    </div>
                </div>
                <div class="page_item-right">
                    <img src="<?php echo get_field('introduce_1')['img']['url'] ?>" alt="">
                </div>
            </div>

            <div class="pages_item">
                <div class="page_item-left">
                <img src="<?php echo get_field('introduce_2')['img']['url'] ?>" alt="">
                </div>
                <div class="page_item-right">
                    <div class="page_item-header">
                    <?php echo get_field('introduce_2')['title'] ?>
                    </div>
                    <div class="page_item-text">
                    <?php echo get_field('introduce_2')['text'] ?>
                    </div>
                    <p><?php echo get_field('introduce_2')['description'] ?></p>
                    <div class="quality-button" style="margin: unset;justify-content: start;">
                    <a href="<?php the_permalink($page = 16) ?>" class="quality-button" style="margin: unset">
                    Our journey
                    </a>
                    </div>
    
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row">
                <h2 class="slider_header">They trust us</h2>
            <div class="col-md-12">
            <div class="carousel slide multi-item-carousel" id="theCarousel">
                <div class="carousel-inner">
                <div class="item active">
                    <div class="col-xs-4"><a href="#1"><img src="<?php echo get_field('slider_1')['img']['url'] ?>"></a></div>
                </div>
                <div class="item">
                    <div class="col-xs-4"><a href="#1"><img src="<?php echo get_field('slider_2')['img']['url'] ?>"></a></div>
                </div>
                <div class="item">
                    <div class="col-xs-4"><a href="#1"><img src="<?php echo get_field('slider_3')['img']['url'] ?>"></a></div>
                </div>
                </div>
                <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
