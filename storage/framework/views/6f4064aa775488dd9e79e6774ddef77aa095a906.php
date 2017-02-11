
<?php $__env->startSection('title', 'Update Site Settings'); ?>
<?php $__env->startSection('content'); ?>
<h1 class="page-header">Update Site Settings</h1>   
 <?php echo e(Form::model($site_settings,array('route' => array('site_settings.update',$site_settings->id),'enctype'=>'multipart/form-data','method' => 'PUT','class'=>'form-horizontal'))); ?>  
	<div class="row">

			<div class="form-group">
				<?php echo e(Form::label('Site Name:',null,array('class' => 'control-label col-sm-2'))); ?>

				<div class="col-md-6">	
				<?php echo e(Form::text('name',null,array('class' => 'form-control'))); ?>

	            <?php echo $errors->first('name', '<p class="text-danger">:message</p>' ); ?>

				</div>
			</div>	

			<div class="form-group">
				<?php echo e(Form::label('Email Address:',null,array('class' => 'control-label col-sm-2'))); ?>

				<div class="col-md-6">	
				<?php echo e(Form::text('email',null,array('class' => 'form-control'))); ?>

	            <?php echo $errors->first('email', '<p class="text-danger">:message</p>' ); ?>

				</div>
			</div>	
		
			<div class="form-group">
				<?php echo e(Form::label('Company Logo:',null,array('class' => 'control-label col-sm-2'))); ?>

				<div class="col-md-6">
	                <?php echo e(Form::file('logo',array('onChange'=>'readURL(this)'))); ?>

	                <?php echo $errors->first('logo', '<p class="text-danger">:message</p>' ); ?>

	                <?php echo e(Form::hidden('old_image',$site_settings->logo)); ?>

				</div>			

	            <div class="col-md-4 preview-div">
						<?php echo e(HTML::image('images/sites/site_settings/'.$site_settings->logo,null,array('width'=>'100','class'=>'img-responsive'))); ?>	
				</div> 
			</div>

			 <div class="form-group">
				<?php echo e(Form::label('Alt Image:',null,array('class' => 'control-label col-sm-2'))); ?>

				<div class="col-md-6">	
				<?php echo e(Form::text('logo_alt',null,array('class' => 'form-control'))); ?>

	            <?php echo $errors->first('logo_alt', '<p class="text-danger">:message</p>' ); ?>

				</div>
			</div>	
			

            <div class="form-group">
                <div class="col-md-6 col-md-offset-2">
                    <button type="submit" class="btn btn-primary">
                        Update Settings
                    </button>
                </div>
            </div>
	</div>
 <?php echo e(Form::close()); ?>

<?php $__env->stopSection(); ?> 
<?php echo $__env->make('layouts.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>