<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Redaco $redaco
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Redaco'), ['action' => 'edit', $redaco->id_redacao]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Redaco'), ['action' => 'delete', $redaco->id_redacao], ['confirm' => __('Are you sure you want to delete # {0}?', $redaco->id_redacao)]) ?> </li>
        <li><?= $this->Html->link(__('List Redacoes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Redaco'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="redacoes view large-9 medium-8 columns content">
    <h3><?= h($redaco->id_redacao) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Texto') ?></th>
            <td><?= h($redaco->texto) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Palavras Chaves') ?></th>
            <td><?= h($redaco->palavras_chaves) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Redacao') ?></th>
            <td><?= $this->Number->format($redaco->id_redacao) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nota') ?></th>
            <td><?= $this->Number->format($redaco->nota) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Usuario') ?></th>
            <td><?= $this->Number->format($redaco->id_usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($redaco->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($redaco->modified) ?></td>
        </tr>
    </table>
</div>
