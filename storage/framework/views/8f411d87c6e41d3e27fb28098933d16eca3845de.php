<?php $__env->startSection('content'); ?>
	<h1>Hola</h1>
	      <div id="app" class="content">
                <proyectos-component></proyectos-component><!--Añadimos nuestro componente vuejs-->
            </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>