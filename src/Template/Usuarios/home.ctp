<div class="jumbotron">
  <h1 class="display-3">Bem vindo! <u><?php echo $auth ?></u></h1>
  <p class="lead">Essa é a sua Página Inicial. Aqui você pode escrever e/ou avaliar <i>Redações</i> de outros <i>Usuários</i>.</p>
  <hr class="my-4">

<div class="row">
	<div class="col-md-6" style="border-right: 1px solid #ddd;">
		<p>Deseja enviar uma redação e ser avaliado?</p>
		<p>É só clicar logo abaixo.</p>
		<p class="lead">
		  <a class="btn btn-success btn-lg" href="enviarRedacao" role="button">Enviar redação</a>
		</p>
	</div>
	<div class="col-md-6">
		<p>Quer ler e avaliar uma redação?</p>
		<p>É só clicar logo abaixo.</p>
		<p class="lead">
		  <a class="btn btn-warning btn-lg" href="redacoes" role="button">Ler redações</a>
		</p>
	</div>
</div>

</div>

<hr>

<div class="container">
<h2>Ultimas redações: </h2>

<div class="row">
<?php foreach ($redacao as $redacao) { ?>	

	<div class="col-lg-4">
		<div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
		  <div class="card-header"><i><?= ucfirst($redacao->usuario->nome_usuario).' '.ucfirst($redacao->usuario->sobrenome_usuario) ?></i>
			<i class="float right">
				<!-- IMPRIME QUANTIDADE DE ESTRELAS BASEADO NA NOTA -->
				<?php 
				$nota = round(0.5 * (int)$redacao->nota);
					for ($x = 1; $x <= $nota; $x++) {
						echo '<span class="fas fa-star"></span>';
					}
					for ($x = $nota; $x < 5; $x++) {
						echo '<span class="far fa-star"></span>';
					}
				?>
			</i>
		  </div>
		  <div class="card-body">
		    <h4 class="card-title"><?= ucfirst($redacao->titulo) ?></h4>
		    <p class="card-text"><?= substr($redacao->texto, 0, 150) ?>... <a class="float-right badge badge-info" href="">Continuar Lendo <i class="fas fa-book"></i></a></p>
		  </div>
		</div>
	</div>
<?php } ?>
</div>