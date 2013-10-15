<?php get_header(); ?>
<div id="MapContent">
	
</div>

<div class="homepage-content row">
		<h2 class="columns">Gallery and Shops</h2>

	<div class="shops">
		<?php 
		$args = array( 'post_type' => 'shops', 'posts_per_page' => 10 );
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
		?>
		<div class="large-3 columns">
			<div class="shop-box">
			<?php if ( has_post_thumbnail() ) {
			the_post_thumbnail();
			} else { ?>
			<img src="<?php bloginfo('template_directory'); ?>/img/thumbnail_default.jpg" alt="<?php the_title(); ?>" />
			<?php } ?>
				<span class="shop-name"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
				<a class="shop-comments-number"><i class="icon-comment"></i><span class="number"><?php comments_number('0', '1', '%'); ?> </span></a>
			</div>
		</div>
		<?php
		endwhile;
		 ?>			
	</div>

	<div class="large-12 columns">
	<a href="#" class="viewmore">View more Shops</a>
	</div>
</div>

<div class="homepage-content row">
	<div class="comments">
		<h2 class="columns">Recent reviews</h2>
			<?php 
			$i = 0;
            foreach (get_comments() as $comment): 
            ?>
	        <a href="<?php echo get_comment_link(); ?>">
				<div class="large-6 columns">
					<div class="comment-box">
							<p><?php echo $string = substr($comment->comment_content,0,230).'...'; ?></p>
							<div class="comment-meta">
								<div class="star">
									<i class="icon-star"></i>
									<span class="star-number">16</span>
								</div>
							<div class="for">for<span class="name"><?php echo get_the_title($comment->comment_post_ID); ?></span></div>
						</div>
					</div>
				</div>
			</a>
			<?php if (++$i == 4) break; ?>
			<?php endforeach; ?>
		<div class="large-12 columns">
			<!-- <a href="#" class="viewmore">View more comments</a> -->
		</div>
	</div>
</div>



<?php get_footer(); ?>
