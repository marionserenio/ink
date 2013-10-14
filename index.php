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
			        <input type="submit" id="searchsubmit" value="Search" />
			    </div>
			</form>

		</div>
		<div class="search-results large-9 columns">
			<ul>
				 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				 <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
				 <?php endwhile; else: ?>
				 <p>Sorry, no posts matched your criteria.</p>
				 <?php endif; ?>
			</ul>	
		</div>
</div>
<?php get_footer(); ?>
