<?php 
use src\MensagemTrait;
use src\Conexao\Conexao;

/*
Dúvidas?
Fale conosco!
administrativo@yesweteach.com.br
pedagogico@yesweteach.com.br
+55 11 93051 - 8143
@yes.we.teach
*/
?>
<footer class="rodapebranco">
<br/>
<div class="container">
	
	<div class="justify-content-center text-center" style="margin-top:10px;">
			<p style="font-family: Open Sans,'Helvetica Neue',Arial,sans-serif;"><?php echo $AutorSite; ?> &copy; <?php echo date("Y");?>. Todos os direitos reservados.</p> 
	</div>
	
	
</div>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>
<script>window.jQuery || document.write('<script src="src/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
<script src="src/js/vendor/bootstrap.bundle.js"></script>
<script src="src/js/vendor/bootstrap.min.js"></script>
<script src="src/js/bootstrap-4.6.2/bootstrap-4.6.2/js/src/util.js"></script>

<script src="src/js/datepicker.js"></script>
<script src="src/js/plugins.js"></script>
<script src="src/js/main.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.10/jquery.mask.js"></script>
<!-- GetButton.io widget -->
<script type="text/javascript">

$(document).ready(function(){
    $('[name="Telefone"]').mask('(00) 0000-0000');
});

$(document).ready(function(){
    $('[name="Whatsapp"]').mask('(00) 00000-0000');
});

$(document).ready(function(){
    $('[name="CPF"]').mask('000.000.000-00');
});
$(document).ready(function(){
    $('[name="RG"]').mask('99.999.999-A');
});



    (function () {
        var options = {
            whatsapp: "+55<?php echo $Whatsapp; ?>", // WhatsApp number
            call_to_action: "Envia-nos uma mensagem", // Call to action
            button_color: "#FF6550", // Color of button
            position: "right", // Position may be 'right' or 'left'
			//company_logo_url: "https://ccplbarueri.com.br/favicon.ico", // URL com o logo da empresa
        };
        var proto = 'https:', host = "getbutton.io", url = proto + '//static.' + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /GetButton.io widget -->
<script>
function trocarClasse() {
    var modal = document.getElementById('exampleModalXl');
    modal.classList.remove('show'); // Remove a classe "show"
    //modal.classList.add('fade'); // Adiciona a classe "fade"
  }
</script>

