<?php
// Incluir el archivo de configuración
require_once('../../../../../wp-config.php');
require_once 'config.php'; 
// Obtenga la ID y la clave del archivo de la URL
$fid = base64_decode(trim($_GET['fid'])); 
session_start();
if(!empty($files[$fid])){
    $doctype = $files[$fid]['doctype'];
    $session_key = $files[$fid]['session_key'];
}else{
    $session_key = '';
    $doctype = 'guia-prie';
}
    // Si el archivo se encuentra en la matriz del archivo
    if(!empty($files[$fid]) && $_SESSION['tipo_recurso'] == $session_key ){
        //Obtenga los datos del archivo
        $contentType = $files[$fid]['content_type'];
        $fileName = $files[$fid]['suggested_name'];
        $filePath = $files[$fid]['file_path'];
        // Obligar al navegador a descargar el archivo
        header("Content-Description: File Transfer");
        header("Content-type: ".$contentType." ");
        header("Content-Disposition: attachment; filename=".$fileName."  ");
        header("Content-Length: " . filesize($filePath));
        header('Pragma: public');
        header("Expires: 0");
        readfile($filePath);
        exit;
    }else{
        wp_redirect( home_url() );
        die;
    }
?>