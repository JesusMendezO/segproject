$(function(){
  $(".checkme").click(function(event) {
      var x = $(this).is(':checked')
      if (x == true){
          $(this).parents(".checkbox-card").find('.recursos-box').show()
      }
      else{
          $(this).parents(".checkbox-card").find('.recursos-box').hide()
      }
  })
})

$(document).ready(function(){

    var serv = $('#listaservicioV')

    $('#listaservicio').change(function(){
        var listaservicio = $(this).val()

        $.ajax({
            data: {listaservicio:listaservicio},
            dataType: 'html',
            type: 'POST',
            url: 'get_listaservicioV.php',

            }).done(function(data){
                serv.html(data)
            })
    })

})

  var count = 1;
  // add dynamic fields
  function add_installations_fields() {
      var tipins = $('#TipIns').val();
      var nomins = $('#NomIns').val();
      var areacont = $('#AreaCont').val();
      var cantemp = $('#CantEmp').val();
      var listtservicio = $('#listaservicio option:selected').val();
      var listtserviciov = $('#listaservicioV option:selected').val();
      var tipper = $('#TipPer').val();
      var rangoper = $('#RangoPer').val();
      var datestart = $('#DateStart').val();
      var observa = $('#Observa').val();


        count++;
        var parentDiv = document.getElementById('installations_fields'); // point to the parent Div
        var childDiv = document.createElement("div"); // create child div on the fly
        childDiv.setAttribute("class", "form-group removeclass"+count); // add a dynamic class to the child div
        childDiv.innerHTML = '' +
          '<div class="form-row">' +
            '<div class="form-group col-md-3">' +
              '<label for="inputNombreEmpleado">Tipo de Instalación:</label>' +
              '<div class="input-group-prepend">' +
                '<div class="input-group-text"><i class="fab fa-fort-awesome"></i>' +
                '</div>' +
                '<select class="form-control" id="TipIns" name="TipIns[]">' +
                '<option value="'+tipins+'">'+tipins+'</option>' +
              '</select>' +
              '</div>' +
            '</div>' +
            '<div class="form-group col-md-3">' +
              '<label for="inputNombreEmpleado">Nombre de Instalación:</label>' +
              '<div class="input-group-prepend">' +
                '<div class="input-group-text"><i class="fab fa-fort-awesome"></i>' +
                '</div>' +
                '<input type="text" class="form-control" id="NomIns" name="NomIns[]" value="'+nomins+'" placeholder="Nombre de la Instalación...">' +
              '</div>' +
            '</div>' +
            '<div class="form-group col-md-3">' +
              '<label for="inputNombreEmpleado">Area del Contrato:</label>' +
              '<div class="input-group-prepend">' +
                '<div class="input-group-text"><i class="fas fa-chart-area"></i>' +
                '</div>' +
                '<select class="form-control" id="AreaCont" name="AreaCont[]">' +
                  '<option value="'+areacont+'">'+areacont+'</option>' +
                '</select>' +
              '</div>' +
            '</div>' +
            '<div class="form-group col-md-3">' +
              '<label for="inputNombreEmpleado">Cantidad de Empleados:</label>' +
              '<div class="input-group-prepend">' +
                '<div class="input-group-text"><i class="fas fa-people-carry"></i>' +
                '</div>' +
                '<input type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="'+cantemp+'" placeholder="1,2,3...">' +
              '</div>' +
            '</div>' +
            '<div class="form-group col-md-3">' +
              '<label for="inputNombreEmpleado">Tipo de Servicio:</label>' +
              '<div class="input-group-prepend">' +
                '<div class="input-group-text"><i class="fas fa-concierge-bell"></i>' +
                '</div>' +
                '<select id="listaservicio" class="form-control" id="listservicio" name="listservicio[]">' +
                  '<option value="'+listtservicio+'">'+listtservicio+'</option>' +
                '</select>' +
              '</div>' +
            '</div>' +
            '<div class="form-group col-md-3">' +
              '<label for="inputNombreEmpleado">Lista de Servicios:</label>' +
              '<div class="input-group-prepend">' +
                '<div class="input-group-text"><i class="fas fa-concierge-bell"></i>' +
                '</div>' +
                '<select id="listaservicioV" class="form-control" id="listservicioV" name="listservicioV[]" >' +
                  '<option value="'+listtserviciov+'">'+listtserviciov+'</option>' +
                '</select>' +
              '</div>' +
            '</div>' +
            '<div class="form-group col-md-3">' +
              '<label for="inputNombreEmpleado">Tipo de Periodo:</label>' +
              '<div class="input-group-prepend">' +
                '<div class="input-group-text"><i class="fas fa-business-time"></i>' +
                '</div>' +
                '<input type="text" class="form-control" id="TipPer" name="TipPer[]" value="'+tipper+'" placeholder="Trimestral, Mensual...">' +
              '</div>' +
            '</div>' +
            '<div class="form-group col-md-3">' +
              '<label for="inputNombreEmpleado">Rango del Periodo:</label>' +
              '<div class="input-group-prepend">' +
                '<div class="input-group-text"><i class="fas fa-business-time"></i>' +
                '</div>' +
                '<input type="text" class="form-control" id="RangoPer" name="RangoPer[]" value="'+rangoper+'" placeholder="Por mes, Por año...">' +
              '</div>' +
            '</div>' +
            '<div class="form-group col-md-4">' +
              '<label for="inputNombreEmpleado">Fecha Inicial:</label>' +
              '<div class="input-group-prepend">' +
                '<div class="input-group-text"><i class="fas fa-stopwatch"></i>' +
                '</div>' +
                '<input type="text" class="form-control" id="DateStart" name="DateStart[]" value="'+datestart+'">' +
              '</div>' +
            '</div>' +
            '<div class="form-group col-md-8">' +
              '<label for="inputNombreEmpleado">Observaciones:</label>' +
              '<div class="input-group-prepend">' +
                '<div class="input-group-text"><i class="fas fa-comment"></i>' +
                '</div>' +
                '<input type="text" class="form-control" id="Observa" name="Observa[]" value="'+observa+'" placeholder="Alguna otra cosa por aclarar...">' +
                '<div class="input-group-btn">' +
                '<button type="button" class="btn btn-danger btn-xs" onclick="remove_installations_fields('+count+');" style="margin-left: 10px;"> <i class="fas fa-backspace"></i> </button>' +
              '</div></div></div>' +
            '<div class="clear"></div>' +
            '</div>';

        parentDiv.appendChild(childDiv); //  append or inject dynamic fields to the parent div
        var StoredDiv = $('.removeclass'+count).html();
        manage_append(count,StoredDiv,'add'); //  store the dynamic fields to local storage
        $('#TipIns').val(0);  // then reset all fields
        $('#NomIns').val('');
        $('#AreaCont').val(0);
        $('#CantEmp').val('');
      $('#listaservicio').val(0);
      $('#listaservicioV').val(0);
        $('#TipPer').val('');
        $('#RangoPer').val('');
        $('#DateStart').val('');
        $('#Observa').val('');
    };

  // remove dynamic fields
  function remove_installations_fields(rid) {
      manage_append(rid,0,'delete');
      $('.removeclass'+rid).remove();
  };

  // add and remove dynamic fields from local storage
  function manage_append(count,html,action){
      if(action === 'add'){
          localStorage.setItem(count,html);//
      }else{
          localStorage.removeItem(count);
      }

  };

  // restore dynamic fields from local storage
  $(function () {
      for ( var i = 0, len = localStorage.length; i < len; ++i ) {
      $("#installations_fields").append( localStorage.getItem( localStorage.key( i ) ) );
      }
  });

  $(document).ready(function(){
    var count2 = 1;
    $("#Add").click(function() {
      count2 = count2 + 1;
      var html_code = "<tr id='row"+count2+"'>";
      html_code += "<td style='padding: 5px;' ><input type='text' class='form-control' name='eq_nombre[]' value='' placeholder='Nombre del Producto...'></td>";
      html_code += "<td style='padding: 5px;' ><input type='text' class='form-control' name='eq_codigo[]' value='' placeholder='B-1234, DA531-C...'></td>";
      html_code += "<td style='padding: 5px;' ><input type='text' class='form-control' name='eq_descripcion[]' value='' placeholder='Alguna descripción...'></td>";
      html_code += "<td style='padding: 5px;' ><select class='form-control' name='eq_categoria[]'>";
      html_code += "<option value='0'>Selecione un Servicio</option>";
      html_code += "<option value='8'>Electrónica</option>";
      html_code += "<option value='9'>Pipping</option></td>";
      html_code += "<td style='padding: 5px;' ><input type='text' class='form-control' name='eq_area[]' value='' placeholder='Hall Acceso/Departamento...'></td>";
      html_code += "<td style='padding: 5px;' ><input type='number' class='form-control' name='eq_cantidadreq[]' value='' placeholder='1,2,3...'></td>";
      html_code += "<td style='padding: 5px;' ><button type='button' name='remove' id='remove' data-row='row"+count2+"' class='btn btn-danger btn-xs remove'>-</button></td>";
      html_code += "</tr>";
      $('#crud_table').append(html_code);
    });
    $(document).on('click', '.remove', function(){
      var delete_row = $(this).data("row");
      $('#' + delete_row).remove();
    });
  
  });