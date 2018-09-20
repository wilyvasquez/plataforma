<!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header" style="text-align: center;">PRINCIPAL</li>
        <li class="<?php if(!empty($dashboard)) echo $dashboard ?>">
          <a href="#">
            <i class="fa fa-motorcycle"></i> <span>Dashboard</span>
          </a>
        </li>
        <li class="<?php if(!empty($calendario)) echo $calendario ?>">
          <a href="#">
            <i class="fa fa-calendar"></i> <span>Calendario</span>
          </a>
        </li>
        <li class="header" style="text-align: center;">MENU NAVEGACION</li>
        <li class="treeview <?php if(!empty($clientes)) echo $clientes ?>">
          <a href="#">
            <i class="fa fa-users"></i> <span>Clientes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Registro</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Agregar</a></li>
          </ul>
        </li>
        <li class="treeview <?php if(!empty($reportes)) echo $reportes ?>">
          <a href="#">
            <i class="fa fa-folder-open"></i> <span>Reportes</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-circle-o"></i> Registro</a></li>
            <li><a href="#"><i class="fa fa-circle-o"></i> Agregar</a></li>
          </ul>
        </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- =============================================== -->