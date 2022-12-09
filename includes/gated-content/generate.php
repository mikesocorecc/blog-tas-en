<?php
function getLinkDownload($oauthPass, $doctype)
{
    // Incluir el archivo de configuración 
    require_once 'config.php';
    // Verifique la contraseña de OAuth
    if ($oauthPass != OAUTH_PASSWORD) {
        // Devolver 404 Error, si no es una ruta correcta
        header("HTTP/1.0 404 Not Found");
        exit;
    } else {
        // Si existen los archivos 
        if (is_array($files)) {
            foreach ($files as $fid => $file) {
                if ($file['doctype'] == $doctype) {
                    // Codificar la ID del archivo
                    $fid = base64_encode($fid); 
                    // Generar un enlace de descarga
                    $download_link = DOWNLOAD_PATH . "?fid={$fid}";
                    if (!empty($download_link)) {
                        return $download_link;
                    } else {
                        return false;
                    }
                } else {
                    continue;
                }
            }
        }
    }
}