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
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">Main Task</li>
        <li class="active treeview">
          
           
            <li class=""><a href="{{ route('category.index')}}"><i class="fa fa-circle-o"></i>Category</a></li>
            <li class=""><a href="{{ route('event.index')}}"><i class="fa fa-circle-o"></i>Event</a></li>
            <li class=""><a href="{{ route('course.index')}}"><i class="fa fa-circle-o"></i>Course</a></li>
            <li class=""><a href="{{ route('skill.index')}}"><i class="fa fa-circle-o"></i>Skill</a></li>
           
            
          
        </li>

       
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>