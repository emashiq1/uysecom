<?php $__env->startSection('content'); ?>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<?php echo e(Auth::user()->id); ?>

			<table class="table">
				<tr>
					<th>SL</th>
					<th>Name</th>
					<th>Create Date</th>
					<th>Update Date</th>
					<th colspan="2">Action</th>
				</tr>
				<?php 
					$sl=1;
				 ?>
				<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
				<tr>
					<td><?php echo e($sl); ?></td>
					<td><?php echo e($item->name); ?></td>
					<td><?php echo e(Carbon\Carbon::parse($item->created_at)->format('d-m-y')); ?></td>
					<td><?php echo e(Carbon\Carbon::parse($item->updated_at)->format('d-m-y')); ?></td>
					<td><a class="btn btn-success" href="<?php echo e(URL::to('products/' . $item->id . '/edit')); ?>">Edit</a></td>
					<td>
						<?php echo e(Form::open(array('url' => 'products/' . $item->id, 'class' => ''))); ?>

		                    <?php echo e(Form::hidden('_method', 'DELETE')); ?>

		                    <?php echo e(Form::submit('Delete', array('class' => 'btn btn-warning'))); ?>

		                <?php echo e(Form::close()); ?>

            		</td>
				</tr>
				<?php 
					$sl++;
				 ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
			</table>
		</div>
	</div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>