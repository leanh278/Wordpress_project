<?php
/*
 Template Name: Products
 */
?>
<?php get_header(); ?>

<?php 
$name = get_field('name');
$tag = get_field('tag');
$content = get_field('content');
$min_crude_protein = get_field('min_crude_protein');
$max_hydrolyzed_fat = get_field('max_hydrolyzed_fat');
$max_crude_fiber = get_field('max_crude_fiber');
$max_ash = get_field('max_ash');
$max_moisture = get_field('max_moisture');
$img = get_field('img');
$logo1 = get_field('logo1');
$name_logo1 = get_field('name_logo1');
$text_logo1 = get_field('text_logo1');
$logo2 = get_field('logo2');
$name_logo2 = get_field('name_logo2');
$text_logo2 = get_field('text_logo2');
$logo3 = get_field('logo3');
$name_logo3 = get_field('name_logo3');
$text_logo3 = get_field('text_logo3');

?>
<div class="container">
    <div class="products">
        <div class="products-left">
            <h1><?php echo $name ?></h1>
            <p><?php echo $tag ?></p>
            <span><?php echo $content ?></span>
            <table class="table ">
                <thead>
                    <tr>
                    <th scope="col">Chemical Analysis</th>
                    <th scope="col">%</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">Min Crude Protein</th>
                    <td><?php echo $min_crude_protein ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Max Hydrolyzed Fat</th>
                    <td><?php echo $max_hydrolyzed_fat ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Max Crude Fiber</th>
                    <td><?php echo $max_crude_fiber ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Max Ash</th>
                    <td><?php echo $max_ash ?></td>
                    </tr>
                    <tr>
                    <th scope="row">Max Moisture</th>
                    <td><?php echo $max_moisture ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="products-right">
            <img src="<?php echo $img['url'] ?>" alt="">
        </div>
    </div>
</div>

<div class="achievement">
        <div class="container">
            <div class="achievement-list">
                <div class="achievement-item with">
                    <img src="<?php echo $logo1['url'] ?>" alt="">
                    <h4><?php echo $name_logo1 ?></h4>
                    <p><?php echo $text_logo1 ?></p>
                </div>
                <div class="achievement-item with">
                    <img src="<?php echo $logo2['url'] ?>" alt="">
                    <h4><?php echo $name_logo2 ?>​</h4>
                    <p><?php echo $text_logo2 ?></p>
                </div>
                <div class="achievement-item with">
                    <img src="<?php echo $logo3['url'] ?>" alt="">
                    <h4><?php echo $name_logo3 ?>​</h4>
                    <p><?php echo $text_logo3 ?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="page-product">
                <div class="page-product-header">
                Our Products
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
<?php get_footer(); ?>