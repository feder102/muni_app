<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Image $image
 */
?>
<!-- <div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Agregar imagen</h2>
        </div>
        <form action="">
            <fieldset>
                
            </fieldset>
            <?php //$this->Form->button('Agregar imagen'); ?>
        </form>
    </div>
</div> -->

<div class="row">
    <div class="col-md-6 col-sm-6 col-md-offset-3">
        <div class="page-header">
            <h2>Agregar imagen</h2>
        </div>
        <?= $this->Form->create($image, ['type' => 'file']);?> 
            <fieldset>
            <?php
                echo $this->Form->control('name');
                echo $this->Form->control('description');
                echo $this->Form->control('quantity');
                echo $this->Form->control('price');
                echo $this->Form->control('photo', ['type' => 'file','class'=>'filestyle','data-buttonName'=>'btn-primary',
                    'data-buttonText'=>'Examinar']);
                
            ?>
        </fieldset>
        <?= $this->Form->button('Agregar imagen'); ?>
        <?= $this->Form->end() ?>
    </div>
</div>
