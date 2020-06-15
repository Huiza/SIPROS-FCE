<?php $__env->startSection('title', 'Gestionar Kardex'); ?>

<?php $__env->startSection('content'); ?>
	<?php echo Form::open(['route'=>'kardex.index','method'=>'POST']); ?>

	<?php echo Form::close(); ?>


	<table>
		<thead>
			<th>N°</th>
			<th>Medicamento</th>
			<th>Acciones</th>
		</thead>

		<tbody>
			<tr>
				<td>1</td>
				<td>Cofal fuerte</td>
				<td></td>
			</tr>
		</tbody>
	</table>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>