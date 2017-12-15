<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Cliente $cliente
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $cliente->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $cliente->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Clientes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="clientes form large-9 medium-8 columns content">
    <?= $this->Form->create($cliente) ?>
    <fieldset>
        <legend><?= __('Edit Cliente') ?></legend>
        <?php
            echo $this->Form->control('cod_client');
            echo $this->Form->control('cod_vended');
            echo $this->Form->control('cod_zona');
            echo $this->Form->control('cond_vta');
            echo $this->Form->control('razon_soci');
            echo $this->Form->control('domicilio');
            echo $this->Form->control('tipo_doc');
            echo $this->Form->control('cuit');
            echo $this->Form->control('telefono_1');
            echo $this->Form->control('telefono_2');
            echo $this->Form->control('email');
            echo $this->Form->control('fecha_alta');
            echo $this->Form->control('cupo_credi');
            echo $this->Form->control('nom_com');
            echo $this->Form->control('dir_com');
            echo $this->Form->control('localidad');
            echo $this->Form->control('c_postal');
            echo $this->Form->control('provincia');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
