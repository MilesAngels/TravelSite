<section class="single-row">
    <aside>
        <?php get_sidebar();?>
    </aside>
    <article>
        <?php if(is_single()) : ?> 
            <!-- add title, image, author and categories -->
        <h2><?php the_title(); ?></h2>
        <div class="single-row">
        <p><?php echo get_the_author(); ?></p>
        <p><?php echo date('d F Y'); ?></p>
        </div>
            <?php
                // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                    
            ?>
        <?php endif; ?>
    </article>
</section>
