<!DOCTYPE html>
  <html>
  <head>
    <title></title>
    <style>
      .main-sidebar{background-color: #1d3743;}
    </style>
  </head>
  <body>
    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-light elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="https://w1.pngwave.com/png/971/361/138/project-icon-business-management-icon-project-management-icon-logo-symbol-emblem-gear-png-clip-art.png" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text text-white" style="font-weight: 400;">EMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6Q82WISxpWPp5dHBTWHypFOZbRTvc0ST0xQ&usqp=CAU" class="img-circle elevation-2" style="width: 50px; height: 50px;" alt="User Image">
        </div>
        <div class="info">
          <h5 class="text-light" style="margin-left: 12px;font-weight: bold;">EMPLOYEE</h5>
          <a href="#" class="text-light" style="font-weight: bold;font-size: 17px;"><?php echo $_SESSION['data'] ?> <?php echo $_SESSION['d1'] ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="emp_dashboard.php" class="nav-link active">
                  <p class="text-light">Dashboard</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="task.php" class="nav-link active">
                  <i class="fa fa-tasks nav-icon text-light"></i>
                  <p class="text-light">Task</p>
                </a>
              </li>
            </ul>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="leave.php" class="nav-link active">
                  <i class="fa fa-share nav-icon text-light"></i>
                  <p class="text-light">Apply Leave</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="leave_status.php" class="nav-link active">
                  <i class="fa fa-share nav-icon text-light"></i>
                  <p class="text-light">Leave Status</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  </body>
  </html>
  