var oneTbody = document.querySelector("#materialoprod tbody"),
	twoTbody = document.querySelector("#seleccion tbody"),
	copy = document.querySelector("#copy"),
	seleccion = [],
	seleccionar = function(event){
		if (event.target.tagName == "TD"){
			var fila = event.target.parentNode;
			
			if (fila.dataset.selected < 1){
				fila.style.backgroundColor = "red";
				fila.style.color = "white";
				fila.dataset.selected = 1;
				seleccion.push(fila);
			}
			else{
				fila.style.backgroundColor = "";
				fila.style.color = "";
				fila.dataset.selected = 0;
				seleccion.splice(seleccion.indexOf(fila), 1);				
			}			
		}
	},
	copiar = function(){
		if (seleccion.length){
			for (var i = 0, l = seleccion.length; i < l; i++){
				var tr = twoTbody.insertRow(),
					celdas = seleccion[i].querySelectorAll("td");

				for (var j = 0, m = celdas.length; j < m; j++){
					var td = tr.insertCell();				
					td.innerHTML = celdas[j].innerHTML;
				}

				seleccion[i].style.backgroundColor = "";
				seleccion[i].style.color = "";
				seleccion[i].dataset.selected = 0;
			}

			seleccion.length = 0;
		}
	};
	
oneTbody.addEventListener("click", seleccionar, false);
copy.addEventListener("click", copiar, false);