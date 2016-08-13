<?php
/**
 * Created by PhpStorm.
 * User: MinhMan.Tran
 * Date: 8/2/2016
 * Time: 9:51 AM
 */

function dickinsons_recent_post(){
    $recent_posts = wp_get_recent_posts([
        'numberposts' => 5,
        'post_status' => 'publish',
    ]);

    $latest_news = '<h3>' . get_option('our_blog_' . ICL_LANGUAGE_CODE) . '</h3><ul>';

    foreach( $recent_posts as $recent ){
        $latest_news .= '<li><a href="' . get_permalink($recent["ID"]) . '">' .   $recent["post_title"].'</a> </li> ';
    }

    $latest_news .= '</ul>';
    return $latest_news;
}