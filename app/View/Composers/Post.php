<?php

namespace App\View\Composers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;
use Roots\Acorn\View\Composer;

class Post extends Composer
{
    /**
     *Lista de opiniones atendidas por este compositor.
     *
     * @var array
     */
    protected static $views = [
        'partials.page-header',
        'partials.content',
        'partials.content-*',
    ];

    /**
     * Los datos se pasarán a la vista antes de renderizar, pero después de fusionarse.
     *
     * @return array
     */
    public function override()
    {
        
        return [
            'title' => $this->title(), 
            'file' =>  $this->file()
        ];
    }

    public function file(){
        $myFile = public_path("dummy.pdf");
        $headers = ['Content-Type: application/pdf'];
        $newName = 'nicesnippets-pdf-file-'.time().'.pdf';
        
        // Storage::url('file.jpg')
        // return Storage::download('uploads/guias/Programa-de-Residencia-para-Inversores-y-Emprendedores.pdf', $newName, $headers);
        return $_SERVER['REQUEST_URI'];
    }

    /**
     * Returns the post title.
     *
     * @return string
     */
    public function title()
    { 
        if ($this->view->name() !== 'partials.page-header') {
            return get_the_title();
        }

        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }

            return __('Latest Posts', 'tas');
        }

        if (is_archive()) {
            return get_the_archive_title();
        }

        if (is_search()) {
            return sprintf( 
                'Resultados de la búsqueda de <span class="text-info">'.get_search_query().'</span>'
            );
        }
       

        if (is_404()) {
            return __('Not Found', 'tas');
        }

        return get_the_title();
    }
   
}
