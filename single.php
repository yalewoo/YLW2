<?php get_header(); ?>

<div id="container">
    <?php if (have_posts()) : ?><?php while (have_posts()) : the_post(); ?>
        <div class="post" id="post-<?php the_ID(); ?>">
            <h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
            
            <div class="entry">
            
                <?php the_content(); ?>
                <?php link_pages('<p><strong>Pages:</strong>', '</p>', 'number'); ?>
                	<p class="postmetadata">
                    分类： <?php the_category(', ') ?> by： <a href="http://weibo.com/u/1767420541?s=6uyXnP" target="_blank"><img border="0" src="http://service.t.sina.com.cn/widget/qmd/1767420541/8a47f048/1.png"/></a>
                   </p>
                
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