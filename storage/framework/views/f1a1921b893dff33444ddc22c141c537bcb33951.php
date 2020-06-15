<?php $__env->startSection('title','Institucion'); ?>

<?php $__env->startSection('content'); ?>
	<div class="text-center" style="padding-top: 50px">
		<h1><?php echo e($institucion->nombreInst); ?></h1>
	</div>
	
	<?php echo Form::open(['class'=>'form-inline','style'=>'padding-left:270px; padding-top:50px']); ?>

		<?php echo Form::label('nomProy','Nombre del proyecto'); ?>

		<?php echo Form::text('nomProy',null,['class'=>'form-control mr-sm-2','placeholder'=>'Buscar']); ?>

			
		<?php echo Form::submit('Buscar',['class'=>'btn btn-success']); ?>

	<?php echo Form::close(); ?>


	<table class="table table-border table-hover" style="text-align: center;"">
		<thead>
			<tr>
				<th>Proyecto</th>
				<th>Acciones</th>
			</tr>
		</thead>

		<tbody>
		<?php $__currentLoopData = $proyectos; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $proyecto): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<tr>
				<td><?php echo e($proyecto->nomProy); ?></td>
				<td>
					<a type="submit" href="#" class="btn btn-info">Ver</a>
					<a type="submit" href="#" class="btn btn-danger">Eliminar</a>
				</td>
			</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</tbody>
	</table>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>