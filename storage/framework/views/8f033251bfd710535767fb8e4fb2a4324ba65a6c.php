
<?php $__env->startSection('title', 'User Lists'); ?>
<?php $__env->startSection('content'); ?>
<h1 class="page-header">User Lists <?php echo e(link_to('/register','Add User',array('class'=>'btn btn-success pull-right'))); ?></h1> 
<?php echo e(session()->get('langsname')); ?>

      <div class="row">
        <div class="col-sm-12 col-md-12">        
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>SI NO.</th>
                  <th>Name</th>                  
                  <th>Email</th>
                  <th>Role</th>
                  <th>Status</th>
                  <th>Action</th> 
                </tr>
              </thead>
              <tbody>  
   
              <?php ($i=1); ?>
              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $data): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?> 
                  <tr>
                  <td><?php echo e($i); ?></td>                  
                  <td><?php echo e($data->name); ?></td>                 
                  <td><?php echo e($data->email); ?></td>
                  <td><?php echo e($data->role->name); ?></td>
                  <td><?php echo e($data->status); ?></td>
                  <td> 
                  </td>
                </tr>
                <?php ($i=$i+1); ?>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>                  
                </tbody>
                </table>
                </div>
                
        </div>
      </div>        
<?php $__env->stopSection(); ?> 



<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>