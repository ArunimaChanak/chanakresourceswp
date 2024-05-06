<?php

function pp_pagination_nav() {
    if( is_singular() )
        return;


    global $wp_query;

    /** Stops execution if there's only 1 page */
    if( $wp_query->max_num_pages <= 1 )
        return;


    $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
    $max = intval( $wp_query->max_num_pages );

    /** Adds current page to the array */
    if ( $paged >= 1 )
        $links[] = $paged;

    /** Add the pages around the current page to the array */
    if ( $paged >= 6 ) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }

    if ( ( $paged + 2 ) <= $max ) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }

    echo '<nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center">' . "\n";


    /** Previous Post Link Function */
    if ( get_previous_posts_link() ){
        echo( '<li class="page-item last">
            <a class="page-link border-0 bg-light shadow-none textColor-Primary" href="'.esc_url(get_pagenum_link($paged-1)).'">
                Previous
            </a>
        </li>' . "\n" );
    }


    /** Links to the first page, plus ellipses if necessary */
    if ( ! in_array( 1, $links ) ) {
        $class = 1 == $paged ? ' class="page-item active"' : ' class="page-item"';
        echo( '<li'.$class.'><a class="page-link" href="'.esc_url(get_pagenum_link( 1 )).'">1</a></li>' . "\n" );

        if ( ! in_array( 2, $links ) ){
            echo '<li class="page-item disabled">
                <a class="page-link border-0" href="#">. . .</a>
            </li>' . "\n";
        }
    }


    /** Links to current page, plus 2 pages in either direction if necessary */
    sort( $links );
    foreach ( (array) $links as $link ) {
        $class = $paged == $link ? ' class="page-item active"' : ' class="page-item"';
        echo( '<li'.$class.'><a class="page-link" href="'.esc_url(get_pagenum_link($link)).'">'.$link.'</a></li>' . "\n");
    }


    /** Links to last page, plus ellipses if necessary */
    if ( ! in_array( $max, $links ) ) {
        if ( ! in_array( $max - 1, $links ) ){ 
            echo '<li class="page-item disabled">
                <a class="page-link border-0" href="#">. . .</a>
            </li>' . "\n"; 
        }

        $class = $paged == $max ? ' class="page-item active"' : ' class="page-item"';
        echo( '<li'.$class.'s><a class="page-link"  href="'.esc_url( get_pagenum_link( $max ) ).'">'.$max .'</a></li>' . "\n");
    }
    

    /** Next Post Link function */
    if ( get_next_posts_link() ){
        echo( '<li class="page-item last">
            <a class="page-link border-0 bg-light shadow-none textColor-Primary" href="'.esc_url(get_pagenum_link($paged+1)).'">
                Next
            </a>
        </li>' . "\n" );
    }

    echo '</ul></nav>' . "\n";
}