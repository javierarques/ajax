<?php 

phpinfo();
require_once( '../../../wp-load.php' );

extract( $_REQUEST );

$query = new WP_Query( array( 'edit_posts_per_page' => $posts_per_page) );

if ( $query->have_posts() ) {
	while ($query->have_posts()) {
		the_post();
	}
}


 ?>