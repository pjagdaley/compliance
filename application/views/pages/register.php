<main class="app-layout-content">

    <!-- Page header -->
    <div class="page-header bg-green bg-inverse">
        <div class="container">
            <!-- Section Content -->
            <div class="p-y-lg text-center">
                <h1 class="display-2">Register with us</h1>
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
                <!-- Sign up -->
                <div class="col-md-6 col-md-offset-3">
                    <div class="card">
                        <h3 class="card-header h4">Sign up</h3>
                        <div class="card-block">
                            <!--<?php echo validation_errors(); ?>-->
                            <form class="form-horizontal m-t-sm" action="<?php echo base_url(); ?>companies/register" method="post"/>

                             <!--<?php echo form_open('companies/register');?>-->
                                <div class="form-group">
                                    <div class="col-xs-6">
                                        <div class="form-material">
                                            <?php echo form_error('firstName'); ?>
                                            <input class="form-control" type="text" id="firstName" name="firstName" placeholder="Your first name" value="<?php echo set_value('firstName'); ?>">
                                            <label for="firstName">First name</label>
                                        </div>
                                    </div>
                                    <div class="col-xs-6">
                                        <div class="form-material">
                                            <?php echo form_error('lastName'); ?>
                                            <input class="form-control" type="text" id="lastName" name="lastName" placeholder="Your last name" value="<?php echo set_value('lastName'); ?>">
                                            <label for="lastName">Last name</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material input-group">
                                             <?php echo form_error('companyName'); ?>
                                            <input class="form-control" type="text" id="companyName" name="companyName" placeholder="Company's name..." value="<?php echo set_value('companyName'); ?>">
                                            <label for="companyName">Company</label>
                                            <span class="input-group-addon">.example.com</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material">
                                             <?php echo form_error('designation'); ?>
                                            <input class="form-control" type="text" id="designation" name="designation" placeholder="Your Designation" value="<?php echo set_value('designation'); ?>">
                                            <label for="designation">Designation</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material input-group">
                                             <?php echo form_error('email'); ?>
                                            <input class="form-control" type="email" id="email" name="email" placeholder="Enter email..." value="<?php echo set_value('email'); ?>">
                                            <label for="email">Email</label>
                                            <span class="input-group-addon"><i class="ion-ios-email"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                     <div class="col-xs-12">
                                         <div class="form-material input-group">
                                              <?php echo form_error('userName'); ?>
                                            <input class="form-control" type="text" id="userName" name="userName" placeholder="Your user name" value="<?php echo set_value('userName'); ?>">
                                            <label for="userName">User name</label>
                                            <span class="input-group-addon"><i class="ion-asterisk"></i></span>
                                         </div>
                                     </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material input-group">
                                             <?php echo form_error('password'); ?>
                                            <input class="form-control" type="password" id="password" name="password" placeholder="Enter password..." value="<?php echo set_value('password'); ?>">
                                            <label for="password">Password</label>
                                            <span class="input-group-addon"><i class="ion-asterisk"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                        <div class="form-material input-group">
                                             <?php echo form_error('confirmPassword'); ?>
                                            <input class="form-control" type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirm password..." value="<?php echo set_value('confirmPassword'); ?>">
                                            <label for="confirmPassword">Confirm Password</label>
                                            <span class="input-group-addon"><i class="ion-asterisk"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-xs-12">
                                         <?php echo form_error('terms'); ?>
                                        <label class="css-input css-checkbox css-checkbox-default">
                                            <input type="checkbox" id="terms" name="terms"><span></span> I agree with terms
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group m-b-0">
                                    <div class="col-xs-12">
                                        <button class="btn btn-app" type="submit">Register</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- .card -->
                </div>
                <!-- .col-md-6 -->
                <!-- End sign up -->
            </div>
            <!-- .row -->
        </div>
        <!-- .container -->
    </div>    
    <!-- End page content -->
</main>