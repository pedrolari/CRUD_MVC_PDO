var vista = {
	controles: {
		tbodyListaUsuarios: $('#tablaListaUsuarios tbody')
	},
	init:function(){
		vista.eventos();
		vista.peticiones.listarUsuarios();
	},
	eventos:function(){

	},
	callbacks: {
		eventos: {

		},
		peticiones: {
			listarUsuarios: {
				beforeSend: function(){
					var tbody = vista.controles.tbodyListaUsuarios;
					tbody.html(vista.utils.templates.consultando());
				},
				completo: function(respuesta){
					var tbody = vista.controles.tbodyListaUsuarios;
					var datos = __app.parsearRespuesta(respuesta);
					if(datos && datos.length > 0 ){
						tbody.html('');
						for (var i = 0; i < datos.length; i++) {
							var dato = datos[i];
							tbody.append(vista.utils.templates.item(dato));
						}
					} else {
						tbody.html(vista.utils.templates.noHayRegistros());
					}
				}
			}
		}	
	},
	peticiones: {
		listarUsuarios: function(){
			__app.get(RUTAS_API.USUARIOS.LISTAR)
					.beforeSend(vista.callbacks.peticiones.listarUsuarios.beforeSend)
					.success(vista.callbacks.peticiones.listarUsuarios.completo)
					.error(vista.callbacks.peticiones.listarUsuarios.completo)
					.send();
		}
	},
	utils: {
		templates: {
			item: function (obj){
				return '<tr>'+
						'<td>' + obj.nombres + '</td>'+
						'<td>' + obj.apellidos + '</td>'+
						'<td>' + obj.edad + '</td>'+
						'<td>' + obj.correo + '</td>'+
						'<td>' + obj.telefono + '</td>'+
						'<td>' + obj.fecha_registro + '</td>'+
						'<td>'+
						'<a href="javascript:;" class="btn-accion editar"><i class="far fa-edit"></i></a>'+
						' | '+
						'<a href="javascript:;" class="btn-accion eliminar"><i class="far fa-trash-alt"></i></a>'+
						'</td>'+
						'</tr>';
			},
			consultando: function(){
				return '<tr><td colspan="7">Consultando...</td></tr>';
			},
			noHayRegistros: function(){
				return '<tr><td colspan="7">No hay registros</td></tr>';
			}
		}
	},
};

$(vista.init);