<div class="container">
	<div class="jumbotron text-center">
		<h1>Enviar Redação</h1>
		<p>Olá Usuário, parece que você está pronto para enviar sua redação!</p>
		<p>Para começar, preenchar os campos abaixo: </p>
		<div class="progress">
			<div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" style="width: 0%; background-color: #649c56;"></div>
		</div>

		<div class="jumbotron showafterloading text-left hide" style="background-color: white; border-style: solid;border-radius: 5px; border-color: #f1f1f1; display: none;">
			<?= $this->Form->create($redacao, ['type' => 'post', 'url' => ['action' => 'redacaoSubmit']]) ?>
			  <fieldset>
			    <legend class="mb-3">Redação</legend>
			    <div class="form-group pt-3">
			    	<?= $this->Form->control('titulo',
			    	['class' => 'form-group pt-3',
			    	'placeholder' => 'Digite o titulo da redação']) ?>
			     	<small id="tituloHelp" class="form-text text-muted">Insira um titulo interessante para que as pessoas se interessem pela sua redação!</small>
			    </div>
			    <div class="form-group">
			    	<?= $this->Form->control('texto',
			    	['class' => 'form-control',
			    	'label' => 'Insira aqui a sua redação',
			    	'rows' => '3',
			    	'style' => 'margin-top: 0px; margin-bottom: 0px; height: 255px;']) ?>
			    </div>
			    <?= $this->Form->hidden('id_usuario', ['value' => $auth]) ?>
			 </fieldset>
			<?= $this->Form->button(__('Enviar'), ['class' => 'btn btn-success']) ?>
			<?= $this->Form->end() ?>
		</div>
</div>

<script type="text/javascript">
	var value = 0;
	var progressbar = $(".progress-bar").css('width', 0);
	var form = $(".showafterloading");

	var interval = setInterval(function () {
		var progressbar = $(".progress-bar").css('width', value);
		value = value + 250;
		if (value > 1500) {
			clearInterval(interval);
			var progressbar = $(".progress").hide();
			var form = $(".showafterloading").show();
		}		
		
	}, 230)
</script>