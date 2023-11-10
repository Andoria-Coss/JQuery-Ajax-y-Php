
var i=0;
var arrContenido=[];
	$().ready(()=>{
		/*Al elemento con capacidad de movimiento se le configura qué hacer cuando 
		  se mueve, en este caso cuando se detiene el movimiento
		*/
		$(".paraMover").draggable({
			stop: function (event, ui){
				/*Cuando el elemento termina el movimiento, es necesario verificar
				  si salió del destino, en cuyo caso debe eliminarse el estilo afectado*/
				  
				//Obtiene x,y de esquina superior izquierda de origen
				let pos_actual = $(this).offset();
				let x = pos_actual.left;
				let y = pos_actual.top;
				//obtiene x,y de esquina superior izquierda de destino
				let pos_destino = $( "#destino" ).offset();
				let x_d = pos_destino.left;
				let y_d = pos_destino.top;
				//Obtiene ancho y alto del espacio de destino
				let ancho_destino = $( "#destino" ).width();
				let alto_destino = $( "#destino" ).height();
				//Verifica si el elemento con movimiento está fuera del espacio destino,
				//el destino ya tenía un estilo especial y no se trata de un cuadro
				if (((x < x_d || x > (x_d+ancho_destino)) ||
					(y < y_d && y > (y_d+alto_destino)) &&
					$( "#destino" ).hasClass("ui-state-highlight")) &&
					!$(this).hasClass("cuadro") &&
					arrContenido.indexOf(this.id)>-1
					){
						/*Busca el elemento en un arreglo donde se encuentran todos
						aquellos elementos que están dentro del espacio destino,
						después lo elimina del arreglo*/ 
						let j=arrContenido.indexOf(this.id);
						arrContenido.splice(j,j+1);
					}
				//Si el arreglo queda vacío, entonces el destino vuelve al estilo original
				if (arrContenido.length===0)
					$( "#destino" ).removeClass("ui-state-highlight");
			}
		});
	
		/*Al destino se le configura qué acepta recibir, el estilo que aplica 
		  cuando detecta que algo se mueve y cuando detecta algo sobre sí mismo,
		  también se indica qué va a hacer cuando suelten el elemento movible.
		  NO sabe cuándo el elemento que se había soltado ya se fue (porque lo sueltan
		  FUERA del destino)
		*/
		$( "#destino" ).droppable({
			accept: ".circulo",
			activeClass: "ui-state-hover",
			hoverClass: "ui-state-active",
			drop: function( event, ui ) {
				//Modifica el estilo
				$( this ).addClass( "ui-state-highlight" );
				//Si el elemento no estaba en el arreglo, entonces lo agrega
				if (arrContenido.indexOf(ui.draggable[0].id)===-1){
					arrContenido.push(ui.draggable[0].id);
				}
			}
		});
	});