<?php get_header(); ?>

<div id="container">
    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            
            <div class="entry">
            
                <?php the_content(); ?>
                <?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
                	<p class="postmetadata">
                    <strong> 分类: </strong> <?php the_category(', ') ?> 
                    </p>   
                    <?php   $custom_fields = get_post_custom_keys($post_id);
    if (!in_array ('copyright', $custom_fields)) : ?>
	<div class="postcopyright">
	    <p><strong> 声明: </strong> 本文由(<a href="<?php bloginfo('home'); ?>"> <?php the_author(); ?> </a>)原创，转载请保留本文链接: <a href="<?php the_permalink()?>" title=<?php the_title(); ?>><?php the_permalink()?></a></p>
	</div>
   <?php else: ?>
	<?php  $custom = get_post_custom($post_id);
           $custom_value = $custom['copyright']; ?>
	<div class="postcopyright">
	   <p><strong> 声明: </strong> 本文来源于 <a rel="nofollow" target="_blank" href="/go.php?url=<?php echo $custom_value[0] ?>"><?php echo $custom_value[0] ?></a> ，由(<a href="<?php bloginfo('home'); ?>"> <?php the_author(); ?> </a>) 整编。</p>
	  <p><strong> 本文链接: </strong><a href="<?php the_permalink()?>" title=<?php the_title(); ?>><?php the_permalink()?></a> .</p>
        </div>
	    <?php endif; ?>                               
                
            </div>
            
            
	    
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
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

</div>
</body>

</html>