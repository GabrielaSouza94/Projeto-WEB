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

	})
});
