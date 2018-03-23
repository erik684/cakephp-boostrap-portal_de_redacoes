<div class="container">
<div class="jumbotron">
	<h2 class="text-center">Essa é sua página de Redações</h2>
	<p>Aqui você pode enviar, visualizar ou avaliar as redações dos usuários.</p>
</div>

<div class="row redacoes">
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
		    <h4 class="card-title"><?= $redacao->titulo ?></h4>
		    <p class="card-text" style="font-size: 14px;"><?= substr($redacao->texto, 0, 150) ?>...
		    	<a class="float-right badge badge-info" style="background-color: #6273e0e6; padding: 1.25em;" href="redacoes/<?= $redacao->id_redacao  ?>">Continuar Lendo <i class="fas fa-book"></i></a>
		    </p>
		  </div>
		</div>
	</div>
	<?php } ?>
</div>

<div class="container">
		<div class="paginator pt-2">
		    <ul class="pagination pagination-lg pb-2">
		    	<?php
		    	$this->Paginator->templates([
		    	    'prevActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
		    	    'prevDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>',
		    	    'number' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
		    	    'current' => '<li class="page-item active"><a class="page-link" href="{{url}}">{{text}}</a></li>',
		    	    'nextActive' => '<li class="page-item"><a class="page-link" href="{{url}}">{{text}}</a></li>',
		    	    'nextDisabled' => '<li class="page-item disabled"><a class="page-link" href="{{url}}">{{text}}</a></li>'
		    	]); 
		    	?>

		        <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
		            <li class="page-item">
		        <?= $this->Paginator->numbers() ?>
		    		</li>
		        <?= $this->Paginator->next(__('Próxima') . ' >') ?>

		    </ul>
		    <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} redação(s) das {{count}} totais')]) ?></p>
		</div>
</div>

</div>