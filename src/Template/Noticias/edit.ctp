<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Noticia $noticia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $noticia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $noticia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Noticias'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="noticias form large-9 medium-8 columns content">
    <?= $this->Form->create($noticia) ?>
    <fieldset>
        <legend><?= __('Edit Noticia') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('descripcion');
            echo $this->Form->control('link');
            echo $this->Form->control('imagen');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>