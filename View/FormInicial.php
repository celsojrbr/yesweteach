			
<div class="col-md-12" id="Matrículas" style="font-size:14px">
	<br/>
	<br/>
	<h4 class="mb-3" style="font-size:48px;text-decoration-color: #f2b705;text-decoration: underline;text-decoration-color: #f2b705;">Matrículas Abertas!</h4>
	<br/>
	<br/>
	<form class="needs-validation" method="post" action="">
	
		<div class="row">
			<div class="col-md-4 mb-3">
				<label for="firstName">Nome Completo</label>
				<input type="text" name="NomeCompleto" class="form-control" id="firstName" placeholder="Seu Nome Completo Aqui" value="" required="">
				<div class="invalid-feedback">
				Nome Completo é obrigatório.
				</div>
			</div>
		

			<div class="col-md-4 mb-3">
				<label for="email">Email <span class="text-muted"></span></label>
				<input type="email" name="Email" class="form-control" id="email" placeholder="SeuEmail@example.com" required="">
				<div class="invalid-feedback">
				Porfavor digite um email valido!
				</div>
			</div>
		
			<div class="col-md-4 mb-3">
				<label for="Whatsapp">Whatsapp para contato (Com DDD!) *</label>
				<input type="text" name="Whatsapp" class="form-control" id="Whatsapp" placeholder="(00) 00000-0000" required="">
				<div class="invalid-feedback">
				Por favor digite um Whatsapp ou Celular
				</div>
			</div>

		</div>
		<hr class="mb-4">
		<div class="row">
		<div class="col-md-6 mb-3">
			<h4 class="mb-3">Qual você considera ser seu nível de inglês? *</h4>
			<div class="d-block my-3">
				<div class="custom-control custom-radio">
					<input id="Nenhum" name="NivelIngles" type="radio" class="custom-control-input" value="0" checked="" required="">
					<label class="custom-control-label" for="Nenhum">Não possuo NENHUM conhecimento em inglês.</label>
				</div>
				<div class="custom-control custom-radio">
					<input id="Basico" name="NivelIngles" type="radio" class="custom-control-input" value="1" required="">
					<label class="custom-control-label" for="Basico">Básico</label>
				</div>
				<div class="custom-control custom-radio">
					<input id="Intermediario" name="NivelIngles" type="radio" class="custom-control-input" value="2" required="">
					<label class="custom-control-label" for="Intermediario">Intermediario</label>
				</div>
				<div class="custom-control custom-radio">
					<input id="Avancado" name="NivelIngles" type="radio" class="custom-control-input" value="3" required="">
					<label class="custom-control-label" for="Avancado">Avançado</label>
				</div>
			</div>
		</div>
		<div class="col-md-6 mb-3">
			<h4 class="mb-3">Como conheceu a Yes? *</h4>
			<div class="d-block my-3">
				<div class="custom-control custom-radio">
					<input id="Instagram" name="ComoConheceu" type="radio" class="custom-control-input" value="0" checked="" required="">
					<label class="custom-control-label" for="Instagram">Instagram</label>
				</div>
				<div class="custom-control custom-radio">
					<input id="Amigos" name="ComoConheceu" type="radio" class="custom-control-input" value="1" required="">
					<label class="custom-control-label" for="Amigos">Amigos</label>
				</div>
				<div class="custom-control custom-radio">
					<input id="Internet" name="ComoConheceu" type="radio" class="custom-control-input" value="2" required="">
					<label class="custom-control-label" for="Internet">Pesquisa na Internet</label>
				</div>
				<div class="custom-control custom-radio">
					<input id="Outro" name="ComoConheceu" type="radio" class="custom-control-input" value="3" required="">
					<label class="custom-control-label" for="Outro">Outro:</label>
				</div>
			</div>
		</div>
		</div>
		<hr class="mb-4">
		
		<label for="exampleFormControlTextarea1">Conte um pouquinho sobre você! Vamos adorar te conhecer melhor! (De preferência, em inglês - caso já tenha algum conhecimento!)</label>
		
		<div class="d-block my-12">
			<div class="form-group">
				<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="ContePouco"></textarea>
			</div>
		</div>
		
		<hr class="mb-4">
		<div class="col-md-12">
				  <fieldset>
					<div class="blue-button">
						<button class="btn" type="submit">Matrícular</button>
					</div>
				  </fieldset>
				</div>
	</form>
</div>		

		