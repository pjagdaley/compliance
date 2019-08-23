<main class="app-layout-content">

                    <!-- Page Content -->
                    <div class="container-fluid p-y-md">
                        <!-- Stats -->
                        <div class="row">
                            <div class="col-sm-6 col-lg-3">
                                <a class="card bg-red bg-inverse" href="<?php echo base_url(); ?>overdueCompliance">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h6 text-muted m-t-0 m-b-xs">Overdue Compliance</p>
                                            <p class="h3 text-blue m-t-sm m-b-0">34</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-red-light bg-inverse"><i class="ion-ios-bell fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 col-lg-3">
                                <a class="card bg-blue bg-inverse" href="<?php echo base_url(); ?>upcomingCompliance">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h6 text-muted m-t-0 m-b-xs">Upcoming Compliance</p>
                                            <p class="h3 m-t-sm m-b-0">13</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="fa fa-share fa-1-4x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 col-lg-3">
                                <a class="card bg-green bg-inverse" href="<?php echo base_url(); ?>completedCompliance">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h6 text-muted m-t-0 m-b-xs">Completed Compliance</p>
                                            <p class="h3 m-t-sm m-b-0">160</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-checkmark fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->

                            <div class="col-sm-6 col-lg-3">
                                <a class="card bg-purple bg-inverse" href="javascript:void(0)">
                                    <div class="card-block clearfix">
                                        <div class="pull-right">
                                            <p class="h6 text-muted m-t-0 m-b-xs">Messages</p>
                                            <p class="h3 m-t-sm m-b-0">3 new</p>
                                        </div>
                                        <div class="pull-left m-r">
                                            <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-email fa-1-5x"></i></span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <!-- .col-sm-6 -->
                        </div>
                        <!-- .row -->
                        <!-- End stats -->
                        
