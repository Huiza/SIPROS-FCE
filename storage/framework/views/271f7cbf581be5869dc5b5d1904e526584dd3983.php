<?php $__env->startSection('title', 'Nueva habitación'); ?>

<?php $__env->startSection('content'); ?>
	<?php if($errors->any()): ?>
		<div class="alert alert-danger">
			<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div
	<?php endif; ?>
	
	<?php echo Form::open(['route'=>'habitacion.store','method'=>'POST','files'=>true]); ?>


		<?php echo $__env->make('habitaciones.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<?php echo Form::submit('Guardar',['class'=>'btn btn-primary']); ?>

	
	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>