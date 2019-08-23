 <main class="app-layout-content">

    <!-- Page header -->
    <div class="page-header bg-green bg-inverse">
        <div class="container">
            <!-- Section Content -->
            <div class="p-y-lg text-center">
                <h1 class="display-2">Login</h1>
                <p class="text-muted">Unlimited ideas. Unlimited power. Unlimited joy. Unlimited opportunities.</p>
            </div>
            <!-- End Section Content -->
        </div>
    </div>
    <!-- End Page header -->

    <!-- Page content -->
    <div class="page-content">
        <div class="container">
            <div class="row">
                <!-- Login card -->
                <div class="col-md-6 col-md-offset-3">
                    <div class="card">
                        <?php echo ($this->session->flashdata('LOGIN_ERROR'))?$this->session->flashdata('LOGIN_ERROR'):'';?>
                        <h3 class="card-header h4">Login</h3>
                        <div class="card-block">
                            <?php
                                if(get_cookie('IS_REMEMBER',TRUE)==1)
                                {
                                    $username = get_cookie('LOGIN_USERNAME',TRUE);
                                    $password =  get_cookie('LOGIN_PASSWORD',TRUE);
                                    $remember = get_cookie('IS_REMEMBER',TRUE);
                                }else{
                                     $username ='';
                                     $password ='';
                                     $remember ='';
                                }
                                ?>	
                            <form class="form-horizontal m-t-sm" action="<?php echo base_url(); ?>login/process" method="post">
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material">
                                            <?php echo form_error('username'); ?>
                                            <input class="form-control" type="text" id="username" name="username" placeholder="Enter username..." value="<?php echo (set_value('username'))?set_value('username'):$username; ?>">
                                            <label for="username">Username</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material">
                                            <?php echo form_error('password'); ?>
                                            <input class="form-control" type="password" id="password" name="password" placeholder="Enter password..." value="<?php echo (set_value('password'))?set_value('password'):$password; ?>">
                                            <label for="password">Password</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="pull-left">
                                            <label class="css-input switch switch-sm switch-default">
                                                <input type="checkbox" id="remember" name="remember" value="1" <?php  echo (set_value('remember'))?'checked':(($remember==1)?'checked':'');  ?>><span></span> Remember Me?
                                            </label>
                                        </div>
                                        <div class="pull-right forget-pass">
                                            <a href="">Forget password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-xs-12">
                                        <button class="btn btn-app" type="submit">Log in</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- .card -->
                </div>
                <!-- .col-md-6 -->
                <!-- End login -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>
    <!-- End page content -->
</main>