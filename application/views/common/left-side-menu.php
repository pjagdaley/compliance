    <aside class="app-layout-drawer">
      <!-- Drawer scroll area -->
      <div class="app-layout-drawer-scroll">
        <!-- Drawer logo -->
        <div id="logo" class="drawer-header"> <a href="<?php echo base_url(); ?>companyDashboard"><img class="img-responsive logo-inn" src="<?php echo base_url(); ?>/assets/img/logo/logo.png" title="AppUI" alt="AppUI" /></a> </div>
        <!-- Drawer navigation -->
        <nav class="drawer-main">
          <ul class="nav nav-drawer">
            <li class="nav-item nav-drawer-header">Pages</li>
            <li class="nav-item active"> <a href="<?php echo base_url(); ?>companyDashboard"><i class="ion-ios-monitor-outline"></i> Home</a> </li>
            <li class="nav-item"> <a href="<?php echo base_url(); ?>overdueCompliance"><i class="fa fa-exclamation-circle"></i> Overdue Compliance</a> </li>
            <li class="nav-item"> <a href="<?php echo base_url(); ?>upcomingCompliance"><i class="fa fa-share"></i> Upcoming Compliance</a> </li>
            <li class="nav-item"> <a href="<?php echo base_url(); ?>completedCompliance"><i class="ion-checkmark"></i> Compliance Completed</a> </li>
            <li class="nav-item"> <a href="add-complience.html"><i class="ion-plus-round"></i> Add Compliance</a> </li>
          </ul>
        </nav>
        <!-- End drawer navigation -->
      </div>
      <!-- End drawer scroll area -->
    </aside>
