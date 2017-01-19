function guardar() {
  var nomb = document.getElementById('name').value
  var apell = document.getElementById('lasname').value
  var ed = document.getElementById('age').value
  var carr = document.getElementById('major').value

  $.ajax({ url: '../logicaNegocios/controlador.php',
	data: {nombre: nomb, apellidos: apell, edad: ed, carrera: carr},
	type: 'POST',
	dataType:'html',
	success : function(data) {
    alert(data);
     document.getElementById('name').value = "";
     document.getElementById('lasname').value = "";
    document.getElementById('age').value = "";
     document.getElementById('major').value = "";
  }
  });
}
