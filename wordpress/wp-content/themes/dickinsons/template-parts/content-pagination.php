<?php
/**
 * Created by PhpStorm.
 * User: MinhMan.Tran
 * Date: 8/1/2016
 * Time: 9:17 AM
 */

// Previous/next page navigation.
the_posts_pagination( array(
    'prev_text'          => __( 'Previous page', 'dickinsons' ),
    'next_text'          => __( 'Next page', 'dickinsons' ),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'dickinsons' ) . ' </span>',
) );