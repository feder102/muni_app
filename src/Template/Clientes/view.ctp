<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Cliente'), ['action' => 'edit', $cliente->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Cliente'), ['action' => 'delete', $cliente->id], ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Cliente'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="clientes view large-9 medium-8 columns content">
    <h3><?= h($cliente->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($cliente->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Cod Client') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->cod_client)); ?>
    </div>
    <div class="row">
        <h4><?= __('Cod Vended') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->cod_vended)); ?>
    </div>
    <div class="row">
        <h4><?= __('Cod Zona') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->cod_zona)); ?>
    </div>
    <div class="row">
        <h4><?= __('Cond Vta') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->cond_vta)); ?>
    </div>
    <div class="row">
        <h4><?= __('Razon Soci') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->razon_soci)); ?>
    </div>
    <div class="row">
        <h4><?= __('Domicilio') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->domicilio)); ?>
    </div>
    <div class="row">
        <h4><?= __('Tipo Doc') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->tipo_doc)); ?>
    </div>
    <div class="row">
        <h4><?= __('Cuit') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->cuit)); ?>
    </div>
    <div class="row">
        <h4><?= __('Telefono 1') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->telefono_1)); ?>
    </div>
    <div class="row">
        <h4><?= __('Telefono 2') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->telefono_2)); ?>
    </div>
    <div class="row">
        <h4><?= __('Email') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->email)); ?>
    </div>
    <div class="row">
        <h4><?= __('Fecha Alta') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->fecha_alta)); ?>
    </div>
    <div class="row">
        <h4><?= __('Cupo Credi') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->cupo_credi)); ?>
    </div>
    <div class="row">
        <h4><?= __('Nom Com') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->nom_com)); ?>
    </div>
    <div class="row">
        <h4><?= __('Dir Com') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->dir_com)); ?>
    </div>
    <div class="row">
        <h4><?= __('Localidad') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->localidad)); ?>
    </div>
    <div class="row">
        <h4><?= __('C Postal') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->c_postal)); ?>
    </div>
    <div class="row">
        <h4><?= __('Provincia') ?></h4>
        <?= $this->Text->autoParagraph(h($cliente->provincia)); ?>
    </div>
</div>
