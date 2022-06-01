<?php /* Start the Loop */
	while ( have_posts() ) : ?>
	<?php the_post(); ?>
        <h2><?php echo get_the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
        <button class="moreBtn"><a href="">Read more..</a></button>
	<?php endwhile; ?>
