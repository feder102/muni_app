<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image[]|\Cake\Collection\CollectionInterface $images
 */
?>
<!-- <div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>Productos</h2>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            
        </table>
    </div>
    
    <div class="paginator">
        <ul class="pagination">
            <?php //$this->Paginator->prev('< Anterior') ?>
            <?php //$this->Paginator->numbers('< Anterior')?>
            <?php //$this->Paginator->next('Siguiente >')?>
        </ul>
        <p><?php //$this->Paginator->counter('{{page}} de {{pages}}')?></p>
    </div>
</div> -->

<div class="row">
    <div class="col-md-12">
        <div class="page-header">
            <h2>
                Productos
                <?= $this->Html->link('<span class="glyphicon glyphicon-plus"></span> Nuevo', ['controller'=>'images','action'=>'add'], ['class'=>'btn btn-sm btn-primary pull-right', 'escape'=>false]) ?>
            </h2>
        </div>
    </div>
    <div class="table-responsive">
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('quantity') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('photo_dir') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                    <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                    <th scope="col" class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($images as $image): ?>
                <tr>
                    <td><?= $this->Number->format($image->id) ?></td>
                    <td><?= h($image->name) ?></td>
                    <td><?= $this->Number->format($image->quantity) ?></td>
                    <td><?= $this->Number->format($image->price) ?></td>
                    <td><?= h($image->photo) ?></td>
                    <td><?= h($image->photo_dir) ?></td>
                    <td><?= h($image->created) ?></td>
                    <td><?= h($image->modified) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $image->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $image->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $image->id], ['confirm' => __('Are you sure you want to delete # {0}?', $image->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
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



