<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Redacao $redacao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Redacao'), ['action' => 'edit', $redacao->id_redacao]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Redacao'), ['action' => 'delete', $redacao->id_redacao], ['confirm' => __('Are you sure you want to delete # {0}?', $redacao->id_redacao)]) ?> </li>
        <li><?= $this->Html->link(__('List Redacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Redacao'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="redacoes view large-9 medium-8 columns content">
    <h3><?= h($redacao->id_redacao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Titulo') ?></th>
            <td><?= h($redacao->titulo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Texto') ?></th>
            <td><?= h($redacao->texto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nota') ?></th>
            <td><?= h($redacao->nota) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Redacao') ?></th>
            <td><?= $this->Number->format($redacao->id_redacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Usuario') ?></th>
            <td><?= $this->Number->format($redacao->id_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($redacao->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($redacao->modified) ?></td>
        </tr>
    </table>
</div>
