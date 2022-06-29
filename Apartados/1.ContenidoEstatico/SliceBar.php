<aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="index3.html" class="brand-link">
        <img src="../../recursos/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: 0.8" />
        <span class="brand-text font-weight-light">SegProject</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <!-- foto de usuario -->
            <img src="../../recursos/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image" />
          </div>
          <div class="info">
            <a href="#" class="d-block">UserName</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2" id="nav">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item">
              <a href="../MenuAdministrador/administrador.php" class="nav-link">
                <!-- <i class="nav-icon fas fa-tachometer-alt"></i> ícono descriptivo -->
                <p>
                  Administrador
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../MenuAdministrador/administrador.php" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Inicio</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link ">
                    <!-- <i class="nav-icon fas fa-circle"></i> -->
                    <p> &nbsp;&nbsp;
                      Empleados
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">

                    <li class="nav-item">
                      <a href="../Empleado/Cuadrilla.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Cuadrilla</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="../Empleado/Cargo.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Cargos</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../Empleado/Especialidad.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Especialidad</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../Empleado/ConfiguracionEmpleado.php" class="nav-link ">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Empleados</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../Servicios/servicio.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Servicios</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="right fas fa-angle-left"></i>
                    <p> &nbsp;&nbsp;
                      Unidades/Monedas
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../Empleado/UnidadDeMedida.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Unidad de medida</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../Empleado/TipoMoneda.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Monedas</p>
                      </a>
                    </li>

                  </ul>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">
                  <!-- <i class="nav-icon fas fa-chart-pie"></i> -->
                  <p>
                      Adquisiciones
                      <i class="right fas fa-angle-left"></i>
                  </p>
              </a>
              <ul class="nav nav-treeview">
                  <li class="nav-item">
                      <a href="../Adquisiciones/FichaProveedor.php" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Ficha Proveedor</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="../Adquisiciones/RequerimientoBodega.php" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Requerimiento Bodega</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="../Adquisiciones/RequerimientoCompra.php" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Requerimiento Compra</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="../Ventas/CotizacionProveedor.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon"></i>
                        <p>Cotización de Compra</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="../Adquisiciones/OrdenCompra.php" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Orden de Compra</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="../Adquisiciones/Compras.php" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Compras</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Reportes Específico</p>
                      </a>
                  </li>
                  <li class="nav-item">
                      <a href="#" class="nav-link">
                          <i class="far fa-dot-circle nav-icon"></i>
                          <p>Cuadro Mando</p>
                      </a>
                  </li>
              </ul>
            </li> 
            <li class="nav-item">
              <a href="#" class="nav-link">
                <!-- <i class="nav-icon fas fa-tree"></i> -->
                <p>
                  Bodega
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../Bodega/Bodega.php" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Ficha Bodega</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Devolución Bodega</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Solicitud de Bodega</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Otras Salidas</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Otros ingresos</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Reportes Inventario</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Reportes Kardex</p>
                  </a>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link">
                <!-- <i class="nav-icon fas fa-table"></i> -->
                <p>
                  Supervisor
                  <i class="fas fa-angle-left right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="../Agenda/AgendaVisitas.php" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Agenda de Visitas
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../Agenda/Programacion.php" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Programación</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="right fas fa-angle-left"></i>
                    <p> &nbsp;&nbsp;
                      Servicio de Mantención
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../ServicioMantencion/OSM.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>OSM
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../Cliente/presupuesto.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Presupuesto
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../Supervisor/SolicitudMateriales.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Solicitud de Materiales
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Cuadros de Mando
                        </p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Correos Inf. y Alertas
                        </p>
                      </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </li>

            <li class="nav-item">
              <a href="#" class="nav-link ">
                <!-- <i class="nav-icon fas fa-table"></i> -->
                <p>
                  Cliente
                  <i class="fas fa-angle-left right "></i>
                </p>
              </a>             
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="#" class="nav-link ">
                    <!-- <i class="nav-icon fas fa-circle"></i> -->
                    <p> &nbsp;&nbsp;
                      Administrador
                      <i class="right fas fa-angle-left"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="../Cliente/FichaCliente.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Ficha Cliente</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../Cliente/FichaEncargados.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Ficha Encargados(as)</p>
                      </a>
                    </li>
                    <li class="nav-item">
                      <a href="../Cliente/FichaInstalaciones.php" class="nav-link">
                        <i class="far fa-dot-circle nav-icon" style="margin-left: 3%;"></i>
                        <p>Ficha Instalaciones</p>
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item">
                  <a href="../Cliente/Necesidades.php" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Necesidades
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="../Cliente/CotizacionCliente.php" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Cotización de Cliente
                    </p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Reportes especificos
                    </p>
                  </a>
                </li>
                <!-- <li class="nav-header">Servicio Tecnico</li> -->
                <li class="nav-item">
                  <a href="../Cliente/contrato.php" class="nav-link">
                    <i class="far fa-dot-circle nav-icon"></i>
                    <p>Ficha Contrato
                    </p>
                  </a>
                </li>




              </ul>
            </li>


            </li>

          </ul>
          </li>


          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <script>
      var btnContainer = document.getElementById("nav")
      var btns = btnContainer.getElementsByClassName("nav-link")

      for(var i = 0; i<btns.length; i++){
        btns[i].addEventListener('click', function(){
          var current = document.getElementsByClassName("active")
          current[0].className = current[0].className.replace(" active")
          this.className += " active"
        })
      }
    </script>