$(document).ready(function () {
    $('#table_guias').DataTable({
       
    });
    
      $("#remove").on('click',function () {
        var id = $(this).val();
        alert(id);
        return false;
        
      

        if (confirm('Está seguro de eliminar esta guía?')) {

            $.ajax({
                url: 'https://jagesint.com/guiadeusorapido/Welcome/DeleteGuia/' + id,
                type: 'POST',
                error: function () {
                    alert('Something is wrong');
                },

                success: function (data) {
                    $("#" + id).remove();
                    alert("Guía Eliminada con éxito");

                }

            });

        }

    });
});




