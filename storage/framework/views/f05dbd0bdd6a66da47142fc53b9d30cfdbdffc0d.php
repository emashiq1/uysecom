<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width, initial-scale=1" name="viewport">
    <meta name="author" content="mipellim">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title><?php echo $__env->yieldContent('title','Admin App'); ?></title>
	  <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>">
    <!-- CSRF Token -->    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>" />
     <!-- Bootstrap -->
    <link href="<?php echo e(asset('css/backend-app.css')); ?>" rel="stylesheet">
    <!-- only custom css section start -->
          	 <?php echo $__env->yieldContent('css'); ?>
	  <!-- only custom css section end -->
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Scripts -->
     <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
  </head>

  <body>
<div class="container-fluid">
   <div class="row">
    <!-- header section start -->
     <?php echo $__env->make('admin.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <!-- header section end -->
    
        <!-- nav section start -->
         <?php echo $__env->make('admin.nav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- nav section end -->

        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
           <!--for validation error start-->     
           <div class="flash-message">           
              <?php $__currentLoopData = ['danger', 'warning', 'success', 'info']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $msg): $__env->incrementLoopIndices(); $loop = $__env->getFirstLoop(); ?>
                <?php if(Session::has('flash_' . $msg)): ?>
                <p class="alert alert-<?php echo e($msg); ?>"><a href="#" class="close" data-dismiss="alert">&times;</a> <strong> <?php echo e($msg); ?>!!</strong> <?php echo e(Session::get('flash_' . $msg)); ?></p>
                <?php endif; ?>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getFirstLoop(); ?>
            </div>
            <!--for validation error end-->
            
            <!-- main content section start -->
              <?php echo $__env->yieldContent('content','No Content Found'); ?>
      			<!-- main content section start --> 

            <!-- debug section start --> 
            <div class="row">      
              <?php               
                /*$queries = DB::getQueryLog(); 
                $last_query = end($queries); 
               echo '<pre>',var_dump($queries),'</pre>'; */       
              //print_r($last_query);
              ?>       
            </div>
            <!-- debug section end --> 
        </div>
        <!-- footer section start -->
         <?php echo $__env->make('admin.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <!-- footer section end -->

        <!-- modals section start -->
           <?php echo $__env->yieldContent('modals'); ?>
        <!-- modals section end -->

      </div>
    </div>

  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
    <script src="<?php echo e(asset('js/backend-app.js')); ?>"></script>
  <!-- only custom "script with PHP Page" section start -->  
  
  <script src="<?php echo e(asset('vendor/unisharp/laravel-ckeditor/ckeditor.js')); ?>"></script>
  <script src="<?php echo e(asset('vendor/unisharp/laravel-ckeditor/adapters/jquery.js')); ?>"></script>
     <script>
        $('textarea').ckeditor();
        // $('.textarea').ckeditor(); // if class is prefered.
    </script>
             <?php echo $__env->make('ajaxs.php_script', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>;
  <!-- only custom "script with PHP Page"  section start -->
    
  <!-- only custom script section start -->
             <?php echo $__env->yieldContent('script'); ?>
  <!-- only custom script section start -->  
 </body>   
</html>
