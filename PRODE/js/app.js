$(document).ready(function(){
  $('#agregarEstadio').click(function(){
    cargarPagina();
  })
  $('#mostrarEquipos').click(function(){
    mostrarEquipo();
  })
  $('#agregarPartido').click(function(){
   	agregarPartido();
  })

function cargarPagina() {
    $.ajax({
          "url": "http://localhost/PRODE/mostrarEquipos",
          "method": "GET",
          "dataType": "HTML",
          "success": function (data) {
            $('#main').html(data);
          },
          "error": function (){
            alert("error");
          }
    });
  }
  function mostrarEquipo() {
    $.ajax({
          "url": "http://localhost/PRODE/mostrarEquipos",
          "method": "GET",
          "dataType": "HTML",
          "success": function (data) {
            console.log(data);
            $('#main').html(data);
          },
          "error": function (){
            alert("error");
          }
    });
  }
  function agregarPartido() {
    $.ajax({
      		"url": "http://localhost/PRODE/agregarPartido",
      		"method": "GET",
      		"dataType": "HTML",
      		"success": function (data) {
            console.log(data);
				    $('#agregar').html(data);
      		},
      		"error": function (){
        		alert("error");
      		}
    });
  }
});
