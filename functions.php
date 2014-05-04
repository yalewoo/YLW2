<?php
if ( function_exists('register_sidebar') )
    register_sidebar();
 
 
 
function new_excerpt_length($length) {
    return 150;
}
add_filter('excerpt_length', 'new_excerpt_length');
      
      
//支持外链缩略图

function catch_first_image() {global $post, $posts;$first_img = '';

	$output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
	$first_img = $matches [1] [0];
	if(empty($first_img)){
		$first_img = 'http://yalewoo.qiniudn.com/default.png';
		return $first_img;
	}
	else
	{
  	return $first_img;
	}
};
//增强默认编辑器
function Bing_editor_buttons($buttons){
	$buttons[] = 'fontselect';
	$buttons[] = 'fontsizeselect';
	$buttons[] = 'backcolor';
	$buttons[] = 'underline';
	$buttons[] = 'hr';
	$buttons[] = 'sub';
	$buttons[] = 'sup';
	$buttons[] = 'cut';
	$buttons[] = 'copy';
	$buttons[] = 'paste';
	$buttons[] = 'cleanup';
	$buttons[] = 'wp_page';
	$buttons[] = 'newdocument';
	return $buttons;
}
add_filter("mce_buttons_3", "Bing_editor_buttons");
?>
