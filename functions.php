<?php
/* 
 @ Khai bao hang gia tri
    @THEME_URL = lay duong dan thu muc theme
    @CORE = lay duong dan cua thu muc /core
 */

 define('THEME_URL',get_stylesheet_directory());
 define('CORE', THEME_URL . "/core");

 /*
 @ Nhung file /core/init.php
 */

 //require_once(CORE . "/init.php");

/*
@ Thiet ;ap chieu rong noi dung
*/

if (!isset($cotent_width)){
    $cotent_width = 620;
}

/*
@khai bao chuc nag cua theme
*/
if (!function_exists('wp_theme_setup')){
    function wp_theme_setup(){
        add_theme_support('custom-logo');
        /* Thiet lap text domain */
        $language_folder = THEME_URL . '/languages';
        load_theme_textdomain('wp',$language_folder);

        /* tu dong them link RSS len <head> */
        add_theme_support('automatic-feed-links');

        /*them post thumbnail*/
        add_theme_support( 'post-thumbnails');

        /*them menu*/
        register_nav_menu('primary-menu',__('Primary Menu','wp'));

        //tao sidebar
        $sidebar =array(
            'name' => __('Main Sidebar','wp'),
            'id' => 'main-sidebar',
            'description' => __('Default sidebar'),
            'class' => 'main-sidebar',
            'before_title' => '<h3 class=" widgettitle">',
            'after_title' => '</h3>' 
        );
        register_sidebar($sidebar);
    }
    add_action('init','wp_theme_setup');
}
if( function_exists('acf_add_options_page') ) {

    acf_add_options_page(array(
        'page_title'    => 'Theme General Settings',
        'menu_title'    => 'Theme Settings',
        'menu_slug'     => 'theme-general-settings',
        'capability'    => 'edit_posts',
        'redirect'      => false
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Header Settings',
        'menu_title'    => 'Header',
        'parent_slug'   => 'theme-general-settings',
    ));

    acf_add_options_sub_page(array(
        'page_title'    => 'Theme Footer Settings',
        'menu_title'    => 'Footer',
        'parent_slug'   => 'theme-general-settings',
    ));

}

/*
tao ham phan trang
*/

if ( !function_exists('wp_pagination')){
    function wp_pagination(){
        if ($GLOBALS['wp_query']->max_num_pages < 2 ){
            return '';
        } ?>
        <nav class="pagination_nav">
            <?php if (get_next_posts_link()) : ?>
                <div class ="prev"><?php next_posts_link(__('Older Posts', 'wp'));?></div>
            <?php endif; ?>
            <?php if (get_previous_posts_link()) : ?>
                <div class ="next"><?php previous_posts_link(__('Newest Posts', 'wp'));?></div>
            <?php endif; ?>
        </nav>
   <?php }
}
/*them menu trang chu*/
if ( !function_exists('wp_menu')){
    function wp_menu($menu){
        $menu = array(
            'theme_location' => $menu,
            'container' => 'nav',
            'container_class' => $menu,
            'items_wrap' => '<li id="%1$s" class="nav-item %2$s"><a class="nav-link header_nav-link" aria-current="page" href="#">%3$s</a></li>',
        );
        wp_nav_menu($menu);
    }
}

/* ham hien thi thumbnail
*/
if ( !function_exists('wp_thumbnail')){
    function wp_thumbnail($size){
        if( !is_single() && has_post_thumbnail() || has_post_format('image')) : ?>
            <div class ="post-thumbnail"><?php the_post_thumbnail($size); ?></div>
        <?php endif; ?>
        <?php
    }
}

/* hienthi header bai post*/
if ( !function_exists('wp_entry_header')){
    function wp_entry_header(){ ?>
            <h1 class="entry-header"><?php the_title(); ?></h1>
    <?php }
}

/*if ( !function_exists('wp_entry_meta')){
    function wp_entry_meta(){ ?>
        <?php if( !is_page()) : ?>
            <div class="entry-meta">
            <?php 
                printf(__('<span class ="author">By %1$s </span>','wp'),get_the_author());

                printf(__('<span class ="date-public">At %1$s </span>','wp'),get_the_date());

                printf(__('<span class ="category">In %1$s </span>','wp'),get_the_category_list( ',' ));
            ?>
            </div>
            <?php endif; ?>
    <?php }
    
}*/

/* hien thi noi dung bai post*/
if ( !function_exists('wp_entry_content')){
    function wp_entry_content(){ 
        if( !is_single()&& !is_page()){
            the_excerpt();
        }else
            the_content();

    }
    
}

function wp_readmore(){
    return '<a class="read-more" href="'. get_permalink(get_the_ID()).'">'.__('...[Read More]','wp').'</a>';
}
add_filter('excerpt_more','wp_readmore');

/* tag single*/
if ( !function_exists('wp_entry_tag')){
    function wp_entry_tag(){ 
        printf(__('<span class ="category">Tag: %1$s','wp'),get_the_tag_list( '', ',' ));
    }
    
}
// nhung file
function wp_style(){
    wp_register_style('main-style',get_template_directory_uri(). "/style.css",'all');
    wp_enqueue_style('main-style');
    wp_register_style('responsive',get_template_directory_uri(). "/css/responsive.css",'all');
    wp_enqueue_style('responsive');
    // wp_register_script('js',get_template_directory_uri(). "/main.js",array('jquery'));
    // wp_enqueue_script('js');
    
}
add_action('wp_enqueue_scripts','wp_style');


