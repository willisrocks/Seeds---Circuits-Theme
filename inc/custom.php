<?php

// Custom functions
// function seeds_logo() {
//     echo '<object data='img/seeds_logo_opt.svg' >
//             <img src='img/seeds_logo_opt.png' />
//         </object>';
// }

// add_action('logo','seeds_logo');

function get_category_id($cat_name){
    $term = get_term_by('name', $cat_name, 'category');
    return $term->term_id;
}

function my_get_display_author_posts() {
    global $authordata, $post;

    $authors_posts = get_posts( array( 'author' => $authordata->ID, 'showposts' => '3', 'post__not_in' => array( $post->ID ) ) );
    if ( count ($authors_posts) > 1 ) {
        $output = '<h3>More by Author</h3>';
    }

    $output .= '<ul class="latest-single">';
    foreach ( $authors_posts as $authors_post ) {
        if ( has_post_thumbnail( $authors_post->ID ) ) {
          $authors_thumb = get_the_post_thumbnail( $authors_post->ID, 'latest-thumb' );
          } else {
          $authors_thumb = '<img src="' . get_template_directory_uri() . '/img/seeds_logo_placeholder.png" />';
          }
        $output .= '<li>';
        // $output .= '<a href="' . get_permalink( $authors_post->ID ) . '">' . get_the_post_thumbnail( $authors_post->ID, 'medium' ) . '</a>';
        $output .= '<a href="' . get_permalink( $authors_post->ID ) . '">' . $authors_thumb . '</a>';
        $output .= '<div class="latest-overlay">';
        $output .= '<span><a href="' . get_permalink( $authors_post->ID ) . '">' . apply_filters( 'the_title', $authors_post->post_title, $authors_post->ID ) . '</a></span>';
        $output .= '</div>';
        $output .= '</li>';
    }
    $output .= '</ul>';

    return $output;
}

add_filter('comment_reply_link', "my_comment_reply_link");
function my_comment_reply_link ($link = null) {
    return is_user_logged_in()
        ? $link
        : str_replace('comment-reply-link', 'comment-reply-link btn btn-inverse .btn-mini', $link);
}