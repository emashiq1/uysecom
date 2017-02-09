<?php $__env->startSection('content'); ?> 
<h1 class="page-header">User Create <?php echo e(link_to_route('users.index','User lists',null,array('class'=>'btn btn-success pull-right'))); ?></h1>
<div class="row">
    <form class="form-horizontal" role="form" method="POST" action="<?php echo e(url('/register')); ?>">
        <?php echo e(csrf_field()); ?>

        <div class="form-group<?php echo e($errors->has('name') ? ' has-error' : ''); ?>">
            <label for="name" class="control-label col-sm-2">Name</label>

            <div class="col-md-6">
                <input id="name" type="text" class="form-control" name="name" value="<?php echo e(old('name')); ?>" required autofocus>

                <?php if($errors->has('name')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('name')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="control-label col-sm-2">Role</label>
            <div class="col-md-6"> 
            <?php echo e(Form::select('role_id',$roles,null,array('class' => 'form-control'))); ?> 
            </div>
             <?php echo e($errors->first('role_id', '<p class="text-danger">:message</p>' )); ?>   
        </div>


        <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
            <label for="email" class="control-label col-sm-2">E-Mail Address</label>
            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="<?php echo e(old('email')); ?>" required>

                <?php if($errors->has('email')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
            <label for="password" class="control-label col-sm-2">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                <?php if($errors->has('password')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group<?php echo e($errors->has('password_confirmation') ? ' has-error' : ''); ?>">
            <label for="password-confirm" class="control-label col-sm-2">Confirm Password</label>

            <div class="col-md-6">
                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                <?php if($errors->has('password_confirmation')): ?>
                    <span class="help-block">
                        <strong><?php echo e($errors->first('password_confirmation')); ?></strong>
                    </span>
                <?php endif; ?>
            </div>
        </div>

        <div class="form-group">
            <label for="email" class="control-label col-sm-2">Status</label>
            <div class="col-md-6"> 
            <?php echo e(Form::select('status',config('myhelpers.status'),null,array('class' => 'form-control'))); ?> 
            </div>
              
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-2">
                <button type="submit" class="btn btn-primary">
                    Register
                </button>
            </div>
        </div>
    </form>
</div>   
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>