<?php
//Trigger this file on Plugin uninstall

if( ! defined('WP_UNINSTALL_PLUGIN')) {
    die;
}

// Clear DB table data

// $books = get_posts(['post_type' => 'book', 'numberposts' => -1]);

// foreach($books as $book){
//     wp_delete_post($book->ID, true);
// }

//Access the DB via SQL

global $wpdb;
$wpdb->query("DELETE  FROM wp_posts WHERE post_type = 'book'");
$wpdb->query("DELETE  FROM wp_postmeta WHERE post_ID NOT IN (SELECT id FROM wp_post)"); 