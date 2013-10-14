<?php
/*
Template Name: Search Page
*/
?>
<?php get_header(); ?>
<div id="page-map">
	
</div>
<div class="page-top row">
	<div class="large-6 columns">
		<h1>Search Tattoo shops</h1>
	</div>
</div>
<div class="row">
		<div class="large-3 columns search-options">
			<?php get_search_form(); ?>
		</div>
		<div class="search-results large-9 columns">
			<ul>
				<li class="large-12">
					<div class="thumbnail">
						
					</div>
					<div class="shop-info large-12">
						<div class="shop-rating"><i class="icon-star"></i>24</div>
							<div class="large-10">
								<h2>Fusce laoreet rhoncus pulvinar</h2>
								<p>ASed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
								totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
							</div>
								<a class="button">View shop</a>
						</div>
				</li>
				<?php $loop = new WP_Query( array( 'post_type' => 'shops', 'posts_per_page' => 10 ) ); ?>
				<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<?php the_post_thumbnail(); ?>
				<h3><?php the_title() ?></h3>
				<a href="<?php the_permalink() ?>">Read More</a>
				<?php endwhile; ?>											
			</ul>

			<div class="pagination">
				<?php
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array(
				  'posts_per_page' => 3,
				  'paged' => $paged
				);

				query_posts($args); 
				?>

			</div>		
		</div>
</div>
<?php get_footer(); ?>
