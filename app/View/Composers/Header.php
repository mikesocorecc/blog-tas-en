<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Header extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.header',
        'sections.header-secondary',
        'sections.header-infografias',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'class' => 'hero',
            'menus' => $this->menus(),
        ];
    }
     /**
     * Los datos se pasarán a la vista antes de renderizar, pero después de fusionarse.
     *
     * @return array
     */
    public function override()
    {

        return [
            'bgHeader' => '', 
        ];
    }

    public function menus()
    {
        $menu_slug_to_retrieve = 'primary_navigation'; // This can be main, primary, what ever...
        $locations             = get_nav_menu_locations();
        $menu                  = wp_get_nav_menu_object( $locations[ $menu_slug_to_retrieve ] );
        $menu_items            = wp_get_nav_menu_items( $menu->term_id );
        $array_menu       = array(); // Prepare the array to convert to json
     
        // Loop it
        if ( $menu_items ) {
            $contador = 0;
        
            if(get_post_type() == 'recursos'){
                $array_menu[$contador]['menu'] = 'blog';
                $array_menu[$contador]['url'] = home_url();
                $contador++;
            }
           foreach ( $menu_items as $item ) {  
                if(get_post_type() == 'recursos' && $item->post_title == 'Recursos') continue;
                $array_menu[$contador]['menu'] = $item->post_title;
                $array_menu[$contador]['url'] = $item->url;
                $contador++;
           } 
        } 
        return $array_menu;
    }
    
    public function backgrounHeader()
    {
      
        if ($this->view->name() == 'single-recursos') {
            return 'secondary';
        }
        return 'secondary';
    }

}
