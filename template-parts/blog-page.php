<section class="container">
<?php /* Start the Loop */
	while ( have_posts() ) : ?>
	<?php the_post(); ?>
        <div class="card">
            <h2><?php echo get_the_title(); ?></h2>
            <img src="<?php the_post_thumbnail();?>
            <p><?php the_excerpt(); ?></p>
            <button class="moreBtn"><a href="<?php the_permalink();?>">Read more..</a></button>
        </div>
        
	<?php endwhile; ?>
</section>