<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Sidebar extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'sections.sidebar',
    ];

    /**
     * Data to be passed    to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'categories' => $this->categories(),
        ];
    }

    public function categories()
    {
        $categories = get_categories(array('parent' => 0, 'hide_empty' => 0, 'orderby' => 'term_order'));
        $result_data = array();
        if ($categories){
            foreach ($categories as $index => $cat){ 
                if ($cat->term_id == 1) continue;
                $cat_posts = new \WP_Query(array('cat' => $cat->term_id, 'post_type' => 'post'));
                $result_data[$index]= $this->get_category_link($cat, $cat_posts); 
            }
        } 
        return  $result_data;
    }

    public function get_category_link($cat, $posts, $probs = null){
            $currentCat = get_the_terms(get_the_ID(), 'category');  
            if (!is_home()) {
                if(is_array($currentCat) && count($currentCat) > 0){
                    foreach ($currentCat as $key => $value) {
                        if($cat->term_id ==  $value->term_id ){
                            $claseCat = 'text-info font-bold';
                        }else{
                            $claseCat = '';
                        }
                    }
                }else{
                    $claseCat = '';
                }
            } else {
                $claseCat = '';
            }
            $arr_resp['class'] = $claseCat;
            $arr_resp['link'] =  get_category_link($cat->term_id);
            $arr_resp['name'] =  $cat->name;  
            return  $arr_resp;
    }
 
}
