<?php $__env->startSection('content'); ?>
<div class="col-md-6">
<?php echo e(dump($errors)); ?>


	
	
	
	<h2>Add New Category</h2>
	<?php echo Form::model(Request::old(), ['route' => 'category.store','class'=>'form-group']); ?>

	<div>
		<?php echo Form::label('Title', '', []); ?>

	<?php echo Form::text('title', '', ['class'=>'form-control']); ?>

	<?php if($errors->has('title')): ?>
		<span class="alert-warning"><?php echo e($errors->first('title')); ?></span>
	<?php endif; ?>
	</div>
	<div>
	<?php echo Form::label('Status', '', []); ?>

	<?php echo Form::text('Status', '', ['class'=>'form-control']); ?>

	
	<?php if($errors->has('status')): ?>
		<span class="alert-warning"><?php echo e($errors->first('status')); ?></span>
	<?php endif; ?>
	</div>
	<?php echo Form::label('Parent Category', '', []); ?>

	<select name="parent_id" class="form-control">
		<option value="0">Select</option>}
		
		<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($element->id); ?>"><?php echo e($element->title); ?></option>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	
	<br>
	<?php echo Form::submit('Save', ['class'=>'btn btn-info']); ?>

	<?php echo Form::close(); ?>

</div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>