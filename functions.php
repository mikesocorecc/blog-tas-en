<?php
include_once('includes/gated-content/generate.php');


/*
|--------------------------------------------------------------------------
| Register Get the image
|--------------------------------------------------------------------------
|
*/
include_once('includes/get-the-image.php');

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our theme. We will simply require it into the script here so that we
| don't have to worry about manually loading any of our classes later on.
|
*/

if (! file_exists($composer = __DIR__.'/vendor/autoload.php')) {
    wp_die(__('Error locating autoloader. Please run <code>composer install</code>.', 'sage'));
}

require $composer;

/*
|--------------------------------------------------------------------------
| Register The Bootloader
|--------------------------------------------------------------------------
|
| The first thing we will do is schedule a new Acorn application container
| to boot when WordPress is finished loading the theme. The application
| serves as the "glue" for all the components of Laravel and is
| the IoC container for the system binding all of the various parts.
|
*/

try {
    \Roots\bootloader();
} catch (Throwable $e) {
    wp_die(
        __('You need to install Acorn to use this theme.', 'sage'),
        '',
        [
            'link_url' => 'https://docs.roots.io/acorn/2.x/installation/',
            'link_text' => __('Acorn Docs: Installation', 'sage'),
        ]
    );
}

/*
|--------------------------------------------------------------------------
| Register Sage Theme Files
|--------------------------------------------------------------------------
|
| Out of the box, Sage ships with categorically named theme files
| containing common functionality and setup to be bootstrapped with your
| theme. Simply add (or remove) files from the array below to change what
| is registered alongside Sage.
|
*/

collect(['setup', 'filters'])
    ->each(function ($file) {
        if (! locate_template($file = "app/{$file}.php", true, true)) {
            wp_die(
                /* translators: %s is replaced with the relative file path */
                sprintf(__('Error locating <code>%s</code> for inclusion.', 'sage'), $file)
            );
        }
    });

/*
|--------------------------------------------------------------------------
| Enable Sage Theme Support
|--------------------------------------------------------------------------
|
| Once our theme files are registered and available for use, we are almost
| ready to boot our application. But first, we need to signal to Acorn
| that we will need to initialize the necessary service providers built in
| for Sage when booting.
|
*/

add_theme_support('sage');






/**
 * filtrar_guias
 *
 * @param  string $busqueda
 * @return void
 */
function filtrar_recursos($busqueda)
{

    $args = array(
        'post_type' =>  'recursos',
        'order' => 'rand',
        'tax_query' => array(
            array(
                'taxonomy' => 'categoria',
                'field' => 'slug',
                'terms' => $busqueda
            )
        )
    );
    $productos = new WP_Query($args);
    while ($productos->have_posts()) : $productos->the_post(); ?> 
        <div class="guia_item bg-gris-100 rounded-lg <?= $busqueda ?>" > 
        <?php echo get_the_post_thumbnail( get_the_ID(), 'recursos', array( 'class' => 'w-full rounded-lg ' ) ) ?>
            <div class="md:px-8 pb-8 pt-4">
                <h5 class="text-dark text-xl"> 
                     <?php echo get_the_term_list($productos->ID, 'categoria'); ?> 
                </h5>
                <h4 class="font-bold text-dark text-2xl leading-6 mb-4"><a href="<?php the_permalink(); ?>"> <?php the_title(); ?> </a></h4>
                <p class="text-xl"><?= get_post_field('post_excerpt', get_the_ID()); ?></p>  
            </div>
        </div>  
<?php endwhile;
    wp_reset_postdata();
}

// NEWSLETTER
add_action('wp_ajax_insertar_suscriptor', 'insertar_suscriptor');
add_action('wp_ajax_nopriv_insertar_suscriptor', 'insertar_suscriptor');
/**
 * Ajax newsletter
 * 
 * @url http://www.thenewsletterplugin.com/forums/topic/ajax-subscription
 */
function insertar_suscriptor()
{
    check_ajax_referer('noncy_nonce', 'nonce');
    session_start(); 
    if (!empty($_POST['tipo_recurso']) && !empty($_POST['correo'])){ 
        global $wpdb;
        $table_name = $wpdb->prefix . 'cte';  
        $existeCorreo = $wpdb->get_row($wpdb->prepare("SELECT * FROM $table_name WHERE email = %s ", trim($_POST['correo'])), ARRAY_A);
      
        if(is_null($existeCorreo)){
            $result = $wpdb->insert($table_name, [
                'name' => $_POST['nombre'],
                'email' => $_POST['correo'],
                'web' => $_POST['url'],
                'company' => $_POST['empresa'],
                'address' => (isset($_POST['suscripcion']) ? 'suscrito' : ''),
                'notes' => $_POST['tipo_recurso'],
                'job' => $_POST['empleados'],
            ]);
        }else{
            $result = $wpdb->update($table_name, [
                'name' => $_POST['nombre'],
                'email' => $_POST['correo'],
                'web' => $_POST['url'],
                'company' => $_POST['empresa'],
                'address' => (isset($_POST['suscripcion']) ? 'suscrito' : ''),
                'notes' => $_POST['tipo_recurso'],
                'job' => $_POST['empleados'],
            ], array( 'id' => $existeCorreo['id'] )); 
        }
        $_SESSION['tipo_recurso'] = $_POST['tipo_recurso']; 
        $_SESSION['acpwd_session'] = 1;  
        $_SESSION['blog_lang'] = 'en_US';
        $output = array(
            'status'  => true, 
            'type'    => 'success',
            'title'    => '¡Exito!',
            'msg'       => 'En breve obtendras la guia!',
        ); 
    }else{
        $_SESSION['acpwd_session'] = 0; 
        $output = array(
            'status'  => false, 
            'type'    => 'success',
            'title'    => 'Error',
            'msg'       => '¡Vaya! Algo salió mal!',
        ); 
    } 
    wp_send_json($output);
}

add_action('template_redirect', function (){ 
    session_start();
    if(is_page('thank-you-for-getting-the-guide-prie')){
        if ( (!isset($_SESSION['acpwd_session']) || $_SESSION['acpwd_session'] == 0 ) || $_SESSION['tipo_recurso'] != 'prie' || $_SESSION['blog_lang'] != 'en_US'  ) { 
            wp_redirect( home_url() );
            die;
        }
    }
    if(is_page('thanks-for-getting-the-guide-tee')){
        if ( (!isset($_SESSION['acpwd_session']) || $_SESSION['acpwd_session'] == 0 ) || $_SESSION['tipo_recurso'] != 'tee' || $_SESSION['blog_lang'] != 'en_US'  ) { 
            wp_redirect( home_url() );
            die;
        }
    }
    if(is_page('thanks-for-getting-the-guide-cee')){
        if ( (!isset($_SESSION['acpwd_session']) || $_SESSION['acpwd_session'] == 0 ) || $_SESSION['tipo_recurso'] != 'cee' || $_SESSION['blog_lang'] != 'en_US'  ) { 
            wp_redirect( home_url() );
            die;
        }
    }
});

// Añadir Shortcode
function tagdownload_shortcode_function($atts)
{
    $defautls = array('doctype' => 0, 'bg' => 1);
    $atts = shortcode_atts($defautls, $atts);
    $doctype = $atts['doctype'];
    $bg = $atts['bg'];
    $linkDescarga = getLinkDownload('NOPROG', $doctype);
    return ' <a href="' . $linkDescarga . '"   class=" btn ' . $bg . ' "   >' . __("HERE", "tas") . '</a>';
}
add_shortcode('tagdownload', 'tagdownload_shortcode_function');


