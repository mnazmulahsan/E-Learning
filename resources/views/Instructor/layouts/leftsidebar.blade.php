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

            <li class=""><a href="{{ route('icourse.create')}}"><i class="fa fa-circle-o"></i>Add New Course</a></li>
            <li class=""><a href="{{ route('icourse.index')}}"><i class="fa fa-circle-o"></i>Manage Courses</a></li> 
            <li class=""><a href="{{ route('video.create')}}"><i class="fa fa-circle-o"></i>Add New Video</a></li>
            <li class=""><a href="{{ route('video.index')}}"><i class="fa fa-circle-o"></i>Manage Videos</a></li>
            <li class=""><a href="{{ route('quiz.index')}}"><i class="fa fa-circle-o"></i>Quizzes</a></li>
            <li class=""><a href="{{ route('all',Auth::user()->id)}}"><i class="fa fa-circle-o"></i>Quiz Answers</a></li>

        </li>  
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>