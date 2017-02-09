<?php $__env->startSection('content'); ?>
<div class="row">	
	<div class="col-md-8">
		<?php echo e(Form::model($data,['route'=>['products.update',$data->id],'method'=>'PUT'])); ?>

			<div class="form-group">
				<?php echo e(Form::label('name', null, array('class' => 'control-label'))); ?>

    			<?php echo e(Form::text('name', null, array('class' => 'form-control'))); ?>

			</div>
				<?php echo e(Form::submit('Update',array('class'=>'btn btn-primary'))); ?>

		<?php echo e(Form::close()); ?>

	</div>
</div>	 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>