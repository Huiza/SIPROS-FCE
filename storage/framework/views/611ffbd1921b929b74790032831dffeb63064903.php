<?php $__env->startSection('title','Habitación'); ?>

<?php $__env->startSection('content'); ?>
	<?php if(session('status')): ?>
		<div class="alert alert-success">
			<?php echo e(session('status')); ?>

		</div>
	<?php endif; ?>
	<img style="height: 10px width:15px;background-color: ]#EFEFEF;margin: 20px " class="card-img-top rounded-circle mx-auto d-block" src="/images/<?php echo e($habitacion->cuarto); ?>" alt=""><br>
	<div class="text-center">
		<h1 class="card-title"><?php echo e($habitacion->slug); ?></h1>
	</div>
	

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>