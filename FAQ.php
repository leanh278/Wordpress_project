<?php
/*
 Template Name: FAQ
 */
?>
<?php get_header(); ?>
<div class="container ">
    <div class="margin faq" >
        <div class="quality-left center quality_img">
            <h1><?php echo get_field('item')['header']?></h1>
            <span><?php echo get_field('item')['title']?></span>
            <div class="quality-button" style="margin: unset;justify-content: end;">
                <a href="<?php the_permalink($page = 124) ?>" class="quality-button" style="margin: unset">
                Contact us
                </a>
            </div>
        </div>
        <div class="quality-right">
        <div class="detail_content">
                <div class="accordion " id="accordionPanelsStayOpenExample">
                    <div class="accordion-item detail_content-nav-info ">
                        <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                        <button class="accordion-button detail_content-nav-info-button faq-button " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        <?php echo get_field('faq_1')['title']?>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse  detail_content-nav-info-body" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                        <p>
                        <?php echo get_field('faq_1')['text']?>
                        </p> 
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item detail_content-nav-info">
                        <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                        <button class="accordion-button detail_content-nav-info-button faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        <?php echo get_field('faq_2')['title']?>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseTwo" class="accordion-collapse detail_content-nav-info-body collapse" aria-labelledby="panelsStayOpen-headingTwo">
                        <div class="accordion-body">
                            <p>
                            <?php echo get_field('faq_2')['text']?>
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item detail_content-nav-info">
                        <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                        <button class="accordion-button collapsed detail_content-nav-info-button faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        <?php echo get_field('faq_3')['title']?>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseThree" class="accordion-collapse detail_content-nav-info-body collapse" aria-labelledby="panelsStayOpen-headingThree">
                        <div class="accordion-body">
                            <p>
                            <?php echo get_field('faq_3')['text']?>
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item detail_content-nav-info ">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                        <button class="accordion-button detail_content-nav-info-button faq-button " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="true" aria-controls="panelsStayOpen-collapseFour">
                        <?php echo get_field('faq_4')['title']?>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse  detail_content-nav-info-body" aria-labelledby="panelsStayOpen-headingFour">
                        <div class="accordion-body">
                        <p>
                        <?php echo get_field('faq_4')['text']?>
                        </p><br>                        </div>
                        </div>
                    </div>
                    <div class="accordion-item detail_content-nav-info">
                        <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                        <button class="accordion-button detail_content-nav-info-button faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                        <?php echo get_field('faq_5')['title']?>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseFive" class="accordion-collapse detail_content-nav-info-body collapse" aria-labelledby="panelsStayOpen-headingFive">
                        <div class="accordion-body">
                            <p>
                            <?php echo get_field('faq_5')['text']?>
                            </p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item detail_content-nav-info">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                        <button class="accordion-button collapsed detail_content-nav-info-button faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                        <?php echo get_field('faq_6')['title']?>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSix" class="accordion-collapse detail_content-nav-info-body collapse" aria-labelledby="panelsStayOpen-headingSix">
                        <div class="accordion-body">
                            <p>
                            <?php echo get_field('faq_6')['text']?>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion " id="accordionPanelsStayOpenExample">
                    <div class="accordion-item detail_content-nav-info ">
                        <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                        <button class="accordion-button detail_content-nav-info-button faq-button " type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="true" aria-controls="panelsStayOpen-collapseSeven">
                        <?php echo get_field('faq_7')['title']?>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse  detail_content-nav-info-body" aria-labelledby="panelsStayOpen-headingSeven">
                        <div class="accordion-body">
                        <p><?php echo get_field('faq_7')['text']?></p> 
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item detail_content-nav-info">
                        <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                        <button class="accordion-button detail_content-nav-info-button faq-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                        <?php echo get_field('faq_8')['title']?>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseEight" class="accordion-collapse detail_content-nav-info-body collapse" aria-labelledby="panelsStayOpen-headingEight">
                        <div class="accordion-body">
                            <p><?php echo get_field('faq_8')['text']?></p>
                        </div>
                        </div>
                    </div>
                    <div class="accordion-item detail_content-nav-info">
                        <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                        <button class="accordion-button collapsed detail_content-nav-info-button faq-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                        <?php echo get_field('faq_9')['title']?>
                        </button>
                        </h2>
                        <div id="panelsStayOpen-collapseNine" class="accordion-collapse detail_content-nav-info-body collapse" aria-labelledby="panelsStayOpen-headingNine">
                        <div class="accordion-body">
                            <p>
                            <?php echo get_field('faq_9')['text']?>
                            </p>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="page-product" style="padding: unset;">
                <div class="page-product-header">
                Our Products
                </div>
                
                <div class="page-product-list">
                    <a  href="http://localhost:8888/wp1/h-meal/" class="page-product-item">
                        <img src="https://www.entobel.com/wp-content/uploads/2023/02/H-Meal-min.png" alt="">
                        <div>
                            <h2>H-Meal</h2>
                             <p>Functional BSFL protein meal</p>
                        </div>
                    </a>
                    <a  href="http://localhost:8888/wp1/h-oil/" class="page-product-item">
                        <img src="https://www.entobel.com/wp-content/uploads/2023/02/H-Oil-min-768x1024.png" alt="">
                        <div>
                            <h2>H-Oil</h2>
                             <p>Lauric acid-rich BSFL Oil</p>
                        </div>
                    </a>
                    <a  href="http://localhost:8888/wp1/h-ferti/" class="page-product-item">
                        <img src="https://www.entobel.com/wp-content/uploads/2023/02/H-Ferti-min-768x1024.png" alt="">
                        <div>
                            <h2>H-Ferti</h2>
                             <p>BSFL soil amendment</p>
                        </div>
                    </a>
                </div>
            </div>
</div>
<style>
        .menu-item-95 a{
            color: #9E9E9E; !important;
        }
    </style>


<?php get_footer(); ?>