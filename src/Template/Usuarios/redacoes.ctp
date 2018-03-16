<div class="container">
<div class="jumbotron">
	<h2 class="text-center">Essa é sua página de Redações</h2>
	<p>Aqui você pode enviar, visualizar ou avaliar as redações dos usuários.</p>
</div>

<div class="row">
	<?php foreach ($redacao as $redacao) { ?>
	<div class="col-md-4">
		<div class="card text-white bg-success mb-3" style="max-width: 20rem;">
		  <div class="card-header"><i><?= $redacao->usuario->nome_usuario ?></i>
			<i class="float right">
			<span class="fas fa-star"></span>
		  	<span class="fas fa-star"></span>
		  	<span class="fas fa-star"></span> 
		  	<span class="fas fa-star"></span>
		  	<span class="far fa-star"></span>
			</i>
		  </div>
		  <div class="card-body">
		    <h4 class="card-title">$redacao->titulo_redacao</h4>
		    <p class="card-text"><?= substr($redacao->texto, 0, 90) ?>...<a class="float-right badge badge-info" href="redacoes/<?= $redacao->id_redacao  ?>">Continuar Lendo <i class="fas fa-book"></i></a></p>
		  </div>
		</div>
	</div>
	<?php } ?>
</div>

<hr>
</div>