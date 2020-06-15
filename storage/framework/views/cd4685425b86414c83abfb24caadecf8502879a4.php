<?php $__env->startSection('title', 'Editar habitación'); ?>

<?php $__env->startSection('content'); ?>
	<?php echo Form::model($habitacion,['route'=>['habitacion.update',$habitacion],'method'=>'PUT','files'=>true]); ?>


		<?php echo $__env->make('habitaciones.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo Form::submit('Actualizar',['class'=>'btn btn-primary']); ?>


	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>