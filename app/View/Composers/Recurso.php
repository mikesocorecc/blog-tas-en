<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Recurso extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'archive-recursos',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'taxonomy' => $this->taxonomy()
        ];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function taxonomy()
    {  
        global $post; 
        $term_obj_list = get_the_terms( $post->ID, 'categoria' );
        $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
        return $terms_string;
    }
}
