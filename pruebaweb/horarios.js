
var paraGuardar = [];



function genera_tabla(){

	var table = document.getElementsByTagName("table")[0];
	var dia = document.getElementById('dia').value;
	var desde = document.getElementById('desde').value;
	var hasta = document.getElementById('hasta').value;
	var horario = [dia,desde,hasta];
	console.log(horario);
  paraGuardar.push(horario);
  console.log(paraGuardar);	
	for (var i = 0; i < 1; i++) {
		var hilera = document.createElement("tr");
		hilera.setAttribute("name","fila");
		for (var j = 0; j < horario.length; j++) {
			var celda = document.createElement("td");
      var textoCelda = document.createTextNode(horario[j]+" ");
      celda.appendChild(textoCelda);
      hilera.appendChild(celda);
    }
    var btn = document.createElement("button");
      btn.setAttribute("type","button");
      btn.setAttribute("class","btn btn-danger");
			
      // btn.addEventListener('click',borrar,false);
      var t = document.createTextNode("borrar");
      btn.appendChild(t);
    var celdaborrar = document.createElement("td");
    celdaborrar.appendChild(btn);
    hilera.appendChild(celdaborrar);
    table.appendChild(hilera);
  }

}


function enviar(){

	sendJSON = JSON.stringify(paraGuardar);
	document.getElementById('json').value = sendJSON;
	
}

