<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="articles index large-9 medium-8 columns content">
    <h3><?= __('Articles') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('number') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('lower') ?></th>
                <th scope="col"><?= $this->Paginator->sort('upper') ?></th>
                <th scope="col"><?= $this->Paginator->sort('inversenumber') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($articles as $article): ?>
            <tr>
                <td><?= $this->Number->format($article->id) ?></td>
                <td><?= $this->Number->format($article->number) ?></td>
                <td><?= h($article->name) ?></td>
                <td><?= h($article->lower) ?></td>
                <td><?= h($article->upper) ?></td>
                <td><?= $this->Number->format($article->inversenumber) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $article->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $article->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?>
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
