<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <div class="col-md-6 col-md-offset-3">
        <div class="page-header">
            <h2>Agregar Usuario</h2>
        </div>
        <?= $this->Form->create($user) ?>
            <fieldset>
                <?php
                    echo $this->Form->control('username');
                    echo $this->Form->control('password');
                    echo $this->Form->input('role', [
                        'options' => ['Administrador' => 'Administrador', 'Usuario' => 'Usuario']
                        ]);
                ?>
            </fieldset>
            <?= $this->Form->button('Agregar Usuario') ?>
        <?= $this->Form->end() ?>
    </div>
</div>

