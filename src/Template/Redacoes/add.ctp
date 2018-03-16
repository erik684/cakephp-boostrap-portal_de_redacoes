<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Redacao $redacao
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Redacoes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="redacoes form large-9 medium-8 columns content">
    <?= $this->Form->create($redacao) ?>
    <fieldset>
        <legend><?= __('Add Redacao') ?></legend>
        <?php
            echo $this->Form->control('texto');
            echo $this->Form->control('palavras_chaves');
            echo $this->Form->control('nota');
            echo $this->Form->control('id_usuario');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
