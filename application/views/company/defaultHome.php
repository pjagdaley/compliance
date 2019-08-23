<!-- Stats -->

<div class="row">
  <div class="col-sm-6 col-lg-3"> <a class="card bg-red bg-inverse" href="<?php echo base_url(); ?>overdueCompliance">
    <div class="card-block clearfix">
      <div class="pull-right">
        <p class="h6 text-muted m-t-0 m-b-xs">Overdue Compliance</p>
        <p class="h3 text-blue m-t-sm m-b-0">34</p>
      </div>
      <div class="pull-left m-r"> <span class="img-avatar img-avatar-48 bg-red-light bg-inverse"><i class="ion-ios-bell fa-1-5x"></i></span> </div>
    </div>
    </a> </div>
  <!-- .col-sm-6 -->
  <div class="col-sm-6 col-lg-3"> <a class="card bg-blue bg-inverse" href="<?php echo base_url(); ?>upcomingCompliance">
    <div class="card-block clearfix">
      <div class="pull-right">
        <p class="h6 text-muted m-t-0 m-b-xs">Upcoming Compliance</p>
        <p class="h3 m-t-sm m-b-0">13</p>
      </div>
      <div class="pull-left m-r"> <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="fa fa-share fa-1-4x"></i></span> </div>
    </div>
    </a> </div>
  <!-- .col-sm-6 -->
  <div class="col-sm-6 col-lg-3"> <a class="card bg-green bg-inverse" href="<?php echo base_url(); ?>completedCompliance">
    <div class="card-block clearfix">
      <div class="pull-right">
        <p class="h6 text-muted m-t-0 m-b-xs">Completed Compliance</p>
        <p class="h3 m-t-sm m-b-0">160</p>
      </div>
      <div class="pull-left m-r"> <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-checkmark fa-1-5x"></i></span> </div>
    </div>
    </a> </div>
  <!-- .col-sm-6 -->
  <div class="col-sm-6 col-lg-3"> <a class="card bg-purple bg-inverse" href="javascript:void(0)">
    <div class="card-block clearfix">
      <div class="pull-right">
        <p class="h6 text-muted m-t-0 m-b-xs">Messages</p>
        <p class="h3 m-t-sm m-b-0">3 new</p>
      </div>
      <div class="pull-left m-r"> <span class="img-avatar img-avatar-48 bg-gray-light-o"><i class="ion-ios-email fa-1-5x"></i></span> </div>
    </div>
    </a> </div>
  <!-- .col-sm-6 -->
</div>
<!-- .row -->
<!-- End stats -->
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
            <label>Select Account</label>
            <select class="form-control" id="example-select" name="example-select">
              <option value="0">Select Account</option>
              <option value="1">Option #1</option>
              <option value="2">Option #2</option>
              <option value="3">Option #3</option>
            </select>
          </div>
          <div class="col-sm-3">
            <label>Select Risk Level</label>
            <select class="form-control" id="example-select" name="example-select">
              <option value="0">Select Risk Level</option>
              <option value="1">Option #1</option>
              <option value="2">Option #2</option>
              <option value="3">Option #3</option>
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
		
<?php
if(count($companies)>0)
{
	foreach($companies as $company)
	{?>
		
	   <?php  echo $company['FirstName']?>
	 <?php
	}
}
?>		
		
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
              <td><code class="high">HIGH</code> </td>
              <td>06/25/2019</td>
              <td>06/25/2019</td>
              <td>12763</td>
              <td>2500 Rs</td>
              <td class="text-center"><div class="btn-group">
                  <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                </div></td>
              <td>Rajiv D.</td>
            </tr>
            <tr>
              <td class="text-center">1</td>
              <td>HR Training</td>
              <td>Account Name here</td>
              <td><code class="vhigh">VERY HIGH</code> </td>
              <td>06/25/2019</td>
              <td>06/25/2019</td>
              <td>12763</td>
              <td>2500 Rs</td>
              <td class="text-center"><div class="btn-group">
                  <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                </div></td>
              <td>Rajiv D.</td>
            </tr>
            <tr>
              <td class="text-center">1</td>
              <td>HR Training</td>
              <td>Account Name here</td>
              <td><code class="low">LOW</code> </td>
              <td>06/25/2019</td>
              <td>06/25/2019</td>
              <td>12763</td>
              <td>2500 Rs</td>
              <td class="text-center"><div class="btn-group">
                  <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                </div></td>
              <td>Rajiv D.</td>
            </tr>
            <tr>
              <td class="text-center">1</td>
              <td>HR Training</td>
              <td>Account Name here</td>
              <td><code class="high">HIGH</code> </td>
              <td>06/25/2019</td>
              <td>06/25/2019</td>
              <td>12763</td>
              <td>2500 Rs</td>
              <td class="text-center"><div class="btn-group">
                  <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                </div></td>
              <td>Rajiv D.</td>
            </tr>
            <tr>
              <td class="text-center">1</td>
              <td>HR Training</td>
              <td>Account Name here</td>
              <td><code class="vhigh">VERY HIGH</code> </td>
              <td>06/25/2019</td>
              <td>06/25/2019</td>
              <td>12763</td>
              <td>2500 Rs</td>
              <td class="text-center"><div class="btn-group">
                  <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                </div></td>
              <td>Rajiv D.</td>
            </tr>
            <tr>
              <td class="text-center">1</td>
              <td>HR Training</td>
              <td>Account Name here</td>
              <td><code class="low">LOW</code> </td>
              <td>06/25/2019</td>
              <td>06/25/2019</td>
              <td>12763</td>
              <td>2500 Rs</td>
              <td class="text-center"><div class="btn-group">
                  <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                </div></td>
              <td>Rajiv D.</td>
            </tr>
            <tr>
              <td class="text-center">1</td>
              <td>HR Training</td>
              <td>Account Name here</td>
              <td><code class="high">HIGH</code> </td>
              <td>06/25/2019</td>
              <td>06/25/2019</td>
              <td>12763</td>
              <td>2500 Rs</td>
              <td class="text-center"><div class="btn-group">
                  <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                </div></td>
              <td>Rajiv D.</td>
            </tr>
            <tr>
              <td class="text-center">1</td>
              <td>HR Training</td>
              <td>Account Name here</td>
              <td><code class="vhigh">VERY HIGH</code> </td>
              <td>06/25/2019</td>
              <td>06/25/2019</td>
              <td>12763</td>
              <td>2500 Rs</td>
              <td class="text-center"><div class="btn-group">
                  <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                </div></td>
              <td>Rajiv D.</td>
            </tr>
            <tr>
              <td class="text-center">1</td>
              <td>HR Training</td>
              <td>Account Name here</td>
              <td><code class="low">LOW</code> </td>
              <td>06/25/2019</td>
              <td>06/25/2019</td>
              <td>12763</td>
              <td>2500 Rs</td>
              <td class="text-center"><div class="btn-group">
                  <button class="btn btn-xs btn-default" type="button" data-toggle="tooltip" title="" data-original-title="Edit Client"><i class="ion-edit"></i></button>
                </div></td>
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
