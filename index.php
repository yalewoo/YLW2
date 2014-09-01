		<?php get_header(); ?>

		
		<div id="container">
			<section id="blog">
	    		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
				<article class="post" id="post-<?php the_ID(); ?>">
					<div class="post-thumb">
						<img src="<?php echo catch_first_image() ?>" alt="<?php the_title(); ?>" />
					</div>
					<div class="rightpost">

						<h2 id="post-title">
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</h2>
						<div class="post-meta">
		                    <span style="color:#c32136;"><?php the_time('Y 年 n 月 j 日')?></span>
		                    <?php _e('分类&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?>
		                    <?php comments_popup_link('快抢沙发 &#187;', '沙发被抢 &#187;', '% 评论 &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
		                     <?php if(function_exists('the_views')) { the_views(); } ?>
						</div>
						<div class="post-content">
							<?php the_excerpt(); ?>
						</div>
						<a href="<?php the_permalink() ?>">阅读全文</a>
					</div>
					
				</article>
				<?php endwhile; ?>
				<div class="article_nav">
	            	<?php posts_nav_link(); ?>
	        	</div>
	    
	   			<?php else : ?>
	        		<div class="post">
	            	<h2><?php _e("Not Found"); ?></h2>
	        	</div>
				<?php endif; ?>
	    	</section>

	    	<?php get_sidebar(); ?>
	    </div>
    	<?php get_footer(); ?>
	</body>
</html>