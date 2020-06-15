	<!DOCTYPE html>
<html>
<head>
	<title>Proyeccion social-<?php echo $__env->yieldContent('title'); ?></title>
	<link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
  <!-- Brand -->
  <a class="navbar-brand" href="#">Logo</a>

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#"></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>

    <!-- Dropdown -->
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Empresas
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/instituciones/create">Nueva empresa</a>
        <a class="dropdown-item" href="/instituciones/">Listado de empresas</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>

     <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
        Proyectos
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="/proyectos/create">Nuevo proyecto</a>
        <a class="dropdown-item" href="/proyectos/">Listado de proyectos</a>
        <a class="dropdown-item" href="#">Link 3</a>
      </div>
    </li>
  </ul>
</nav>
<?php echo $__env->yieldContent('content'); ?>
 <script src="<?php echo e(asset('js/app.js')); ?>"></script> 
</body>