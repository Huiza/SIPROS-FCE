<?php $__env->startSection('title','Listado de instituciones'); ?>

<?php $__env->startSection('content'); ?>

	<?php echo Form::open(['class'=>'form-control','style'=>'padding-left:270px; padding-top:50px']); ?>

		<?php echo Form::label('nombreInst','Nombre de la empresa'); ?>

		<?php echo Form::text('nombreInst',null,['class'=>'form-control','class'=>'col-xs-5','placeholder'=>'Buscar']); ?>

			
		<?php echo Form::submit('Buscar',['class'=>'btn btn-success']); ?>


		<a href="<?php echo e(route('instituciones.create')); ?>" type="submit" class="btn btn-primary"/>+Agregar
			</a>
	<?php echo Form::close(); ?>


<table class="table table-bordered table-hover" style="text-align: center;">
	<thead>
		<tr>
			<th>N°</th>
			<th>Institución</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>
		<?php $__currentLoopData = $instituciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $institucion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($institucion->id); ?></td>
			<td><?php echo e($institucion->nombreInst); ?></td>
			<td>
				<a href="/instituciones/ <?php echo e($institucion->id); ?>" class=" btn btn-info">Ver proyectos</a>
				<a href="#" class=" btn btn-primary">Editar</a>
				<a href="#" class=" btn btn-danger">Eliminar</a>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	</tbody>

</table>
<?php $__env->stopSection(); ?>
<!--fieldset>
			<legend>Indicador 1</legend>
			<input type="checkbox" checked="checked" style="visibility: hidden;">
			<label>
				<input type="radio" name="">nota 1
			</label>
			<label>
			
			<input type="radio" name="">nota 2
			</label>
			<label>
				<input type="radio" name="">nota 3
			</label>
		</fieldset-->
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>