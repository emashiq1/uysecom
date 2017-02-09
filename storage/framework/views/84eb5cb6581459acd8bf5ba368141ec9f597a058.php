<?php $__env->startSection('content'); ?>
    <div class="row">
       
       
          
	<h1 class="overview-heading">Overview of admin dashboard</h1>
    </div>
    <div class="row block-parent"> 
      <div class="block-content">
        <h3>User Overview</h3>
        <ul>
        <?php  $totalUsers=0; ?>
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $userkey=>$userval): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>  
        	<?php  
        		$totalUsers+=$userval->total;
        	 ?> 
          <li><span><?php echo e(ucfirst($userval->status)); ?> Users</span> <span class="<?php echo e($userval->status); ?>"><?php echo e($userval->total); ?></span></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
        <li><span>Total Users</span> <span><?php echo e($totalUsers); ?></span></li>
        </ul>
      </div>
  
      
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>