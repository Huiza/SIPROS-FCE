<?php $__env->startSection('title','Listado de habitaciones'); ?>

<?php $__env->startSection('content'); ?>

<form class="form-group">
	<label>Tipo de habitación</label>
		<select class="form-control">
			<option>Seleccione el tipo</option>
			<option value="1">Doble</option>
			<option value="2">Matrimonial</option>
			<option value="3">Simple</option>
		</select>
		<a href="#"><button class="btn btn-primary" type="submit">Buscar</button></a>
		<a class="btn btn-primary" href="<?php echo e(route('habitacion.create')); ?>" type="submit"> Nueva habitación</a>
</form>

<br><br>

<table class="table table-bordered table-hover ">
	<thead>
		<tr>
			<th>Tipo</th>
			<th>Nivel</th>
			<th>Acciones</th>
		</tr>
	</thead>

	<tbody>
		<?php $__currentLoopData = $habitaciones; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $habitacion): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
		<tr>
			<td><?php echo e($habitacion->tipo); ?></td>
			<td><?php echo e($habitacion->nivel); ?></td>
			<td>
				<div class="btn-group col-xs-4">
					<?php echo Form::open(['route'=>['habitacion.show',$habitacion->slug], 'method'=>'GET']); ?>

						<?php echo Form::submit('Ver',['class'=>'btn btn-primary']); ?>

					<?php echo Form::close(); ?>


					<?php echo Form::open(['route'=>['habitacion.edit',$habitacion->slug], 'method'=>'GET']); ?>


						<?php echo Form::submit('Editar',['class'=>'btn btn-primary ']); ?>

		
					<?php echo Form::close(); ?>


					<?php echo Form::open(['route'=>['habitacion.destroy',$habitacion->slug], 'method'=>'DELETE']); ?>


						<?php echo Form::submit('Eliminar',['class'=>'btn btn-danger']); ?>

		
					<?php echo Form::close(); ?>

				</div>
			</td>
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
	</tbody>
</table>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>