<div class="lista-producto float-clear" style="clear:both;">
 <ul class="list-group item3">
   <li class="list-group-item">
<div class="float-left"><input type="checkbox" name="item_index[]" style="margin-left: -35px;" /></div>
<!-- <div class="float-left"><input class="form-control" type="text" name="pro_nombre[]"/></div> -->
<div class="float-left">



                            <select class="form-control border border-primary" id="TipIns" name="TipIns[]" style="width:150px; margin-left: -15px; ">
                                                                          

                            <option value="0">Seleccione un Tipo de Instalación</option>
                                                                            <?php
                                                                            $conn = mysqli_connect("localhost","root","", "segprojectcambios");
                                                                            $rut=5464654;
                                                                            $sql = ("SELECT * FROM instalacion WHERE id_cliente=$rut");
                                                                            $query = $conn->query($sql);
                                                                            while ($valores = mysqli_fetch_array($query)) {
                                                                                echo '<option value="' . $valores['id_instalacion'] . '">' . $valores['nombre'] . '</option>';
                                                                                //por defecto se creará como libre
                                                                            }
                                                                            ?>






                                                                        </select>




                            </div>




                            
                            <div class="float-left">
<select class="form-control border border-primary" name="AreaCont[]" id="AreaCont" style="width:120px; margin-left: 10px;">
<option value="">Seleccione un Area</option>
                              <?php
                              $conn = mysqli_connect("localhost","root","", "segprojectcambios");
                              $sql = ("SELECT * FROM tipoarea");
                              $query = $conn->query($sql);
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores['id_area'] . '">' . $valores['NombreArea'] . '</option>';
                              }
                              ?>
                            </select>
                            </div>
                            <div class="float-left">
<select class="form-control border border-primary" name="listservicio[]" id="serv" style="width:120px; margin-left: 15px;">
<option value="">Seleccione un Servicio</option>
                              <?php
                              $conn = mysqli_connect("localhost","root","", "segprojectcambios");
                              $sql = ("SELECT * FROM listaservicio");
                              $query = $conn->query($sql);
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores['ID_lista'] . '">' . $valores['Nombre'] . '</option>';
                              }
                              ?>
                            </select>
                            </div>
                            <div class="float-left">
<select class="form-control border border-primary" name="listservicioV[]" id="tipo" style="width:120px; margin-left: 25px;">
                            
                            </select>
                            </div>
<div class="float-left"><input class="form-control border border-primary" type="date" name="pro_precio[]" id="date" style="width:135px; margin-left: 30px;" /></div>
<div class="float-left">
<select class="form-control border border-primary" name="TipPer[]" id="periodo" style="width:120px; margin-left: 25px;">
                              <?php
                              $conn = mysqli_connect("localhost","root","", "segprojectcambios");
                              $sql = ("SELECT * FROM tipo_periodos");
                              $query = $conn->query($sql);
                              while ($valores = mysqli_fetch_array($query)) {
                                echo '<option value="' . $valores['id_periodo'] . '">' . $valores['descripcion'] . '</option>';
                              }
                              ?>
                            </select>
                            </div>
<!-- <div class="float-left"><input class="form-control" type="text" name="pro_precio[]" style="width:110px;" /></div> -->
<div class="float-left"><input class="form-control border border-primary" type="text" name="pro_cantidad[]" id="cantidad" style="width:100px; margin-left: 30px; margin-right: -20px;"/></div>




	</li>
 </ul> 



 
</div>

<!--Incluir la librería jQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
 
<!--Llamada al evento Change del selector -->
<script language="javascript">
$(document).ready(function(){
  $('div.lista-producto').each(function(index, item){
    

    // var id_cliente=localStorage.getItem('id_cliente');
          
            
    //       $.post("get_instalacioneslist.php",{id_cliente: id_cliente
    //       }, function(data){
           
    //         $("#TipIns").html(data);
            
               
               
    //       });


     $("#serv").on('change', function () {
        $("#serv option:selected").each(function () {
          elegido=$(this).val();
          //alert(elegido)
            $.post("get_servicios.php", { elegido: elegido }, function(data){
                $("#tipo").html(data);
            });         
        });
   });
});
})


</script>
