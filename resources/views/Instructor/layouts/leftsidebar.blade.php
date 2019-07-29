<!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="/admint/dist/img/ovi1 cropped.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Captain</p>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Main Task</li>
        <li class="active treeview">

            <li class=""><a href="{{ route('icourse.create')}}"><i class="fa fa-circle-o"></i>Add New Course</a></li>
            <li class=""><a href="{{ route('icourse.index')}}"><i class="fa fa-circle-o"></i>Manage Courses</a></li> 
        </li>  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>