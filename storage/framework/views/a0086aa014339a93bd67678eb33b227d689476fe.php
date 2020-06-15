<?php $__env->startSection('title','Nuevo proyecto'); ?>

<?php $__env->startSection('content'); ?>
	<?php echo Form::open(['route'=>'proyectos.store','method'=>'POST']); ?>

		<?php echo $__env->make('proyectos.form', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
		<div class="container">
			<div class="form-group" style="padding-left: 50px; margin-top: 50px">
				<label><strong>Proyecto</strong></label>
				<select class="form-control " style="width: 290px" name="institucion">
					<option>Seleccione la institución</option>
					<?php $__currentLoopData = $instituciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<option value="<?php echo e($institucion->id); ?>"><?php echo e($institucion->nombreInst); ?></option>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			</select><br>
			<?php echo Form::submit('Guardar',['class'=>'btn btn-primary']); ?>

			</div>
		</div>
	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>