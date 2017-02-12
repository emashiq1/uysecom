<?php $__env->startSection('content'); ?>
<div>
	
	<table class="table">
	<caption>Categories List</caption>
	<thead>
		<tr>
			<th>Serial No</th>
			<th>Title</th>
			<th>Status</th>
			<th>Parent Category Name</th>
			
		</tr>
	</thead>
	<tbody>
	<?php 
		$i=1;
	 ?>
	<?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $element): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
		<tr>
			<td><?php echo e($i); ?></td>
			<td><?php echo e($element->title); ?></td>
			<td><?php echo e($element->status); ?></td>
			
			<td>
			<?php echo e($element->Categories['title']); ?>

				<?php if($element->Categories['id']==0): ?>
				<?php echo e('Root Category'); ?>

			<?php endif; ?>

			</td>
			<td><a href="<?php echo e(route('categories.edit',$element->id)); ?>" class="glyphicon glyphicon-edit"></a>
			<?php echo Form::delete(route('categories.destroy',$element->id)); ?>

			</td>
			
			
		</tr>
		<?php 
			$i++;
		 ?>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
	</tbody>
</table>	
	</div>	

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>