  <!DOCTYPE html>
  <html>
  <head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css">
    <style>
      .main-sidebar{background-color: #1d3743;}
    </style>
  </head>
  <body>
    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-light-light elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="upload/emslogo.png" alt=" Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text text-white" style="font-weight: 400;">EMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="https://i.pinimg.com/originals/a6/58/32/a65832155622ac173337874f02b218fb.png" class="img-circle elevation-2 " alt="User Image">
        </div><br>
        <div class="info">
          <h4 class="text-light" style="margin-left: 12px;font-weight: bold;">ADMIN</h4>
          <h5 class="text-light"><?php echo $_SESSION['data'] ?><?php echo $_SESSION['d1'] ?></h5>
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
            <a href="admin_dashboard.php" class="nav-link active">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Home
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin_dashboard.php" class="nav-link active">
                  <i class="far fa-circle nav-icon text-light"></i>
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
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="" class="nav-link active">
                  <i class="fa fa-reply-all nav-icon text-white" ></i>
                  <p class="text-light ">Reply Task</p>
                </a>
              </li>
            </ul> -->
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="all_assign_task.php" class="nav-link active">
                  <i class="fa fa-sticky-note nav-icon text-white" aria-hidden="true"></i>
                  <p class="text-light ">Assigned Task</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="assign_leave.php" class="nav-link active">
                  <i class="fa fa-arrow-circle-right nav-icon text-light"></i>
                  <p class="text-light">Assign Leave</p>
                </a>
              </li>
            </ul>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="emp_assigned_leave.php" class="nav-link active">
                  <i class="fa fa-eye nav-icon text-light"></i>
                  <p class="text-light">Emp assigned Leave</p>
                </a>
              </li>
            </ul> -->
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
  
  </body>
  </html>
  