<?php $__env->startSection('content'); ?>
	<h2>Add New Product</h2>
	<hr>
	<div class="col-md-6">
		<?php echo Form::model(Request::old(), ['route'=>'products.store','class'=>'form-group','files'=>true,'method'=>'post']); ?>


		<div class="">
	<?php echo Form::label('title', '', []); ?>

	<?php echo Form::text('title', null, ['class'=>'form-control']); ?>

	<?php echo Form::label('category', '', []); ?>

	<select name="category_id" class="form-control">
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<option value="<?php echo e($element->id); ?>"><?php echo e($element->title); ?></option>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</select>
	<?php echo Form::label('description', '', []); ?>

	<?php echo Form::textarea('description', '', []); ?>

	<?php echo Form::label('price', 'Price in BDT', []); ?>

	<?php echo Form::number('price', '', ['class'=>'form-control']); ?>

	<?php echo Form::label('status', '', []); ?>

	<?php echo e(Form::select('status',config('myhelpers.status'),null,array('class' => 'form-control'))); ?>


	<hr>
	</div>
	
	
	<div class="col-md-12" id="photofile">
	<button type="button" class="btn btn-default btn-file" id="addmore" style="float:right">Add New</button>
	<br>
	<?php echo Form::label('file','Choose File' , []); ?>

   <?php echo Form::file('image[]', []); ?>


	</div>
	
	<?php echo Form::submit("Save", ['class'=>'btn btn-info','style'=>'margin-top:20px;margin-left:17px;width:100px;']); ?>

	
	<?php echo Form::close(); ?>

	</div>

	
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
	<script>
	$("#addmore").on("click",function(){
		$("#photofile").append("<label for=\"file\">Choose File</label><input name=\"image[]\" type=\"file\">")});

	</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>