<?php
/**
  * @var \App\View\AppView $this
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Livro Fisico'), ['action' => 'edit', $livroFisico->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Livro Fisico'), ['action' => 'delete', $livroFisico->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livroFisico->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Livro Fisico'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro Fisico'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="livroFisico view large-9 medium-8 columns content">
    <h3><?= h($livroFisico->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Livro') ?></th>
            <td><?= $livroFisico->has('livro') ? $this->Html->link($livroFisico->livro->identificador, ['controller' => 'Livros', 'action' => 'view', $livroFisico->livro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Codigo Livro') ?></th>
            <td><?= h($livroFisico->codigo_livro) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($livroFisico->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Alugado') ?></th>
            <td><?= $livroFisico->alugado ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
