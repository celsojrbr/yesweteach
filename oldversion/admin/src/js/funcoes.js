  <!--
        function MM_jumpMenu(targ,selObj,restore){ //v3.0
                 eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
                 if (restore) selObj.selectedIndex=0;}
    //-->
	
		
	
	function callmenu(){
		// GET A MENU HUD AND ADD "ATIVO" OUR "NOT ATIVO"
		var callmenuhud = document.getElementById('callmenu');
		
		// GET A STATUS OF MENU
		var validator = $("#callmenu").attr("class");
		
		var alturada = $(document).height(); 
		//alturada=alturada+screen.availHeight;
		//AVALIA O STATUS DOS MENU
		if( validator == 'opcao-navegacao'){
			
			callmenuhud.setAttribute('class', 'userativo');
			//callmenuhud.setAttribute('style', "height:"+alturada+"px" );
			console.log('ativou '+alturada);
		}
		else{
			callmenuhud.setAttribute('class', 'opcao-navegacao');
			console.log('desativou');
		}
	}
	
	
	$(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
                $('#controlerNavegacao').fadeIn();
            } else {
                $('#controlerNavegacao').fadeOut();
            }
        });
    });
	
	$(function () {
        $(window).scroll(function () {
            if ($(this).scrollTop() > 300) {
              $('.navmobile').addClass("FixisarTop");
			  $('.iten1').fadeIn();
			  $('.iten2').fadeIn();
			  $('.iten3').attr("style","width: auto;");
			   
            } else {
              $('.navmobile').removeClass("FixisarTop");
				$('.iten1').fadeOut();
				$('.iten2').fadeOut();
				$('.iten3').attr("style","width: 100%;");
            }
			
        });
    });
	
	
	
	$(function () {	
	var grupoImagens = $("#grupoImagens");
		var CorCinzaGaleria = $("#CorCinzaGaleria");
		var GaleriaControlerTamanho = $("#GaleriaControlerTamanho");
		
		grupoImagens.click(function() {
			var imagemClicado = event.target;
			
			CorCinzaGaleria.fadeIn();
			GaleriaControlerTamanho.fadeIn();
			
			TrocaImagen(imagemClicado);
		});
	
	});
	
	$(function () {	
		$("#GaleriaClose").click(function() {
			closeDivGaleria()
		});
		
		$("#CorCinzaGaleria").click(function() {
			closeDivGaleria()
		});
		
		$("#GaleriaRight").click(function() {
			var GaleriaControlerTamanho = $("#GaleriaContainer");
			var stringDado = $(this);
			var valorIndex = stringDado.attr('dadoChamar').substring(5);
			var NovoIndex = parseInt(valorIndex)+1;
			if(NovoIndex >= 12){
				NovoIndex = 1;
			}
			//console.log(NovoIndex);
			var novaImagemSelecionada = $("#Index"+NovoIndex);
			
			console.log(novaImagemSelecionada);
			GaleriaControlerTamanho.fadeOut();
			setTimeout(TrocaImagen(novaImagemSelecionada),1000);
			setTimeout(GaleriaControlerTamanho.fadeIn(),2000);
		});
		
		$("#GaleriaLeft").click(function() {
			var GaleriaControlerTamanho = $("#GaleriaContainer");
			var stringDado = $(this);
			var valorIndex = stringDado.attr('dadoChamar').substring(5);
			var NovoIndex = parseInt(valorIndex)-1;
			if(NovoIndex <= 0){
				NovoIndex = 12;
			}
			//console.log(NovoIndex);
			var novaImagemSelecionada = $("#Index"+NovoIndex);
			
			console.log(novaImagemSelecionada);
			GaleriaControlerTamanho.fadeOut();
			setTimeout(TrocaImagen(novaImagemSelecionada),1000);
			setTimeout(GaleriaControlerTamanho.fadeIn(),2000);
		});
		
		
		
	});
	
	function closeDivGaleria(){
		var CorCinzaGaleria = $("#CorCinzaGaleria");
		var GaleriaControlerTamanho = $("#GaleriaControlerTamanho");
		
		CorCinzaGaleria.fadeOut();
		GaleriaControlerTamanho.fadeOut();
	}
	
	function TrocaImagen(indexImagen){
		var UrlImagem = $(indexImagen).attr('src');
		var Index = $(indexImagen).attr('id');
		var ImagenDoContainer = $("#ImagenDoContainer");
		var GaleriaRight=$("#GaleriaRight");
		var GaleriaLeft=$("#GaleriaLeft");
		//console.log(UrlImagem);
		GaleriaRight.attr('dadoChamar',Index);
		GaleriaLeft.attr('dadoChamar',Index);
		ImagenDoContainer.attr('src',UrlImagem);
		
		//console.log(GaleriaRight);
		//console.log(GaleriaLeft);
		
	}
	
	