$(document).ready(function(){

    var serv = $('#contrato')

    $('#cliente').change(function(){
       
        var cliente = $(this).val()

        $.ajax({
            data: {cliente:cliente},
            dataType: 'html',
            type: 'POST',
            url: 'get_contrato.php',

            }).done(function(data){
                serv.html(data)
            })
    })

})