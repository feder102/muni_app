<nav class="navbar navbar-expand-lg fixed-top navbar-dark bg-primary">
  <a class="navbar-brand" href="#">Probox
  <?= $this->Html->image('../img/logo.png', ['width'=>'¨60','height'=>'30','alt'=>'']) ?>
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Usuario
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?= $this->Html->link('Listar', ['controller'=>'users','action'=>'index'],['class'=>'dropdown-item']) ?>
        <?= $this->Html->link('Agregar usuario', ['controller'=>'users','action'=>'add'],['class'=>'dropdown-item']) ?>
        <?= $this->Html->link('Desconectarse', ['controller'=>'users','action'=>'logout'],['class'=>'dropdown-item']) ?>
          <!-- <a class="dropdown-item" href="#">Listar</a> -->
        </div>
      </li>
      <!-- <li class="nav-item">
        <a class="nav-link" href="#">Features</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Pricing</a>
      </li> -->
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Productos
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
        <?= $this->Html->link('Listar', ['controller'=>'images','action'=>'index'],['class'=>'dropdown-item']) ?>
        <?= $this->Html->link('Agregar', ['controller'=>'images','action'=>'add'],['class'=>'dropdown-item']) ?>
          <!-- <a class="dropdown-item" href="#">Listar</a> -->
        </div>
      </li>
    </ul>
  </div>
</nav>


<!-- <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href=""><?php //$this->fetch('title') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="right">
                <li><a target="_blank" href="https://book.cakephp.org/3.0/">Documentation</a></li>
                <li><a target="_blank" href="https://api.cakephp.org/3.0/">API</a></li>
            </ul>
        </div>
    </nav> -->