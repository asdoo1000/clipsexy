// JavaScript Document
function DownLoad_free(id_sexy){
	var host = $("#url").val();
	//window.location.href = 'clip_per_request.php?id_sexy='+id_sexy;
	//var host = "http://"+window.location.hostname+"/clipvideo/back_end/videodownload.php?id_sexy="+id_sexy;
	opendownload = window.open(host ,'_blank');
	setTimeout(function(){opendownload.close()},2000);
}
function Confirm(id_sexy){
	window.location.href = 'sign_up.php?id_sexy='+id_sexy+'&price=5';
}

function sign_up(id_sexy){
	window.location.href = 'sign_up.php?id_sexy='+id_sexy;
}
function newtap(){
	var url = $("#url").val();
	opendownload = window.open(url ,'_blank');
	setTimeout(function(){opendownload.close()},2000);
}
$(document).ready(function() {
	$('.thumbnails').simpleGal({
      	mainImage: '.custom'
	});
});