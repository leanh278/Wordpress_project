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
                <source src="wp-content\themes\themeswp\General.mp4" type="video/mp4">
              </video>
            <div class="slider_inner">
                Rethinking the food chain <br>
                from the ground up
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
                        We produce functional insect-based ingredients for animal feed and health aiming at a more sustainable global food system. 
                        </div>
                    </div>
                    <div class="page-mission-right">
                    <b>Entobel</b> is a Singapore-headquartered biotech company established in 2013 with its operations implemented in Vietnam since 2015.<br>
                    With over 10 years of hands-on experience, we are the industry leader in producing and processing the <b> Black Soldier Fly – Hermetia illucens</b>, an insect species well-known for its bioconversion capacity and potential as a nutritious resource for animal feed and health in aquaculture and pet food.
                    </div>
            </div>

            <div class="page-video">
            <iframe  src="https://www.youtube.com/embed/OInMm0f-WzI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
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
                <img src="https://www.entobel.com/wp-content/uploads/2023/03/Bioconversion_Schema_2_Process-Horizontal-2-2048x797.png" alt="">
            </div>
        </div>
    </div>

    <div class="container">

        <div class="page_process">
            <div class="pages_item">
                <div class="page_item-left">
                    <div class="page_item-header">
                    Insect protein for<br> our planet
                    </div>
                    <div class="page_item-text">
                    INSECTS, A NATURAL PART OF MOST ANIMAL DIETS, ARE RECOGNIZED BY SCIENTISTS AS AN ALTERNATIVE SOLUTION TO THE FOOD CRISES.
                    </div>
                    <p>At Entobel, we leverage our proprietary technology and expertise to harness the power of the Black Soldier Fly-upcycling food by-products into highly nutritious animal feeding solutions.</p>
                    <div class="quality-button" style="margin: unset;justify-content: start; ">
                    <a href="<?php the_permalink($page = 27) ?>" class="quality-button" style="margin: unset">
                    What we do
                    </a>
                    </div>
                </div>
                <div class="page_item-right">
                    <img src="https://www.entobel.com/wp-content/uploads/2023/01/BSF_on_green_leaf-min-1024x697.jpg" alt="">
                </div>
            </div>

            <div class="pages_item">
                <div class="page_item-left">
                <img src="https://www.entobel.com/wp-content/uploads/2023/01/Entobel_Co_Founders-1024x837.png" alt="">
                </div>
                <div class="page_item-right">
                    <div class="page_item-header">
                    The Entobel adventure
                    </div>
                    <div class="page_item-text">
                    GAËTAN CRIELAARD AND ALEXANDRE DE CATERS, BOTH BELGIAN, FOUNDED ENTOBEL IN 2012.
                    </div>
                    <p>In 2013, they chose Vietnam to set up the activities with the first pilot plant established in 2015, and a commercial plant in 2019. Entobel is well positioned for rapid expansion as the main growing demand for protein will come from tropical countries.</p>
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
                    <div class="col-xs-4"><a href="#1"><img src="https://www.entobel.com/wp-content/uploads/2023/02/Mekong_Capital.png"></a></div>
                </div>
                <div class="item">
                    <div class="col-xs-4"><a href="#1"><img src="https://www.entobel.com/wp-content/uploads/2023/02/Vinh_Hoan.png"></a></div>
                </div>
                <div class="item">
                    <div class="col-xs-4"><a href="#1"><img src="https://www.entobel.com/wp-content/uploads/2023/02/Dragon_Capital.png"></a></div>
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
