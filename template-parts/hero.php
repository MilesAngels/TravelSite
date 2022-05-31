<!-- This is the start of hero section -->
<main id="topBtn">
    <?php if(is_home()): ?>
        <img src="<?php the_field('hero_image');?>">
    <?php else :?>
    <img src="<?php the_post_thumbnail();?>">
    <?php endif; ?>
    <div class="hero-text">
        <h1><?php the_field('page_title');?></h1>
        <h3><?php the_field('subtitle'); ?></h3>
    </div>
</main>
