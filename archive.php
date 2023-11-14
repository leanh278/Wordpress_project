<?php get_header(); ?>
<div id = "content" class="container ">
    <div class="content-body">
        <div id = "main-content">
            <div class="archive-title">
            <?php
                if( is_tag()) :
                    printf(__('Tag: %1$s','wp'),single_tag_title('',false));
                elseif(is_category()):
                    printf(__('Category: %1$s','wp'),single_cat_title('',false));
                elseif(is_day()) :
                    printf(__('Daily: %1$s','wp'),get_the_time('l,F j,Y'));
                elseif(is_month()) :
                    printf(__('Monthly: %1$s','wp'),get_the_time('F Y'));
                elseif(is_year()) :
                    printf(__('Yeary: %1$s','wp'),get_the_time('Y'));
                endif;
            ?>
        </div>      
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

</div>
<?php get_footer(); ?>

