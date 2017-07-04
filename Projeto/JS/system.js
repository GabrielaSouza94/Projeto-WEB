/*$(function() {

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
*/
});
$(function loadjsfile(filename, filetype){
      if (filetype=="js"){ //if filename is a external JavaScript file
          var fileref=document.createElement('script')
          fileref.setAttribute("type","text/javascript")
          fileref.setAttribute("src", filename)
      }

      if (typeof fileref!="undefined")
          document.getElementsByTagName("head")[0].appendChild(fileref)
  });

var progressBar = $(".progress-bar");

function addProgress(percentual) {
  console.log(percentual);
  progressBar.width(percentual);
};

$.ajax({
  xhr: function() {
    var xhr = new window.XMLHttpRequest();

    xhr.addEventListener("progress", function(evt) {
      if (evt.lengthComputable) {
        var percentComplete = evt.loaded / evt.total;
        addProgress((percentComplete * 100) + '%');

      }
    }, false);
    return xhr;
  },
  type: 'GET', //Or 'GET',
  url: "ver_img.php?",
   data: { post : true, postfor : 'fun' },
   success: function(data) {
       $("table").show();
   }
 });
