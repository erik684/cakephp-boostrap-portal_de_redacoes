<div class="container">
<div class="jumbotron">
	<h2 class="text-center">Essa é sua página de Redações</h2>
	<p>Aqui você pode enviar, visualizar ou avaliar as redações dos usuários.</p>
</div>

<div class="row">
	<?php foreach ($redacao as $redacao) { ?>
	<div class="col-md-4">
		<div style="max-width: 20rem;" class="card text-white mb-3 
		<?php 
		if ((int)$redacao->nota > 6) {
			echo 'bg-success';
		} else {
			echo 'bg-info';
		}
		?>" >
		  <div class="card-header"><i><?= $redacao->usuario->nome_usuario ?></i>
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
		    <p class="card-text"><?= substr($redacao->texto, 0, 90) ?>...
		    	<a class="float-right badge badge-secondary" href="redacoes/<?= $redacao->id_redacao  ?>">Continuar Lendo <i class="fas fa-book"></i></a>
		    </p>
		  </div>
		</div>
	</div>
	<?php } ?>
</div>

<hr>
</div>