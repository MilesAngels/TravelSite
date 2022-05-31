<!-- This is the start of hero section -->
<main id="topBtn">
    <img src="<?php the_post_thumbnail();?>">
    <div class="hero-text">
        <h1><?php the_title();?></h1>
        <?php $subheading = get_post_meta($post->ID, 'subheading', true);?>
            <?php if($subheading) :?>
                <h3><?php echo $subheading;?></h3>
            <?php endif; ?>
    </div>
</main>
<!-- This is the end of hero section --> 
<div class="hero-text" id="topBtn">
    
</div>