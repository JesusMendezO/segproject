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
      let descripProd = $('#descrip_prod').val();
      let cantProd = $('#cant_prod').val();
      
        count++;
        var parentDiv = document.getElementById('installations_fields'); // point to the parent Div
        var childDiv = document.createElement("div"); // create child div on the fly
        childDiv.setAttribute("class", "form-group removeclass"+count); // add a dynamic class to the child div
        childDiv.innerHTML = `
        <div class="form-row">                                                       
        <div class="form-group col-md-6">
            <label for="inputTlf">Descripción del Producto</label>
            <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-mobile"></i>
            </div>
            <input disabled type="text" class="form-control" value"${descripProd}" name="descrip_prodp[]" id="descrip_prod" placeholder="911111111">
            </div>

        </div>
        <div class="form-group col-md-5">
            <label for="inputActividad">Cantidad:</label>
            <div class="input-group-prepend">
            <div class="input-group-text"><i class="fas fa-briefcase"></i>
            </div>
            <input disabled type="text" class="form-control" value"${cantProd}" name="cant_prod[]" id="cant_prod" placeholder="Ingrese su actividad">
            </div>
        </div>
        <div class="form-group col-md-1">
            <div class="input-group-prepend">  
            <button type="button" class="btn btn-danger btn-xs" onclick="remove_installations_fields(${count});" style="margin-top: 31px"> <i class="fas fa-backspace"></i> </button>
            </div>
        </div>
        </div>
        `
        parentDiv.appendChild(childDiv); //  append or inject dynamic fields to the parent div
        var StoredDiv = $('.removeclass'+count).html();
        manage_append(count,StoredDiv,'add'); //  store the dynamic fields to local storage
        $('#descrip_prod').val('');  // then reset all fields
        $('#cant_prod').val('');        
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
  var contador = 1;
  $("#Add").click(function() {
    contador = contador + 1;
    var html_code = `<tr id="row""${contador}"> 
        <td style="padding: 5px;">
          <input disabled type="text" class="form-control" name="Area_Ser" id="Area_Ser" value="Hall Acceso">
        </td>
        <td style='padding: 5px;'>
          <input disabled type="text" class="form-control" name="#" id="#" value="Electrónica">
        </td>;
        <td style='padding: 5px;'>
          <input disabled type="text" class="form-control" name="#" id="#" value="CCTV">
        </td>;
        <td style='padding: 5px;' >
          <input type='text' class='form-control' name='eq_nombre[]' placeholder='Nombre del Producto...'>
        </td>;
        <td style='padding: 5px;' >
          <input type='text' class='form-control' name='eq_codigo[]' placeholder='B-1234, DA531-C...'>
        </td>;
        <td style='padding: 5px;' >
          <input type='text' class='form-control' name='eq_descripcion[]' placeholder='Alguna descripción...'>
        </td>;
        <td style='padding: 5px;' >
          <input type='number' class='form-control' name='eq_cantidadreq[]' placeholder='1,2,3...'>
        </td>;
        <td style='padding: 5px;' >
          <button type='button' name='remove' id='remove' data-row="row""${contador}" class='btn btn-danger btn-xs remove'>-</button>
        </td>;
              </tr>`;
    $('#crud_table').append(html_code);
  });
  $(document).on('click', '.remove', function(){
    var delete_row = $(this).data("row");
    $('#' + delete_row).remove();
  });

});


