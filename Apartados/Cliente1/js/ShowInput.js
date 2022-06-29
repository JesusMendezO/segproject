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
      let tipins = $('#TipIns').val();
      let areacont = $('#AreaCont').val();
      let listtservicio = $('#listaservicio option:selected').val();
      let listtserviciov = $('#listaservicioV option:selected').val();
      let datestart = $('#DateStart').val();
      let tipper = $('#TipPer').val();
      let cantemp = $('#CantEmp').val();
      
        count++;
        var parentDiv = document.getElementById('installations_fields'); // point to the parent Div
        var childDiv = document.createElement("div"); // create child div on the fly
        childDiv.setAttribute("class", "form-group removeclass"+count); // add a dynamic class to the child div
        childDiv.innerHTML = `<br>
        <div class="form-row">
            <div class="col rounded-lg">
                <select disabled class="form-control" id="TipIns" name="TipIns[]" style="margin-left: -15px">
                    <option value="${tipins}">${tipins}</option>
                </select>
            </div>
            <div class="col rounded-lg">
                <select disabled class="form-control" id="AreaCont" name="AreaCont[]" style="margin-left: -10px">
                    <option value="${areacont}">${areacont}</option>
                </select> 
            </div>
            <div class="col rounded-lg">
                <select disabled id="listaservicio" class="form-control" id="listservicio" name="listservicio[]" style="margin-left: -5px">
                    <option value="${listtservicio}">${listtservicio}</option>
                </select>
            </div>
            <div class="col rounded-lg">
                <select disabled id="listaservicioV" class="form-control" id="listservicioV" name="listservicioV[]" style="margin-left: 2px">
                    <option value="${listtserviciov}">${listtserviciov}</option>
                </select>
            </div>
            <div class="col rounded-lg">
                <input disabled type="date" class="form-control" id="DateStart" name="DateStart[]" value="${datestart}" style="margin-left: 10px; width:95%;">
            </div>
            <div class="col rounded-lg">
                <select disabled class="form-control" id="TipPer" name="TipPer[]" style="margin-left: 5px">
                    <option value="${tipper}">${tipper}</option>
                </select>
            </div>
            <div class="col rounded-lg">
                <input disabled type="number" class="form-control" id="CantEmp" name="CantEmp[]" value="${cantemp}" placeholder="1,2,3..." style="margin-left: 5px">
            </div>
            <div class="col rounded-lg">
              <button type="button" class="btn btn-danger btn-xs" onclick="remove_installations_fields(${count});" style="position: absolute; right: 35px;"> <i class="fas fa-backspace"></i> </button>
            </div>
        </div>
        `
        parentDiv.appendChild(childDiv); //  append or inject dynamic fields to the parent div
        var StoredDiv = $('.removeclass'+count).html();
        manage_append(count,StoredDiv,'add'); //  store the dynamic fields to local storage
        $('#TipIns').val(0);  // then reset all fields
        $('#AreaCont').val(0);
        $('#listaservicio').val(0);
        $('#listaservicioV').val(0);
        $('#DateStart').val('');
        $('#TipPer').val(0);
        $('#CantEmp').val('');        
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


