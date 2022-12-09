jQuery(function ($) {
     $('#solicitud-guia').on('submit', function (e) { 
         // Valido si pasa la validacion el formulario 
        e.preventDefault();
        const datosForm = $(this).serialize(); 
        const fieldUrl = document.getElementsByName("redireccion")
        const redireccion_succes = document.getElementsByName("redireccion_succes")[0].value
        let site_url = $(fieldUrl).data("url"); 
        let redireccion_error = site_url+fieldUrl[0].value;   
        let data = {
            action: 'insertar_suscriptor',
            nonce: ajax.ajax_nonce,
            data: datosForm,
        }
          $.ajax({
            type: 'POST',
            url: ajax.url,
            data: data,
            dataType: 'JSON',
             success: function (response) { 
               if (response.status) {
                window.location.href = `${site_url}/${redireccion_succes}`;
               } else { 
                
               }
             },
         }); 
        /* */
        
     });  
 })