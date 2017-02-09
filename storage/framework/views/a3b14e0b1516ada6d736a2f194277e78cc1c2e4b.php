 <header>
    <div class="container-fluid">
      <div class="row">
        <div class="col-xs-12 col-sm-4 col-md-3">
          <div class="logo">
          <a href="<?php echo e(route('dashboard')); ?>">              
            <img width="50" src="<?php echo e(asset('images/sites/site_settings/'.$site_setting->logo)); ?>" alt="Logo" class="img-responsive"></a> 
          </div>
        </div>
        <div class="col-xs-12  col-sm-4 col-md-5">
          
        </div>
        <div class="col-xs-12  col-sm-4 col-md-4">    
          <ul class="pull-right"> 
          <?php if(Auth::check()): ?> 
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                    <?php echo e(Auth::user()->name); ?> <span class="caret"></span>
                </a>

                <ul class="dropdown-menu auth-dropdown" role="menu">
                    <li>
                        <a href="<?php echo e(url('/logout')); ?>"
                            onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                            Logout
                        </a>

                        <form id="logout-form" action="<?php echo e(url('/logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
                    </li>
                </ul>
            </li>
          <?php endif; ?>           
          </ul>
        </div>
      </div>
    </div>
</header>



