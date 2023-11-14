<?php
/*
 Template Name: Contact
 */
?>
<?php get_header(); ?>
<div class="contact">
    <div class="container">
        <div class="contact-top">
            <p><?php echo get_field('header_1')?></p>
            <h1><?php echo get_field('header_2')?></h1>
        </div>
        <div class="contact-bot">
            <div class="contact-left">
                <div class="contact-item">
                    <p><?php echo get_field('adresses_1')['name']?></p>
                    <span><?php echo get_field('adresses_1')['text']?></span>
                </div>
                <div class="contact-item">
                    <p><?php echo get_field('adresses_2')['name']?></p>
                    <span><?php echo get_field('adresses_2')['text']?></span>
                </div>
                <div class="contact-item">
                    <p><?php echo get_field('adresses_3')['name']?></p>
                    <span><?php echo get_field('adresses_3')['text']?></span>
                </div>
                <div class="contact-item">
                    <p><?php echo get_field('adresses_4')['name']?></p>
                    <span><?php echo get_field('adresses_4')['text']?></span>
                </div>               
            </div>
            <div class="contact-right">
                <?php echo do_shortcode('[contact-form-7 id="1b468a7" title="contact"]') ?>
            </div>
        </div>
    </div>
</div><style>
        .footer{
            margin: unset;
        }
        .menu-item-125 a{
            color: #9E9E9E; !important;
        }
    </style>
<?php get_footer(); ?>
