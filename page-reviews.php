<?php get_header(); ?>
<div id="page-map">
	
</div>
<div class="page-top row">
	<div class="large-5 columns">
		<h1>Recent Reviews</h1>
	</div>
</div>
<div class="row">
	<div class="large-12 columns">
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
			<?php if (++$i == 10) break; ?>
			<?php endforeach; ?>

	</div>
	<div class="large-3 columns"></div>
</div>
<?php get_footer(); ?>
