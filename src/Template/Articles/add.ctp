<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="articles form large-9 medium-8 columns content">
    <?= $this->Form->create($article) ?>
    <fieldset>
        <legend><?= __('Add Article') ?></legend>
        <?php
            echo $this->Form->control('number');
            echo $this->Form->control('name');
            echo $this->Form->control('lower');
            echo $this->Form->control('upper');
            echo $this->Form->control('preamble');
            echo $this->Form->control('text');
            echo $this->Form->control('extra1');
            echo $this->Form->control('extra2');
            echo $this->Form->control('extra3');
            echo $this->Form->control('extra4');
            echo $this->Form->control('extra5');
            echo $this->Form->control('extra6');
            echo $this->Form->control('inversenumber');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
