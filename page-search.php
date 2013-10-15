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
			<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
			    <div><label class="screen-reader-text" for="s">Search for:</label>
			        <input type="text" value="" name="s" id="s" />
			        <input type="hidden" name="post_type" value="shops" />
			        <input type="submit" id="searchsubmit" value="Search" />
			    </div>
			</form>

		</div>
		<div class="search-results large-9 columns">
			<ul>
				<?php 
				// the query to set the posts per page to 3
				$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$args = array('posts_per_page' => large-10, 'paged' => $paged, 'post_type' =>'shops');
				query_posts($args); ?>
				<!-- the loop -->
				<?php if ( have_posts() ) : while (have_posts()) : the_post(); ?>
				<li class="large-12">
					<div class="thumbnail">
						<?php the_post_thumbnail(); ?>
					</div>
					<div class="shop-info large-12">
						<div class="shop-rating"><i class="icon-star"></i>24</div>
							<div class="large-10">
								<h2><?php the_title() ?></h2>
								<p>ASed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
								totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae.</p>
							</div>
								<a class="button" href="<?php the_permalink() ?>">View shop</a>
						</div>
				</li>
				<?php endwhile; ?>
			</ul>

			<div class="pagination">
				<?php   
				    global $wp_query;
				    $big = 99999999;
					echo paginate_links(array(
			        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
			        'format' => '?paged=%#%',
			        'total' => $wp_query->max_num_pages,
			        'current' => max(1, get_query_var('paged')),
			        'show_all' => false,
			        'end_size' => 2,
			        'mid_size' => 3,
			        'prev_next' => true,
			        'prev_text' => '« Prev',
			        'next_text' => 'Next »',
			        'type' => 'list'
			    )); ?>
				<?php else : ?>
				<?php endif; ?>
			</div>		
		</div>
</div>
<?php get_footer(); ?>