<?php
/*print_r($risklevels);
if(count($risklevels)>0)
{
	foreach($risklevels as $risklevel)
	{?>
		
	   <?php  echo $risklevel['Name']?>
	 <?php
	}
}*/
?>	                        
                        

                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Header BG Table -->
                                <div class="card">
                                    <div class="card-header">
                                        <h4>Overall Summary</h4>
                                    </div>

                                    <div class="card-block">

                                        <div class="row margin-bt-20">
                                            <div class="col-sm-3">
                                                <label>Select Act</label>
                                                <select class="form-control" id="select-act" name="select-act">
                                                    <option value="0">Select Act</option>
                                                    <?php
                                                        foreach($companyacts as $companyact) 
                                                        {?>
                                                            <option value="<?php  echo $companyact['Id']?>"><?php  echo $companyact['Name']?></option>                                                          
                                                        <?php }
                                                     ?>
                                                </select>
                                            </div>    
                                            <div class="col-sm-3">   
                                                <label>Select Risk Level</label> 
                                                <select class="form-control" id="select-risk" name="select-risk">
                                                    <option value="0">Select Risk Level</option>
                                                    <?php
                                                        foreach($risklevels as $risklevel) 
                                                        {?>
                                                            <option value="<?php  echo $risklevel['Id']?>"><?php  echo $risklevel['Name']?></option>                                                          
                                                        <?php }
                                                     ?>
                                                </select>
                                            </div>
                                            <div class="col-md-4">
                                                <label>Date Range</label>
                                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy">
                                                    <input class="form-control" type="text" id="example-daterange1" name="example-daterange1" placeholder="From">
                                                    <span class="input-group-addon"><i class="ion-chevron-right"></i></span>
                                                    <input class="form-control" type="text" id="example-daterange2" name="example-daterange2" placeholder="To">
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <label>Filed Date</label>
                                                <div class="input-daterange input-group" data-date-format="mm/dd/yyyy">
                                                    <input class="form-control" type="text" id="example-daterange1" name="example-daterange1" placeholder="Filed Date">
                                                </div>
                                            </div>
                                        </div>

                                        <table class="table table-striped table-borderless table-header-bg">
                                            <thead>
                                                <tr>
                                                    <th class="text-center" style="width: 50px;">#</th>
                                                    <th>Task</th>
                                                    <th>Account</th>
                                                    <th>Risk Level</th>
                                                    <th>Due date</th>
                                                    <th>Filed date</th>
                                                    <th>Reciepet No.</th>
                                                    <th class="">Expected Panelty</th>
                                                    <th class="text-center">Actions</th>
                                                    <th>Filed By</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>HR Training</td>
                                                    <td>Account Name here</td>
                                                    <td>
                                                        <code class="high">HIGH</code>
                                                    </td>
                                                    <td>06/25/2019</td>
                                                    <td>06/25/2019</td>
                                                    <td>12763</td>
                                                    <td>2500 Rs</td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>Rajiv D.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>HR Training</td>
                                                    <td>Account Name here</td>
                                                    <td>
                                                        <code class="vhigh">VERY HIGH</code>
                                                    </td>
                                                    <td>06/25/2019</td>
                                                    <td>06/25/2019</td>
                                                    <td>12763</td>
                                                    <td>2500 Rs</td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>Rajiv D.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>HR Training</td>
                                                    <td>Account Name here</td>
                                                    <td>
                                                        <code class="low">LOW</code>
                                                    </td>
                                                    <td>06/25/2019</td>
                                                    <td>06/25/2019</td>
                                                    <td>12763</td>
                                                    <td>2500 Rs</td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>Rajiv D.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>HR Training</td>
                                                    <td>Account Name here</td>
                                                    <td>
                                                        <code class="high">HIGH</code>
                                                    </td>
                                                    <td>06/25/2019</td>
                                                    <td>06/25/2019</td>
                                                    <td>12763</td>
                                                    <td>2500 Rs</td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>Rajiv D.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>HR Training</td>
                                                    <td>Account Name here</td>
                                                    <td>
                                                        <code class="vhigh">VERY HIGH</code>
                                                    </td>
                                                    <td>06/25/2019</td>
                                                    <td>06/25/2019</td>
                                                    <td>12763</td>
                                                    <td>2500 Rs</td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>Rajiv D.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>HR Training</td>
                                                    <td>Account Name here</td>
                                                    <td>
                                                        <code class="low">LOW</code>
                                                    </td>
                                                    <td>06/25/2019</td>
                                                    <td>06/25/2019</td>
                                                    <td>12763</td>
                                                    <td>2500 Rs</td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>Rajiv D.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>HR Training</td>
                                                    <td>Account Name here</td>
                                                    <td>
                                                        <code class="high">HIGH</code>
                                                    </td>
                                                    <td>06/25/2019</td>
                                                    <td>06/25/2019</td>
                                                    <td>12763</td>
                                                    <td>2500 Rs</td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>Rajiv D.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>HR Training</td>
                                                    <td>Account Name here</td>
                                                    <td>
                                                        <code class="vhigh">VERY HIGH</code>
                                                    </td>
                                                    <td>06/25/2019</td>
                                                    <td>06/25/2019</td>
                                                    <td>12763</td>
                                                    <td>2500 Rs</td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>Rajiv D.</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-center">1</td>
                                                    <td>HR Training</td>
                                                    <td>Account Name here</td>
                                                    <td>
                                                        <code class="low">LOW</code>
                                                    </td>
                                                    <td>06/25/2019</td>
                                                    <td>06/25/2019</td>
                                                    <td>12763</td>
                                                    <td>2500 Rs</td>
                                                    <td class="text-center">
                                                        <div class="btn-group">
                                                            <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                                                        </div>
                                                    </td>
                                                    <td>Rajiv D.</td>
                                                </tr>

                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    <!-- .card-block -->
                                </div>
                                <!-- .card -->
                                <!-- End Header BG Table -->
                            </div>
                            <!-- .col-lg-6 -->

                            
                        </div>
                        <!-- .row -->
                    </div>
                    <!-- .container-fluid -->
                    <!-- End Page Content -->

                </main>

            </div>
            <!-- .app-layout-container -->
        </div>
        <!-- .app-layout-canvas -->

        <!-- Apps Modal -->
        <!-- Opens from the button in the header -->
        <div id="apps-modal" class="modal fade" tabindex="-1" role="dialog">
            <div class="modal-sm modal-dialog modal-dialog-top">
                <div class="modal-content">
                    <!-- Apps card -->
                    <div class="card m-b-0">
                        <div class="card-header bg-app bg-inverse">
                            <h4>Apps</h4>
                            <ul class="card-actions">
                                <li>
                                    <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                                </li>
                            </ul>
                        </div>
                        <div class="card-block">
                            <div class="row text-center">
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-secondary bg-inverse" href="index.html">
                                        <i class="ion-speedometer fa-4x"></i>
                                        <p>Admin</p>
                                    </a>
                                </div>
                                <div class="col-xs-6">
                                    <a class="card card-block m-b-0 bg-app-tertiary bg-inverse" href="frontend_home.html">
                                        <i class="ion-laptop fa-4x"></i>
                                        <p>Frontend</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- .card-block -->
                    </div>
                    <!-- End Apps card -->
                </div>
            </div>
        </div>
        <!-- End Apps Modal -->

        <div class="app-ui-mask-modal"></div>