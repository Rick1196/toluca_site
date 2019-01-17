<script>

$(document).ready(function() {
          toastr.options = {
            "closeButton": true,
            "debug": false,
            "progressBar": true,
            "positionClass": "toast-top-right",
            "showDuration": "2000",
            "hideDuration": "1000",
            "timeOut": "10000",
            "extendedTimeOut": "2000",
            "showEasing": "swing",
            "hideEasing": "linear",
            //"showMethod": "fadeIn",
            "showMethod": "slideDown",
            //"hideMethod": "fadeOut",
            "hideMethod": "slideUp"
                }
        });

function alertaWarning(titulo,mensaje){
    toastr.warning(mensaje,titulo);
}

function alertaError(titulo,mensaje){
    toastr.error(mensaje,titulo);
}

function alertaSuccess(titulo,mensaje){
     toastr.success(mensaje,titulo);
}

function alertaInfo(titulo,mensaje){
     toastr.info(mensaje,titulo);
}

</script>