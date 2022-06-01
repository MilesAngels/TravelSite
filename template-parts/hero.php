<!-- This is the start of hero section -->
<main id="topBtn">
    <?php if(is_home()):?>
        <img style="filter: grayscale(30%);" src="https://travel-site.local/wp-content/uploads/2022/05/lighthouse-1872998_1920.jpg" >
        <div class="hero-text">
            <h1><?php echo "Blog";?></h1>
            <h3><?php echo "View our most recent blog posts"?></h3>
        </div>
    <?php else: ?>
        <img style="filter: grayscale(30%);" src="<?php the_field('hero_image');?>" >
        <div class="hero-text">
            <h1><?php the_field('page_title');?></h1>
            <h3><?php the_field('subtitle'); ?></h3>
        </div>
    <?php endif; ?>
    
</main>
