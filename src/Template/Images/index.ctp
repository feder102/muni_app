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
<?= $this->Html->link('Nuevo <span class="fa fa-plus ml-1"></span>', ['controller'=>'images','action'=>'add'], ['class'=>'btn btn-sm btn-primary pull-right', 'escape'=>false]) ?>
<div class="row mb-5">
    <div class="page-header">
        <h2>
            Productos            
        </h2>
    </div>
</div>
<div class="row mt-5">
    <?php foreach ($images as $image): ?>
    <div class="col-md-3 mb-4">
        <section>
          <article class="well">
              <h3> <?= h($image->name) ?></h3>
              <?= $this->Html->image('../files/images/photo/'. $image->photo_dir . '/square_' . $image->photo, ['alt'=> $image->name,'class'=>'img-responsive img-thumbnail center-block']) ?>
              <p>
                  <br>
                  <strong> Cantidad: </strong><?= h($image->quantity) ?>
                  <br>
                  <strong> Precio: </strong><?= h($image->price) ?>
              </p>
              <?= $this->Html->link('Ver', ['action'=>'view', $image->id],['class'=>'btn btn-sm btn-info'])?>
              <?= $this->Html->link('Editar', ['action'=>'edit', $image->id],['class'=>'btn btn-sm btn-warning'])?>
              <?= $this->Form->postLink('Eliminar', ['action' => 'delete', $image->id], ['confirm' => 'Eliminar publicación?','class'=>'btn btn-sm btn-danger']) ?>
          </article>  
        </section>
    </div> 
    <?php endforeach; ?>  
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



