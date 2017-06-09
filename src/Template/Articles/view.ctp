<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Article'), ['action' => 'edit', $article->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Article'), ['action' => 'delete', $article->id], ['confirm' => __('Are you sure you want to delete # {0}?', $article->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="articles view large-9 medium-8 columns content">
    <h3><?= h($article->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($article->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Lower') ?></th>
            <td><?= h($article->lower) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Upper') ?></th>
            <td><?= h($article->upper) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($article->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Number') ?></th>
            <td><?= $this->Number->format($article->number) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inversenumber') ?></th>
            <td><?= $this->Number->format($article->inversenumber) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Preamble') ?></h4>
        <?= $this->Text->autoParagraph(h($article->preamble)); ?>
    </div>
    <div class="row">
        <h4><?= __('Text') ?></h4>
        <?= $this->Text->autoParagraph(h($article->text)); ?>
    </div>
    <div class="row">
        <h4><?= __('Extra1') ?></h4>
        <?= $this->Text->autoParagraph(h($article->extra1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Extra2') ?></h4>
        <?= $this->Text->autoParagraph(h($article->extra2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Extra3') ?></h4>
        <?= $this->Text->autoParagraph(h($article->extra3)); ?>
    </div>
    <div class="row">
        <h4><?= __('Extra4') ?></h4>
        <?= $this->Text->autoParagraph(h($article->extra4)); ?>
    </div>
    <div class="row">
        <h4><?= __('Extra5') ?></h4>
        <?= $this->Text->autoParagraph(h($article->extra5)); ?>
    </div>
    <div class="row">
        <h4><?= __('Extra6') ?></h4>
        <?= $this->Text->autoParagraph(h($article->extra6)); ?>
    </div>
</div>
