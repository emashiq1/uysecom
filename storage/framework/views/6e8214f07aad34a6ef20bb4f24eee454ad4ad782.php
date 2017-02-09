<?php $__env->startSection('content'); ?>
<div>
	
	<table class="table">
	<caption>Categories List</caption>
	<thead>
		<tr>
			<th>Title</th>
			<th>Status</th>
			<th>Parent Id</th>
			
		</tr>
	</thead>
	<tbody>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>

			<td><?php echo e($element->title); ?></td>
			<td><?php echo e($element->status); ?></td>
			<td><?php echo e($element->parent_id); ?></td>
			<td><a href="<?php echo e(route('category.edit',$element->id)); ?>">Update</a></td>
			
			
		</tr>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</tbody>
</table>	
	</div>	

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>