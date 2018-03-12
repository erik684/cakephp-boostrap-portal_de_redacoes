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
  <button class="btn btn-primary btn-lg btn-block" href="#modal" data-toggle="modal" data-target="#modal">Entre ou Cadastre-se</button>

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
            <a class="nav-link active" href="#login" role="tab" data-toggle="tab">Entrar</a>
          </li>
          <li class="nav-item ml-5">
            <a class="nav-link" href="#cadastro" role="tab" data-toggle="tab">Cadastrar</a>
          </li>
        </ul>
      </div>
      <div class="modal-body">

        <!-- TAB LOGIN -->
        <div class="tab-content">
          <div role="tabpanel" class="tab-pane fade in active show" id="login">
            <form class="form-horizontal"> 
            <fieldset>

            <!-- nome input-->
            <div class="control-group">
              <label class="control-label" for="userid">Nome:</label>
              <div class="controls">
                <input required="" id="userid" name="userid" type="text" class="form-control" placeholder="JoeSixpack" class="input-medium" required="">
              </div>
            </div>

            <!-- senha input-->
            <div class="control-group">
              <label class="control-label" for="passwordinput">Senha:</label>
              <div class="controls">
                <input required="" id="passwordinput" name="passwordinput" class="form-control" type="password" placeholder="********" class="input-medium">
              </div>
            </div>

            <!-- Button -->
            <div class="control-group">
              <label class="control-label" for="signin"></label>
              <div class="controls">
                <button id="signin" name="signin" class="btn btn-success">Entrar</button><!-- TAB CADASTRO-->
              </div>
            </div>
            </fieldset>
            </form>
          </div>

          <!-- TAB CADASTRO -->
          <div role="tabpanel" class="tab-pane fade" id="cadastro">
            <?= $this->Form->create($usuario, ['type' => 'post'])?> 
            <fieldset>

            <!-- nome input-->
            <?= $this->Form->control('nome_usuario',
            ['class' => 'form-control input-medium',
            'placeholder' => 'Ex.: Julio, Lucas, Angela']) ?>

            <!-- sobrenome input-->
            <?= $this->Form->control('sobrenome_usuario',
            ['class' => 'form-control input-medium'] ) ?>

            <!-- senha input-->
            <?= $this->Form->control('senha',
            ['class' => 'form-control input-medium',
            'placeholder' => '********',
            'type' => 'password']) ?>

            <!-- senha input-->
            <?= $this->Form->control('senha2',
            ['class' => 'form-control input-medium',
            'placeholder' => '********',
            'type' => 'password',
            'label' => 'Confirmar senha']) ?>

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