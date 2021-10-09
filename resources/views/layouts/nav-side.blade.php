    <nav class="mt-2 ">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
                with font-awesome or any other icon font library -->

              <li class="nav-header">MENU</li>
              <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                <a href="../" class="nav-link">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Home
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../chart" class="nav-link">
                  <i class="nav-icon fas fa-chart-bar"></i>
                  <p>
                    Chart
                  </p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../datarso" class="nav-link">
                  <i class="nav-icon fas fa-table"></i>
                  <p>
                    Table Data RSO
                  </p>
                </a>
              </li>
            </ul>
    </nav>