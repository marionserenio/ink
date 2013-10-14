<?php get_header(); ?>
<div id="page-map">
	
</div>
<div class="page-top row">
	<div class="large-4 columns">
		<h1><?php the_title(); ?></h1>
	</div>
</div>
<div class="row">
	<?php while ( have_posts() ) : the_post(); ?>
		<?php /* The loop */ ?>
			<div id="post-<?php the_ID(); ?>" class="large-9 page-content columns">
				<article>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
					</div><!-- .entry-content -->
				</article><!-- #post -->
				<?php comments_template(); ?>
			<?php endwhile; ?>
	</div>
</div>
<?php get_footer(); ?>
