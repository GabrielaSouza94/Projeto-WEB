$(function() {

    $('#cadastrar_img-form-link').click(function(e) {
    	$("#cadastrar_img-form").delay(100).fadeIn(100);
 		$("#pesquisar_img-form").fadeOut(100);
		$('#pesquisar_img-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
	$('#pesquisar_img-form-link').click(function(e) {
		$("#pesquisar_img-form").delay(100).fadeIn(100);
 		$("#cadastrar_img-form").fadeOut(100);
		$('#cadastrar_img-form-link').removeClass('active');
		$(this).addClass('active');
		e.preventDefault();
	});
  function loadjscssfile(filename, filetype){
      if (filetype=="js"){ //if filename is a external JavaScript file
          var fileref=document.createElement('script')
          fileref.setAttribute("type","text/javascript")
          fileref.setAttribute("src", filename)
      }
      else if (filetype=="css"){ //if filename is an external CSS file
          var fileref=document.createElement("link")
          fileref.setAttribute("rel", "stylesheet")
          fileref.setAttribute("type", "text/css")
          fileref.setAttribute("href", filename)
      }
      if (typeof fileref!="undefined")
          document.getElementsByTagName("head")[0].appendChild(fileref)
  }

$(function(){
  $('#clitable').click(function(e){
    $('#tabela_img').hide();
  }
)
});
$(function(){
  $('#clitable').click(function(e){
    $('#tabela_img').show();
    loadjscssfile("systemTabela.css","css")
  }
)

});
