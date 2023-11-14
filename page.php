<?php get_header(); ?>
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

</div>
<?php get_footer(); ?>
