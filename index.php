<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <article> 
            <?php if ( has_post_thumbnail( get_the_ID() ) ) : ?>
                <img src="<?php echo esc_url( get_template_directory_uri() ); ?>/#" alt=""><?php echo PG_Image::getPostImage( get_the_ID(), 'large', null, 'both', null ) ?>
            <?php endif; ?> 
            <p><?php the_content(); ?></p> 
        </article>
    <?php endwhile; ?>
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.', 'esqueleto' ); ?></p>
<?php endif; ?>             

<?php get_footer(); ?>