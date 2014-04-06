<?php

function dump( $var ) {
    echo '<pre>';
    print_r( $var );
    echo '</pre>';
}


/**
 * Executing AJAX process.
 *
 * @since 2.1.0
 */
define( 'DOING_AJAX', true );
define( 'WP_ADMIN', true );

/** Load WordPress Bootstrap */
require_once( '../../../wp-load.php' );

/**
 *  Wordpress query
 */

$posts_per_page = empty( $_REQUEST['posts_per_page']) ? 5: $_REQUEST['posts_per_page'];
$posts = get_posts( array ( 'posts_per_page' => $posts_per_page) );



$response_type = empty( $_REQUEST['response_type']) ? 'json': $_REQUEST['response_type'];


if ( $response_type == 'html') {
/*************************************************************
 *  HTML RESPONSE
 *  type == 'html'
 *************************************************************/
    
    header('Content-Type: text/html; charset=utf-8');


    foreach ( $posts as $post) {
        setup_postdata($post);
        include('post.php');
    }
    
    die();

} else if ( $response_type == 'json') {
/*************************************************************
 *  JSON RESPONSE
 *  type == 'json'
 *************************************************************/

    header('Content-Type: application/json; charset=utf-8');

    $response = array();

    foreach ( $posts as $post) {
        $row = array(
            'ID' => $post->ID,
            'post_excerpt' => $post->post_excerpt,
            'post_title' => $post->post_title,
            'permalink' => get_permalink(),
        );

        if ( $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' )) {
            $row['post_thumbnail'] = $image[0];
        }

        array_push($response, $row);
    }  

    echo json_encode( $response );

    die();
}