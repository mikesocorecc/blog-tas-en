<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Index extends Composer
{
    /**
     * Lista de opiniones atendidas por este compositor.
     *
     * @var array
     */
    protected static $views = [
        'index',
    ];

    /**
     * Los datos que se pasarán a la vista antes de representar.
     *
     * @return array
     */
    public function with()
    {
        return [
            'pagination' => $this->pagination(),
        ];
    }
    public function pagination(){

        if( is_singular() ) return;
        global $wp_query; 
        if( $wp_query->max_num_pages <= 1 ) return;
        if( is_singular() ) 
        return; 
    }
}
