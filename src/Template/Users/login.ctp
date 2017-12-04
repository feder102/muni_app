<!--Pulling Awesome Font -->
<!-- <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet"> -->
<?= $this->Html->css('login') ?>
    <div class="row">
        <div class="col-md-offset-3" style="float: none; margin: 0 auto;">
        <?= $this->Flash->render('auth')?>
        <?= $this->Form->create() ?>
            <div class="form-login">
                <h4>Iingrese sus datos.</h4>
                <?= $this->Form->input('username',['class'=>'form-control input-lg','placeholder'=>'Nombre de usuario.','label'=>false,'required']) ?>
                </br>
                <?= $this->Form->input('password',['class'=>'form-control input-lg','placeholder'=>'Contraseña.','label'=>false,'required']) ?>
                </br>
                <div class="wrapper">
                    <span class="group-btn">     
                        <?= $this->Form->button('Acceder  <i class="fa fa-sign-in ml-1"></i>',['class'=>'btn btn-primary btn-md'])?>
                    </span>
                </div>
            </div>
        <?= $this->Form->end()?>
        </div>
    </div>
