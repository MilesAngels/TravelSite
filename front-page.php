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
            <img src="https://travel-site.local/wp-content/uploads/2022/05/globe.png" alt="pink globe icon.">
            <h2>CHOOSE YOUR DESTIANTION</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis inventore, perspiciatis rerum quisquam nam ex. </p>
        </div>
        <div class="column">
            <img src="https://travel-site.local/wp-content/uploads/2022/05/airport.png" alt="pink globe icon.">
            <h2>CATCH YOUR FLIGHT</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis inventore, perspiciatis rerum quisquam nam ex. </p>
        </div>
        <div class="column">
            <img src="https://travel-site.local/wp-content/uploads/2022/05/pin.png" alt="pink globe icon.">
            <h2>LAND IN PARADISE</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis inventore, perspiciatis rerum quisquam nam ex. </p>
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