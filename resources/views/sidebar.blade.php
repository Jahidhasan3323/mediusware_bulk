<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->


    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">

        </div>
        <div class="info">
          <router-link to="/" class="d-block">Admin</router-link>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
          <router-link to="/" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>Home</p>
            </router-link>
          </li>
          <li class="nav-item">
            <router-link to="/post" class="nav-link">
              <i class="nav-icon fa fa-comment"></i>
              <p>Post</p>
            </router-link>
          </li>
          
          
            </ul>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
