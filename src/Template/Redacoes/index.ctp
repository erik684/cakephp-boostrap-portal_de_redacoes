<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Redaco[]|\Cake\Collection\CollectionInterface $redacoes
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Redaco'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="redacoes index large-9 medium-8 columns content">
    <h3><?= __('Redacoes') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_redacao') ?></th>
                <th scope="col"><?= $this->Paginator->sort('texto') ?></th>
                <th scope="col"><?= $this->Paginator->sort('palavras_chaves') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nota') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id_usuario') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($redacoes as $redaco): ?>
            <tr>
                <td><?= $this->Number->format($redaco->id_redacao) ?></td>
                <td><?= h($redaco->texto) ?></td>
                <td><?= h($redaco->palavras_chaves) ?></td>
                <td><?= $this->Number->format($redaco->nota) ?></td>
                <td><?= h($redaco->created) ?></td>
                <td><?= h($redaco->modified) ?></td>
                <td><?= $this->Number->format($redaco->id_usuario) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $redaco->id_redacao]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $redaco->id_redacao]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $redaco->id_redacao], ['confirm' => __('Are you sure you want to delete # {0}?', $redaco->id_redacao)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
