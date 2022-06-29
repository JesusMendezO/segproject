//BARRA DE NAVEGACIÓN: enlaces y datos.
//guardar los datos en arrays:
var titulos=new Array();
var enlaces=new Array();
var areas = new Array();
//Datos de los submenús
titulos[0]=new Array(
          "Subsección uno uno"
         );
enlaces[0]=new Array("#");
titulos[1]=new Array(
    "Subsección uno dos"
   );
enlaces[1]=new Array("#");
titulos[2]=new Array(
    "Subsección uno tres"
   );
enlaces[2]=new Array("#");

areas[0]=new Array(
    "piscina",
    "estacionamiento"
   );
   areas[1]=new Array(
    "piscina"
   );
   areas[2]=new Array(
    "estacionamiento"
   );
//arrays para guardar elementos de la lista y submenús:
var menu=new Array()
var submenu=new Array()

window.onload = function() {
//BARRA DE NAVEGACIÓN: Crear desplegables:
var dato= document.getElementsByClassName("item3");
let html2 = Array.from(dato).map(item2 => {
  console.log(item2);
  //let descrip1 = $(item2).find("#cantidad").val()
   let instal = $(item2).find("#TipIns").val()
  // console.log(descrip,cantp);
  //console.log(descrip1);
   return { instal}
  //Literal strings `` para retornar html
  
});

for (i=0;i<html2.length;i++) {
     //localizar elementos principales
     menu[i]=document.getElementById("seccion");
     //crear elemento menu desplegable
     menu[i].innerHTML+="<div id='subseccion"+i+"'><div class='accordion'><div class='card-header' id='heading"+i+"'><button class='btn  accordion-header' data-toggle='collapse' data-target='#collapse"+i+"' aria-expanded='true' aria-controls='collapse"+i+"'>"+html2[i]['instal']+"</button><div id='collapse"+i+"' class='collapse show' aria-labelledby='heading"+i+"' data-parent='#accordion'><div id='subseccions"+i+"'></div></div></div></div></div>"
     //localizar elemento menu desplegable
      submenu[i]=document.getElementById('subseccions'+i);
    //  //escribir menu desplegable
       for (j=0;j<areas[i].length;j++) {
           submenu[i].innerHTML += "<p><a href='"+enlaces[i][j]+"'>"+areas[i][j]+"</a> <Button style='margin-left: 5%;' type='button' class='btn btn-primary' data-toggle='modal' data-target='#FichaProductos'>Productos</Button></p>";
          }
    //  //estilo de los submenús
    //  menu[i].style.position="relative";
    //  submenu[i].style.position="absolute";
    //  submenu[i].style.top="100%";
    //  submenu[i].style.left="0px";
    //  submenu[i].style.backgroundColor="#41338b";
    //  submenu[i].style.font="normal 0.8em arial";
    //  submenu[i].style.padding="0.2em 0.5em";
    //  submenu[i].style.display="none"
      }	
//eventos para ver - ocultar menu
//  for (i=0;i<titulos.length;i++) {
//      menu[i].onmouseover = ver;
//      menu[i].onmouseout = ocultar;
//      } 
//  }
//  //función para ver los menús desplegables.
//  function ver() {
//          muestra=this.getElementsByTagName("div")[0];
//          muestra.style.display="block"
//           }
//  //funcion para ocultar los menús desplegables.
// function ocultar() {
//           oculta=this.getElementsByTagName("div")[0];
//           oculta.style.display="none"


//<div id='subseccion"+i+"'><div class='accordion'><div class='card-header' id='heading"+i+"'><button class='btn  accordion-header' data-toggle='collapse' data-target='#collapse"+i+"' aria-expanded='false' aria-controls='collapse"+i+"'>"+titulos[i]+"</button><div id='collapse"+i+"' class='collapse show' aria-labelledby='heading"+i+"' data-parent='#accordion'><div>Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf </div></div></div></div></div>
          }