		<?php get_header(); ?>

		<div id="container">
    		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<article class="post" id="post-<?php the_ID(); ?>">
				<h2>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h2>
				<div class="entry">
                    <p id="article_meta">最后更新于：<?php the_modified_time('Y 年 n 月 j 日')?></p>
					<?php the_content(); ?>
					<?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
	                
	    			<div class="comments-template">
                		<?php comments_template('', true); ?>
            		</div>                             
                </div>

                <?php endwhile; ?>

				<div class="navigation">
            		<?php previous_post_link('%link') ?> || <?php next_post_link('%link') ?>
        		</div>
       			<?php else : ?>
        		<div class="post">
            		<h2><?php _e("Not Found"); ?></h2>
        		</div>

                <?php endif; ?>

			</article>
			
		</div>

    	<?php get_sidebar(); ?>
    	<?php get_footer(); ?>
	</body>
</html>