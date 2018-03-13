<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('bootstrap.min.css') ?>
    <?= $this->Html->css('https://use.fontawesome.com/releases/v5.0.8/css/all.css') ?>

    <?= $this->Html->script('https://code.jquery.com/jquery-3.2.1.js') ?>
    <?= $this->Html->script('https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js') ?>




    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary"><!-- NAVBAR -->
      <a class="navbar-brand" href="#">#meusTextos</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarColor01">

        <ul class="navbar-nav mr-auto">
          <?php if($loggedIn) { ?>
          <li class="nav-item active">
            <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="redacoes">Redações</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Notas</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Sobre</a>
          </li>
          <?php } ?>
        </ul>
          <?php 
          if (!$loggedIn) { ?>
            <button class="btn btn-default my-2 my-sm-0" data-toggle="modal" data-target="#modal">ENTRAR/CADASTRAR</button>
          <?php } else {  
            echo $this->Form->create($x = 0, ['type' => 'post', 'url' => ['action' => 'sair']]);        
            echo $this->Form->button(__('SAIR'), 
            ['class' => 'btn btn-danger my-2 my-sm-0',
            'controller' => 'usuarios', 'action' => 'sair']);
          } ?>


      </div>
    </nav>

    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>

    <hr class="divider">
    <!-- FOOTER -->
    <footer class="footer stick-footer mb-3"> <!-- FOOTER -->
        <span class="text-muted"><i>Erik Aleixo: </i></span>      
        <span class="fab fa-github fa-lg mr-1"></span><a href="https:\\www.github.com/erik684/">github.com/erik684/</a>
    </footer>
</div>
</body>
</html>
