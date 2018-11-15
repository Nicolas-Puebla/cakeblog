<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Usuario'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Borrar Usuario'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Usuarios'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nuevo Usuario'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Lista de Noticias'), ['controller' => 'Noticias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nueva Noticia'), ['controller' => 'Noticias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="users view large-9 medium-8 columns content">
    <h3><?= h($user->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Username') ?></th>
            <td><?= h($user->username) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Role') ?></th>
            <td><?= h($user->role) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($user->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($user->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Noticias') ?></h4>
        <?php if (!empty($user->noticias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Nombre') ?></th>
                <th scope="col"><?= __('Descripcion') ?></th>
                <th scope="col"><?= __('Link') ?></th>
                <th scope="col"><?= __('Imagen') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->noticias as $noticias): ?>
            <tr>
                <td><?= h($noticias->id) ?></td>
                <td><?= h($noticias->nombre) ?></td>
                <td><?= h($noticias->descripcion) ?></td>
                <td><?= h($noticias->link) ?></td>
                <td><?= h($noticias->imagen) ?></td>
                <td><?= h($noticias->created) ?></td>
                <td><?= h($noticias->modified) ?></td>
                <td><?= h($noticias->user_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Noticias', 'action' => 'view', $noticias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Noticias', 'action' => 'edit', $noticias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Noticias', 'action' => 'delete', $noticias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $noticias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
