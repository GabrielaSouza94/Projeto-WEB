function buscarNoticias(valor) {

// Verificando Browser
if(window.XMLHttpRequest) {
   req = new XMLHttpRequest();
}
else if(window.ActiveXObject) {
   req = new ActiveXObject("Microsoft.XMLHTTP");
}
)
var url = "busca.php?valor="+valor;

// Chamada do método open para processar a requisição
req.open("Get", url, true);
req.onreadystatechange = function() { 
	if(req.readyState == 1) {
		document.getElementById('resultado').innerHTML = 'Buscando Imagem...';
	}


	if(req.readyState == 4 && req.status == 200) {

	// Resposta retornada pelo busca.php
	var resposta = req.responseText;

	// Abaixo colocamos a(s) resposta(s) na div resultado
	document.getElementById('resultado').innerHTML = resposta;
	}
}
req.send(null);
}
