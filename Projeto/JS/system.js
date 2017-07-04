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
  (function($, window, undefined) {
      //is onprogress supported by browser?
      var hasOnProgress = ("onprogress" in $.ajaxSettings.xhr());

      //If not supported, do nothing
      if (!hasOnProgress) {
          return;
      }

      //patch ajax settings to call a progress callback
      var oldXHR = $.ajaxSettings.xhr;
      $.ajaxSettings.xhr = function() {
          var xhr = oldXHR.apply(this, arguments);
          if(xhr instanceof window.XMLHttpRequest) {
              xhr.addEventListener('progress', this.progress, false);
          }

          if(xhr.upload) {
              xhr.upload.addEventListener('progress', this.progress, false);
          }

  return xhr;
      };
  })(jQuery, window);
