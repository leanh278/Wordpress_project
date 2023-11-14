<div class="footer">
    <div class="container">
        <div class="fooeter_top">
            <div class="fooeter_top-logo">
                <img src="<?php echo get_field('logo','option')['url'] ?>" alt="">
            </div>
            <div class="fooeter_top-info">
                <h3>ADRESSES:</h3>
                <span><?php echo get_field('adresses_1','option')['header'] ?></span>
                <p><?php echo get_field('adresses_1','option')['text'] ?></p>
                <span><?php echo get_field('adresses_2','option')['header'] ?></span>
                <p><?php echo get_field('adresses_2','option')['text'] ?></p>
            </div>
            <div class="fooeter_top-contact">
                <h3>CONTACT:</h3>
                <a href="mailto:<?php echo get_field('email','option')?>"><?php echo get_field('email','option')?></a>
            </div>
        </div>

    </div>
    <div class="borderr"></div>
    <div class="container">
        <div class="fooeter-bottom">
            <div class="left">
                <span>© Copyright 2023 Entobel. All rights reserved.</span>
            </div>
            <div class="right">
                <a href="<?php echo get_field('social_1','option')['link']?>"> <?php echo get_field('social_1','option')['icon']?></a>
                <a href="<?php echo get_field('social_2','option')['link']?>"> <?php echo get_field('social_2','option')['icon']?></a>
                <a href="<?php echo get_field('social_3','option')['link']?>"> <?php echo get_field('social_3','option')['icon']?></a>
    
            </div>
        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script>
            // Instantiate the Bootstrap carousel
        $('.multi-item-carousel').carousel({
        interval: false
        });

        // for every slide in carousel, copy the next slide's item in the slide.
        // Do the same for the next, next item.
        $('.multi-item-carousel .item').each(function(){
        var next = $(this).next();
        if (!next.length) {
            next = $(this).siblings(':first');
        }
        next.children(':first-child').clone().appendTo($(this));
        
        if (next.next().length>0) {
            next.next().children(':first-child').clone().appendTo($(this));
        } else {
            $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
        }
        });
</script>