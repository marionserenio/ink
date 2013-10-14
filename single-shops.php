<?php get_header(); ?>
<div class="shop-page">
	<div class="row">
		<h1><?php echo get_the_title(); ?></h1>
		<div class="large-9 columns">
			<div class="shop-map">

			</div>
			<p class="description"><?php echo $description = get_post_meta($post->ID, '_description', true); ?></p>
		</div>
		<div class="shop-info large-3 columns">
			<h6>Address</h6>
			<address id="ShopAddress">
				<?php echo $street = get_post_meta($post->ID, '_street', true); ?>
				<?php echo $address = get_post_meta($post->ID, '_address', true);?> <br>
				<?php echo $state = get_post_meta($post->ID, '_state', true); ?>
				<?php echo $postcode = get_post_meta($post->ID, '_postcode', true); ?> <br>
				<?php echo $country = get_post_meta($post->ID, '_country', true); ?>
			</address>
			<h6>Website</h6>
			<address>
				<a href="http://<?php echo $website = get_post_meta($post->ID, '_website', true); ?>" target="_blank"><?php echo $website = get_post_meta($post->ID, '_website', true); ?></a>
			</address>
			<h6>Phone</h6>
			<address>
				<?php echo $phone = get_post_meta($post->ID, '_phone', true); ?>
			</address>
		</div>
	</div>
</div>

<div class="shop-page-bottom">
	<div class="row">
		<h4><strong><?php echo get_the_title(); ?></strong> Gallery</h4>
		<div class="gallery large-9">
			<ul class="small-block-grid-3">
			  <li><a href="#"><img src="<?php echo bloginfo('template_directory') ?>/img/testshop-small.jpg"></a></li>
			  <li><a href="#"><img src="<?php echo bloginfo('template_directory') ?>/img/testshop-small.jpg"></a></li>
			  <li><a href="#"><img src="<?php echo bloginfo('template_directory') ?>/img/testshop-small.jpg"></a></li>
			</ul>					
		</div>
	</div>
</div>

<?php comments_template(); ?>
<?php get_footer(); ?>
