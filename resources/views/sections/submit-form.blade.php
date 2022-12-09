<script>
    function formRequest() {
        return {
          formData: {
            redireccion: '<?php echo home_url() ?>',
            redireccion_succes: '<?php echo $page_gracias ?>',
            tipo_recurso: '<?php echo $tipo ?>',
            nombre: '',
            correo: '',
            url: '',
            empresa: '',
            suscripcion: '', 
            empleados: '', 
            action: 'insertar_suscriptor',
            nonce: ajax.ajax_nonce,
          },
          message: '',
          loading: false, 
          buttonLabel: 'I want the guide',
  
          submitData() {  
            this.buttonLabel = 'Processing...'
            this.loading = true;
            this.message = '' 
            const data = new FormData();
            for ( var key in this.formData ) {
              data.append(key, this.formData[key]);
            } 
  
            fetch(ajax.url, {
              method: 'POST',
              credentials: 'same-origin',
              body: data
            }).then((response) => response.json())
            .then((data) => {
              if(data.status){
                this.message = 'Form submitted successfully!'
                window.location.href = `${this.formData.redireccion}/${this.formData.redireccion_succes}`;
                return;
              } 
              this.message = '¡Oh! Something went wrong!'
            })
            .catch((e) => {
                this.message = '¡Oh! Something went wrong!'
              })
              .finally(() => {
                this.loading = false;
                this.buttonLabel = 'I want the guide'
              })
              /* */
          }
        }
      }
</script>