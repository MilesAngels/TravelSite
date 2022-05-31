<?php 
    /** 
     * 
     * Template Name: Homepage
     * 
     * @package TravelSite
     * 
     **/
?>

<?php get_header(); ?>

   
        <!-- This is the start of icon section -->
        <section class="row">
        <div class="column">
            <img src="<?php the_field('icon1');?>" alt="pink globe icon.">
            <h2><?php the_field('column_title_1');?></h2>
            <p><?php the_field('column_paragraph_1');?></p>
        </div>
        <div class="column">
            <img src="<?php the_field('icon2');?>" alt="pink globe icon.">
            <h2><?php the_field('column_title_2');?></h2>
            <p><?php the_field('column_paragraph_2');?></p>
        </div>
        <div class="column">
            <img src="<?php the_field('icon3');?>" alt="pink globe icon.">
            <h2><?php the_field('column_title_1');?></h2>
            <p><?php the_field('column_paragraph_3');?></p>
        </div>
    </section>
    <!-- This is the end of icon section -->

<!-- Information Section -->
<?php get_template_part("template-parts/info-section"); ?>

<!-- Banner -->
<?php get_template_part("template-parts/banner"); ?>

<!-- Back to top button -->
<?php get_template_part("template-parts/to-top");?>

<!-- Footer -->
<?php get_footer();?>