<?php
/*
 Template Name: Our-journey
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

    <div class="containers">
        <div class="founding">
            <div class="founding-left">
                <h1>Founding team</h1>
                <p><?php echo get_field('founding_text')?></p>
            </div>
            <div class="founding-right">
                <div class="founding-right-list">
                <div class="founding-item">
                    <img src="<?php echo get_field('item_1')['img']['url']?>" alt="">
                    <h3><?php echo get_field('item_1')['name']?></h3>
                    <p><?php echo get_field('item_1')['text']?></p>
                </div>
                <div class="founding-item">
                    <img src="<?php echo get_field('item_2')['img']['url']?>" alt="">
                    <h3><?php echo get_field('item_2')['name']?></h3>
                    <p><?php echo get_field('item_2')['text']?></p>
                </div>
                </div>
            </div>
        </div> 
    </div>

    <div class="container">
        <div class="beginning">
            <h1>From the beginning...</h1>
        </div>
    </div>
    <img class="img_slider" src="<?php echo get_field('beginning_link')?>" alt="">

    <div class="values">
        <div class="container">

            <div class="values-right">
                <h1>Our core values</h1>
                <div class="values-list">
                    <div class="values-item">
                        <h3><?php echo get_field('values_1')['name']?></h3>
                        <p><?php echo get_field('values_1')['text']?></p>
                    </div>
                    <div class="values-item">
                        <h3><?php echo get_field('values_2')['name']?></h3>
                        <p><?php echo get_field('values_2')['text']?></p>
                    </div>
                    <div class="values-item">
                        <h3><?php echo get_field('values_3')['name']?></h3>
                        <p><?php echo get_field('values_3')['text']?></p>
                    </div>
                    <div class="values-item">
                        <h3><?php echo get_field('values_4')['name']?></h3>
                        <p><?php echo get_field('values_4')['text']?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
            <div class="row">
            <div class="col-md-12">
            <div class="carousel slide multi-item-carousel" id="theCarousel">
                <div class="carousel-inner">
                <div class="item active">
                    <div class="col-xs-4"><a href="#1"><img src="<?php echo get_field('slider_1')['url']?>"></a></div>
                </div>
                <div class="item">
                    <div class="col-xs-4"><a href="#1"><img src="<?php echo get_field('slider_2')['url']?>"></a></div>
                </div>
                <div class="item">
                    <div class="col-xs-4"><a href="#1"><img src="<?php echo get_field('slider_3')['url']?>"></a></div>
                </div>
                </div>
                <a class="left carousel-control" href="#theCarousel" data-slide="prev"><i class="glyphicon glyphicon-chevron-left"></i></a>
                <a class="right carousel-control" href="#theCarousel" data-slide="next"><i class="glyphicon glyphicon-chevron-right"></i></a>
            </div>
            </div>
        </div>
        </div>

<?php get_footer(); ?>
