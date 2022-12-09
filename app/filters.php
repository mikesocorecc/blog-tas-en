<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a class="" href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

 
add_filter('the_content_more_link', function () {
    return '<div class="text-center "> <a class="bg-info  rounded-sm inline-block    pl-16 pr-4 py-2 mt-4 text-white font-semibold " href="' . get_permalink() . '"> Read more <i class="fa-solid fa-arrow-right ml-5"></i> </a> </div>';
}); 

add_action("wpdiscuz_comment_form_before", function () {
   
});
 
add_action("comment_main_form_after_head", function () {
    ?>
    <p class="text-left   px-4 lg:px-0 pb-2 lg:pb-0"><?= __('Your email address will not be published','tas') ?> .</p>
    <p class="text-left   px-4 lg:px-0"><?= __('Required fields are marked with','tas') ?> *</p>
    <?php 
});


 
 