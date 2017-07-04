function exibirConteudo(id) {


if(window.XMLHttpRequest) {
   req = new XMLHttpRequest();
}
else if(window.ActiveXObject) {
   req = new ActiveXObject("Microsoft.XMLHTTP");
}
var url = "exibe.php?id="+id;

req.open("Get", url, true);

req.onreadystatechange = function() {

	if(req.readyState == 1) {
		document.getElementById('imagem').innerHTML = 'Procurando...';
	}

	if(req.readyState == 4 && req.status == 200) {

	var resposta = req.responseText;
	document.getElementById('imagem').innerHTML = resposta;
	}
}
req.send(null);
}
