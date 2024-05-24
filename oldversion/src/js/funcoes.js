
$(function () {	
var grupoImagens = $("#grupoImagens");
	var CorCinzaGaleria = $("#CorCinzaGaleria");
	var GaleriaControlerTamanho = $("#GaleriaControlerTamanho");
	
	grupoImagens.click(function() {
		var imagemClicado = event.target;
		
		CorCinzaGaleria.fadeIn();
		GaleriaControlerTamanho.fadeIn();
		
		//TrocaImagen(imagemClicado);
	});

});

function closeDivGaleria(){
	var CorCinzaGaleria = $("#CorCinzaGaleria");
	var GaleriaControlerTamanho = $("#GaleriaControlerTamanho");
	
	CorCinzaGaleria.fadeOut();
	GaleriaControlerTamanho.fadeOut();
}

$(function () {	
	$("#GaleriaClose").click(function() {
		closeDivGaleria()
	});
	
	$("#CorCinzaGaleria").click(function() {
		closeDivGaleria()
	});
	
	$("#GaleriaRight").click(function() {
		TrocaDireita(this);
	});
	
	$("#GaleriaLeft").click(function() {
		TrocaEsquerda(this);
	});
	

	
});
