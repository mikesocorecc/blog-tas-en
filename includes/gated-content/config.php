<?php

// Array of the files with an unique ID
$files = array(
    // Guia Persona Fisica
    'UID1' => array(
        'content_type' => 'application/pdf', 
        'suggested_name' => 'Programa de Residencia para Inversores y Emprendedores.pdf', 
        'file_path' => 'files/prie.pdf',
        'type' => 'local_file',
        'lang' => 'es',
        'session_key' => 'prie',
        'doctype' => 'guia-prie'
    ),
    'UID2' => array(
        'content_type' => 'application/pdf', 
        'suggested_name' => 'LOS TIPOS DE EMPRESA EN ESPAÑA.pdf', 
        'file_path' => 'files/tipo_empresa_espania.pdf',
        'type' => 'local_file',
        'lang' => 'es',
        'session_key' => 'tee',
        'doctype' => 'guia-tee'
    ),
    'UID3' => array(
        'content_type' => 'application/pdf', 
        'suggested_name' => 'Guía del emprendedor en España - Cómo crear una empresa en España.pdf', 
        'file_path' => 'files/guia-cee.pdf',
        'type' => 'local_file',
        'lang' => 'es',
        'session_key' => 'cee',
        'doctype' => 'guia-cee'
    )
); 

// $templateDirectory = get_template_directory_uri().'/views/libs/download.php';

$templateDirectory = get_stylesheet_directory_uri(); 
 
// Base URL of the application
define('BASE_URL', $templateDirectory.'/includes/gated-content'.'/');
 
// Path of the download.php file
define('DOWNLOAD_PATH', BASE_URL.'download.php');

// Path of the token directory to store keys
define('TOKEN_DIR', 'tokens');

// Authentication password to generate download links
define('OAUTH_PASSWORD','NOPROG');

// Expiration time of the link (examples: +1 year, +1 month, +5 days, +10 hours)
define('EXPIRATION_TIME', '+4 minutes');