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

$(document).ready(function(){

    $('#CalendarioWeb').fullCalendar({
        header:{
            left:'today,prev,next',
            center:'title',
            right:'month,basicWeek,basicDay, agendaWeek, agendaDay' 
        },
        dayClick: function(date,jsEvent,view){

            $('#btnAgregar').prop("disabled",false)
            $('#btnModificar').prop("disabled",true)
            $('#btnEliminar').prop("disabled",true)

            limpiarFormulario()
            $('#txtFecha').val(date.format())
            $("#ModalEventos").modal()
        },

        events:'http://localhost/software/Apartados/Agenda/Eventos.php',

        
        eventClick:function(calEvent,jsEvent,view){

            $('#btnAgregar').prop("disabled",true)
            $('#btnModificar').prop("disabled",false)
            $('#btnEliminar').prop("disabled",false)

            //h5
            $('#tituloEvento').html(calEvent.title)

            //Mostrar la información del evento en los inputs
            $('#txtDescripcion').val(calEvent.descripcion)
            $('#txtID').val(calEvent.id)
            $('#txttitulo').val(calEvent.title)
            $('#txtColor').val(calEvent.color)


            FechaHora= calEvent.start._i.split(" ")
            $('#txtFecha').val(FechaHora[0])
            $('#txtHora').val(FechaHora[1])

            $("#ModalEventos").modal()

        },
     editable:true,
     eventDrop:function(calEvent){
        $('#txtID').val(calEvent.id)
        $('#txttitulo').val(calEvent.title),
        $('#txtColor').val(calEvent.color),
        $('#txtDescripcion').val(calEvent.descripcion),

        FechaHora=calEvent.start.format().split("T")
        $('#txtFecha').val(FechaHora[0])
        $('#txtHora').val(FechaHora[1])

        RecolectarDatosGUI()
        EnviarInformacion('modificar',NuevoEvento, true)
    }
    })


})
var NuevoEvento

$('#btnAgregar').click(function(){
    RecolectarDatosGUI()
    EnviarInformacion('agregar',NuevoEvento)
    
})  
$('#btnEliminar').click(function(){
    RecolectarDatosGUI()
    EnviarInformacion('eliminar',NuevoEvento)
    
})  
$('#btnModificar').click(function(){
    RecolectarDatosGUI()
    EnviarInformacion('modificar',NuevoEvento)
    
})  

function RecolectarDatosGUI(){
    
    NuevoEvento= {
        id:$('#txtID').val(),
        title:$('#txttitulo').val(),
        start:$('#txtFecha').val()+" "+$('#txtHora').val(),
        color:$('#txtColor').val(),
        descripcion:$('#txtDescripcion').val(),
        textColor:"#FFFFFF",
        end:$('#txtFecha').val()+" "+$('#txtHora').val()
         }
} 

function EnviarInformacion(accion,objEvento,modal){
    $.ajax({
        type:'POST',
        url:'Eventos.php?accion='+ accion,
        data:objEvento,
        success:function(msg){
            if(msg){
                $('#CalendarioWeb').fullCalendar('refetchEvents')
                if(!modal){
                    $("#ModalEventos").modal('toggle')    
                }

            }
        },
        error:function(){
            alert("Hay un error ..")
        }


    }) 
}

$('.clockpicker').clockpicker()

function limpiarFormulario(){
    $('#txtID').val('')
    $('#txttitulo').val('')
    $('#txtColor').val('')
    $('#txtDescripcion').val('')

}