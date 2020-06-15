<?php $__env->startSection('title','Nueva institución'); ?>

<?php $__env->startSection('content'); ?>
	<h2>Nueva institución</h2>
		<?php if($errors->any()): ?>
		<div class="alert alert-danger">
			<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</ul>
		</div
	<?php endif; ?>
	
	<?php echo Form::open(['route'=>'instituciones.store','method'=>'POST','class'=>'was-validated']); ?>

	<div class="container">
		<div class="form-group" style="padding-left: 50px; margin-top: 50px">
			<?php echo $__env->make('instituciones.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
			<?php echo Form::submit('Guardar',['class'=>'btn btn-primary']); ?>

		</div>
	</div>
	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>