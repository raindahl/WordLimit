<?php
/*
Plugin Name: Word Limit Plugin
Description: Limits how many words in posts
Version: 0.1
License: GPL
Author: Andrew Rainey
Author URI: andyrainey@googlemail.com
*/
?>
<?php

function maxWord($title){
global $post;
    $title = $post->post_title;
    if (str_word_count($title) > 10 ) //set this to the maximum number of words
        wp_die( __('Error: Your post title is over the maximum word count of 10 words
		<p>To go back to your post hit back on your browser.</p>
		<p>Once back in your post hit refresh and then you can alter your word count</p>') );
}
add_action('publish_post', 'maxWord');
?>
<?php
function maximum_number_words($content)
{
	global $post;
	$content = $post->post_content;
	if (str_word_count($content) > 400 )  // maximum amount of words 
	wp_die( __('The current post is above the maximum number of words, it must be under 400 words <p>To go back to your post hit back on your browser.</p>
		<p>Once back in your post hit refresh and then you can alter your word count</p>') );
}
add_action('publish_post', 'maximum_number_words');
?>