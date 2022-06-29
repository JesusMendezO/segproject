$(document).ready(function(){
    $("#cliente").change(function(){
        
        $("#cliente").each(function(){
            id_cliente=$(this).val();
          
            localStorage.setItem('id_cliente',id_cliente)
            $.post("get_cliente.php",{id_cliente: id_cliente
            }, function(data){
               var datos = JSON.parse(data)
              document.getElementById("RUT").value =datos.Rut
              document.getElementById("address").value =datos.Direccion
              document.getElementById("Email").value =datos.Email
              document.getElementById("contacto").value =datos.Representante
              
                // console.log(datos)
                // alert(datos)
            });
            
        });
        
    });
        
    });