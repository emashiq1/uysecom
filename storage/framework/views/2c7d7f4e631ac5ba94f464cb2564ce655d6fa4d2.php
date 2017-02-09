<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>Create Date</th>
					<th>Update Date</th>
				</tr>
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<tr>
					<td><?php echo e($item->id); ?></td>
					<td><?php echo e($item->name); ?></td>
					<td><?php echo e($item->created_at); ?></td>
					<td><?php echo e($item->updated_at); ?></td>
				</tr>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</table>
		</div>
	</div>
</div>


<?php echo e($products); ?>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>