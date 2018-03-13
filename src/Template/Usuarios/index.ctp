<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Usuario[]|\Cake\Collection\CollectionInterface $usuarios
 */
?>

<div class="container">

    <h1 class="mt-3 text-center">Página Inicial</h1>

<h3 class="text-center">
  
  <small class="text-muted">Clique no botão para Entrar ou Cadastrar</small>

</h3>
         
  <button class="form-control btn btn-primary btn-lg btn-block" href="#modal" data-toggle="modal" data-target="#modal">
    Entre ou Cadastre-se
  </button>


<h2 class="mt-3">Projeto utilizando Bootstrap 4 e CakePHP</h2>  
<p class="lead mt-3">Projeto utilizando Bootstrap 4 e CakePHP</p>
</div>

<!-- MODAL -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog bs-modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <ul class="nav nav-tabs" role="tablist">
          <li class="nav-item ml-5">
            <a class="nav-link active" href="#login" role="tab" data-toggle="tab">
                <i class="fas fa-user pr-1"></i>Entrar</a>
          </li>
          <li class="nav-item ml-5">
            <a class="nav-link" href="#cadastro" role="tab" data-toggle="tab">
                <i class="fas fa-sign-in-alt pr-1"></i>Cadastrar</a>
          </li>
        </ul>
      </div>
      <div class="modal-body">

        <!-- TAB LOGIN -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active show" id="login">
            <?= $this->Form->create($usuario, ['type' => 'post', 'url' => ['action' => 'login']]) ?>

            <fieldset>

            <!-- nome input-->
            <?= $this->Form->control('nome_usuario', 
            ['class' => 'form-control input-medium',
            'placeholder' => 'Ex.: Julio, Lucas, Angela',
            'label' => 'Nome']) ?>

            <!-- senha input-->
            <?= $this->Form->control('senha',
            ['class' => 'form-control input-medium',
            'placeholder' => '*********']) ?>

            <!-- Button -->
            <?= $this->Form->button(__('Entrar'), 
            ['class' => 'btn btn-success']) ?>

            </fieldset>
            <?= $this->Form->end() ?>

          </div>

          <!-- TAB CADASTRO -->
          <div role="tabpanel" class="tab-pane fade" id="cadastro">
            <?= $this->Form->create($usuario, ['type' => 'post', 'url' => ['action' => 'cadastrar']])?> 
            <fieldset>

            <!-- nome input-->
            <?= $this->Form->control('nome_usuario',
            ['class' => 'form-control input-medium',
            'placeholder' => 'Ex.: Julio, Lucas, Angela',
            'label' => 'Nome']) ?>

            <!-- sobrenome input-->
            <?= $this->Form->control('sobrenome_usuario',
            ['class' => 'form-control input-medium',
            'placeholder' => 'Ex.: Cesar, Silva, Santos',
            'label' => 'sobrenome'] ) ?>

            <!-- senha input-->
            <?= $this->Form->control('senha',
            ['class' => 'form-control input-medium',
            'placeholder' => '********',
            'type' => 'password']) ?>

            <!-- confirmar senha input-->
            <?= $this->Form->control('senha2',
            ['class' => 'form-control input-medium',
            'placeholder' => '********',
            'type' => 'password',
            'label' => 'Confirmar Senha']) ?>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="cadastro"></label>
              <div class="controls">
                <?= $this->Form->button(__('Cadastrar'), 
                ['name' => 'btn_cadastro', 
                'class' => 'btn btn-success'])  ?>
              </div>
            </div>
            

            </fieldset>
            <?= $this->Form->end()?>   
          </div>

        </div>
      </div>

      <div class="modal-footer">
      <center>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
        </center>
      </div>
    </div>
  </div>
</div>