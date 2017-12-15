<div class="row">
    <div class="col-md-12 mb-5">
        <div class="col-md-6 col-sm-6 col-md-offset-3">
            <div class="page-header">
                <h2>Agregar imagen</h2>
            </div>
            <?= $this->Form->create('clientes',['type' => 'file','url' => ['controller'=>'clientes','action' => 'import'],'class'=>'form-inline','role'=>'form']); ?>
                <fieldset>
                <?php
                    /*echo $this->Form->control('name');
                    echo $this->Form->control('description');
                    echo $this->Form->control('quantity');
                    echo $this->Form->control('price');*/
                    echo $this->Form->control('csv', ['type' => 'file','class'=>'filestyle','data-buttonName'=>'btn-primary',
                        'data-buttonText'=>'Examinar..']);
                    
                ?>
            </fieldset>
            <h2>
                <?= $this->Html->link('Importar clientes', ['controller'=>'clientes','action'=>'import'],['class'=>'btn btn-sm btn-primary']) ?>
            </h2>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
