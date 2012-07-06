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