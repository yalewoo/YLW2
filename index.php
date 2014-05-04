<?php get_header(); ?>

<div id="container">
    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
    
        <div class="post1" id="post-<?php the_ID(); ?>">
            <dl>
                <dt>
                    <span class="thumb"><img class="thumb" src="<?php echo catch_first_image() ?>" /></span>
                </dt>
                <dd>
                    <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <p class="postmetadata">
                    <?php _e('分类&#58;'); ?> <?php the_category(', ') ?> <?php _e('by'); ?> <?php  the_author(); ?>
                    <?php comments_popup_link('快抢沙发 &#187;', '沙发被抢 &#187;', '% 评论 &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
                     <?php if(function_exists('the_views')) { the_views(); } ?>
                    </p>
                     <?php the_excerpt(); ?>
                </dd>
            
            </dl>
      
        </div>
    <?php endwhile; ?>
        <div class="navigation">
            <?php posts_nav_link(); ?>
        </div>
    
    <?php else : ?>
        <div class="post">
            <h2><?php _e("Not Found"); ?></h2>
        </div>
    
    <?php endif; ?>
</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>

</body>

</html>