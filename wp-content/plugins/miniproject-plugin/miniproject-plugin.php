<?php
/**
 * Plugin Name: Mini Project Plugin
 * Description: This is plugin adds a thank you note at the end of the blog post.
 * Version: 1.0
 * Author: Mary-Ann Nneka Irabor
 **/


function thank_you_note ($content) {
    return $content .= '<p>Thanks for reading till the end!</p>';
}

add_action( 'content', 'thank_you_note' );

?>