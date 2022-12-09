import {domReady} from '@roots/sage/client';
// import then needed Font Awesome functionality
import { library, dom } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { far } from '@fortawesome/free-regular-svg-icons'
import { fab } from '@fortawesome/free-brands-svg-icons'

library.add(fas, far, fab);
dom.watch();

/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }
 

  // application code
};

/**
 * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);

jQuery(function ($) {
  $("#filtrar .filtro__lista .filtro__item").on('click', function(){
    const enlace = $(this).val()
  
    if(this.checked){     
        $('#lista-guias .guia_item').not($(`.${enlace}`)).fadeOut()
        $(`.${enlace}`).fadeIn();
        $('.filtro__item').not($(`.${enlace}`)).prop( "checked", false ); 
      }else{    
        $('#lista-guias .guia_item').not($(`.${enlace}`)).fadeIn() 
        $('.filtro__item').not($(`.${enlace}`)).prop( "checked", false ); 
      }
      
      
  })  
  
  
  
})


       

