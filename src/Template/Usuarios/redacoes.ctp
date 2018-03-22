<div class="container">
<div class="jumbotron">
	<h2 class="text-center">Essa é sua página de Redações</h2>
	<p>Aqui você pode enviar, visualizar ou avaliar as redações dos usuários.</p>
</div>

<div class="row">
	<?php foreach ($redacao as $redacao) { ?>
	<div class="col-md-6">
		<div style="max-width: 50rem;" class="card text-white mb-3 
		<?php 
		if ((int)$redacao->nota > 6) {
			echo 'bg-success';
		} else {
			echo 'bg-info';
		}
		?>" >
		  <div class="card-header"><i><i class="far fa-user pr-1"></i><u><?= ucfirst($redacao->usuario->nome_usuario).' '.ucfirst($redacao->usuario->sobrenome_usuario) ?></u></i>
		  	<span><?= $this->Time->timeagoinwords($redacao->created) ?></span>
			<i class="float right">
			<?php 
			$nota = round(0.5 * (int)$redacao->nota);
				for ($x = 1; $x <= $nota; $x++) {
					echo '<span class="fas fa-star"></span>';
				}
				for ($x = $nota; $x < 5; $x++) {
					echo '<span class="far fa-star"></span>';
				}
			?>
		  	<!-- <span class="far fa-star"></span> -->

			</i>
		  </div>
		  <div class="card-body">
		    <h4 class="card-title"><?= $redacao->titulo ?></h4>
		    <p class="card-text" style="font-size: 14px;"><?= substr($redacao->texto, 0, 150) ?>...
		    	<a class="float-right badge badge-info" style="background-color: #6273e0e6; padding: 1.25em;" href="redacoes/<?= $redacao->id_redacao  ?>">Continuar Lendo <i class="fas fa-book"></i></a>
		    </p>
		  </div>
		</div>
	</div>
	<?php } ?>
</div>

<hr>
</div>