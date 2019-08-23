<main class="app-layout-content">

        <!-- Page Content -->
        <div class="container-fluid p-y-md">


            <div class="row">
                <div class="col-lg-12">
                    <!-- Header BG Table -->
                    <div class="card">
                        <div class="card-header">
                            <h4>Upcoming Compliance</h4>
                        </div>

                        <div class="card-block">

                            <div class="row margin-bt-20">
                                <div class="col-sm-3">
                                    <label>Select Account</label>
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
                                        <th>Act</th>
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

        

<div class="app-ui-mask-modal"></div>

        <!-- Fade In Modal -->
    <div class="modal fade" id="modal-upload" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card-header bg-green bg-inverse">
                    <h4>Upload</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                    <div class="form-group clearfix">
                                <label class="col-xs-12" for="example-file-multiple-input">Upload Receipts documents</label>
                                <div class="col-xs-12">
                                    <input type="file" id="example-file-multiple-input" name="example-file-multiple-input" multiple="">
                                </div>
                            </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-app" type="button" data-dismiss="modal"><i class="ion-checkmark"></i> Ok</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fade In Modal -->

     <!-- Fade In Modal -->
    <div class="modal fade" id="modal-ignore" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="card-header bg-green bg-inverse">
                    <h4>Ignore</h4>
                    <ul class="card-actions">
                        <li>
                            <button data-dismiss="modal" type="button"><i class="ion-close"></i></button>
                        </li>
                    </ul>
                </div>
                <div class="card-block">
                   <div class="form-group clearfix">
                                <label class="col-xs-12" for="example-textarea-input">Why Ignore?</label>
                                <div class="col-xs-12">
                                    <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="6" placeholder="Content.."></textarea>
                                </div>
                            </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-sm btn-default" type="button" data-dismiss="modal">Close</button>
                    <button class="btn btn-sm btn-app" type="button" data-dismiss="modal"><i class="ion-checkmark"></i> Ok</button>
                </div>
            </div>
        </div>
    </div>
    <!-- End Fade In Modal -->