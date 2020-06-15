<div class="form-group" style="padding-left: 50px; margin-top: 50px">
	<?php echo Form::label('tipo','Tipo'); ?>

	<?php echo Form::text('tipo',null,['class'=>'form-control','class'=>'col-xs-5']); ?>

</div><br><br>
		
<div class="form-group" style="margin-left: 50px">
	<?php echo Form::label('nivel','Nivel'); ?>

	<?php echo Form::number('nivel',null,['class'=>'form-control','class'=>'col-xs-5']); ?>

</div><br><br>

<div class="form-group" style="margin-left: 50px">
	<?php echo Form::label('slug','Slug'); ?>

	<?php echo Form::text('slug',null,['class'=>'form-control','class'=>'col-xs-5']); ?>

</div><br><br>

<div class="form-group" style="margin-left: 50px">
	<?php echo Form::label('cuarto','Cuarto'); ?>

	<?php echo Form::file('cuarto'); ?>

</div><br><br>
