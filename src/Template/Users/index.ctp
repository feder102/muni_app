<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="row">
    <div class="col-md-12 mb-5">
        <div class="page-header">
            <h2>
                Usuarios 
                <?= $this->Html->link('Agregar usuario', ['controller'=>'users','action'=>'add'],['class'=>'btn btn-sm btn-primary pull-right']) ?>
            </h2>

        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('username') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('role') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
            <tr>
                <td><?= $this->Number->format($user->id) ?></td>
                <td><?= h($user->username) ?></td>
                <td><?= h($user->password) ?></td>
                <td><?= h($user->role) ?></td>
                <td><?= h($user->created) ?></td>
                <td class="actions col-md-4 col-sm-4">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $user->id],['class'=>'btn btn-sm btn-primary']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $user->id],['class'=>'btn btn-sm btn-warning']) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $user->id],['class'=>'btn btn-sm btn-danger'], ['confirm' => __('Eliminar usuario # {0}?', $user->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
        </table>
    </div>
    
    <div class="row mb-5">
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('Primero')) ?>
                <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
                <?= $this->Paginator->last(__('Ultimo') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} record(s) out of {{count}} total')]) ?></p>
        </div>
    </div>
</div>