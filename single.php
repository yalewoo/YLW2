		<?php get_header(); ?>

		<div id="container">
    		<?php if(have_posts()) : ?><?php while(have_posts()) : the_post(); ?>
			<section class="article" id="article-<?php the_ID(); ?>">
				<article id="entry">
					<h2 id="article-title">
						<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
					</h2>
					
	                <p id="article_meta">
	                	分类: <?php the_category(', ') ?> \ 最后更新于：<?php the_modified_time('Y 年 n 月 j 日')?>
	                </p>

	                <div id="article-content">
						<?php the_content(); ?>
					</div>
				</article>
				<div id="otherdata">
					<?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>

	                
	                <?php   $custom_fields = get_post_custom_keys($post_id);
	    			if (!in_array ('copyright', $custom_fields)) : ?>
					<div class="article-copyright">
		    			<p><b> 声明: </b> 本文由(<a href="<?php bloginfo('home'); ?>"> <?php the_author(); ?> </a>)原创，转载请保留本文链接: <a href="<?php the_permalink()?>" title=<?php the_title(); ?>><?php the_permalink()?></a></p>
					</div>
	   				<?php else: ?>
					<?php  $custom = get_post_custom($post_id);
	           		$custom_value = $custom['copyright']; ?>
					<div class="article-copyright">
		   				<p><b> 声明: </b> 本文来源于 <a rel="nofollow" target="_blank" href="/go.php?url=<?php echo $custom_value[0] ?>"><?php echo $custom_value[0] ?></a> ，由(<a href="<?php bloginfo('home'); ?>"> <?php the_author(); ?> </a>) 整编。</p>
		  				<p><b> 本文链接: </b><a href="<?php the_permalink()?>" title=<?php the_title(); ?>><?php the_permalink()?></a> .</p>
	    			</div>
	    			<?php endif; ?>

	    			<div class="navigation">
	            		<?php previous_post_link('%link') ?> || <?php next_post_link('%link') ?>
	        		</div>

	    			<div class="comments-template">
	            		<?php comments_template('', true); ?>
	        		</div>  

                </div>

                <?php endwhile; ?>

				
       			<?php else : ?>
        		<section class="article">
            		<h2><?php _e("Not Found"); ?></h2>
        		</section>

                <?php endif; ?>

			</section>
			
		

    		<?php get_sidebar(); ?>
    	</div>
    	<?php get_footer(); ?>
	</body>
</html>