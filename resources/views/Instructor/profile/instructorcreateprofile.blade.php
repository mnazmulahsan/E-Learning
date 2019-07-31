@extends('Instructor.layouts.app')

@section('headerSection')

<link rel="stylesheet" type="text/css" href="{{ asset('/admint/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

<!-- Core Stylesheet -->
{{-- <link rel="stylesheet" href="/user/styles/style.css"> --}}
<link rel="stylesheet" type="text/css" href="{{ asset('/user/dist/css/select2.min.css')}}">


@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SkilledB
        <small class="btn btn-success">Future of education Technology</small>
      </h1>
    </section>
   <section>
     <div class="container">
       <div class="row">
         <div class="container-fluid">
           <h1>Hello! <span class="btn btn-info">{{$instructor->name}}</span></h1>
           <div>
               <center><h2 class="btn btn-primary">Create Your Profile </h2></center>
           </div>
           <br>
          <div>
              <form role="form" action="{{route('instructor.createprofile', $instructor->id)}}" method="post">
              {{-- <form role="form" id="catForm" method="post"> --}}
                    {{csrf_field()}}
                    
                      <div class="col-lg-10">
                          <div class="form-group">
                            <label for="fname">Full Name</label>
                            <input type="text" class="form-control" id="fname" name="fname">
                          </div>
                          <div class="form-group">
                            <label for="desig">Field of Teaching</label>
                            <input type="text" class="form-control" id="desig" name="desig">
                          </div>

                           <div class="form-group">
                            <label for="add">Address</label>
                            <input type="text" class="form-control" id="add" name="add">
                           </div>

                           <div class="form-group">
                            <label for="number">Number</label>
                            <input type="text" class="form-control" id="number" name="number">
                           </div>
                           <div class="form-group">
                            <label for="about">About</label>
                            <textarea class="form-control" name="about" id="about" cols="30" rows="10"></textarea>
                           </div>

                           <div class="form-group">
                            <label for="fb">Facebook</label>
                            <input type="text" class="form-control" id="fb" name="fb">
                           </div>

                           <div class="form-group">
                            <label for="linked">LinkedIn</label>
                            <input type="text" class="form-control" id="linked" name="linked">
                           </div>

                           <div class="form-group">
                            <label for="git">Git</label>
                            <input type="text" class="form-control" id="git" name="git">
                           </div>
              
                          <div class="form-group">
                           <button type="submit" class="btn btn-primary" id="saveBtn">Save</button>
                           <a class="btn btn-danger" href="{{route('instructor.about',$instructor->id)}}">Back</a>
                          </div>
                        </div>
                  
                </form>
            </div>
            
          </div>
        </div>
      </div>
    </section>
    <center><div><h2 class="btn btn-danger">If you have already created your profile then, no need to create it again!</h2></div></center>

    <center><div><h2 class="btn btn-danger">Do You Forget To Add Your Skills</h2></div></center>

    <section>
      <div class="container">
        <div class="row">
          <div class="container-fluid">
             <div class="col-lg-10">
                <form action="{{route('instructor.skills', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                     <div class="form-group" style="margin-top: 18px;">
                      <center><label name="skills" class="btn btn-primary">Choose Your Skills</label></center>
                      <br>
                      <div>
                        <select class="form-control select2 select2-hidden-accessible" multiple="multiple"data-placeholder="Select Skill" style="width: 100%;" tabindex="-1" aria-hidden="true" name="skills[]">
                          @foreach ($skills as $skill)
                            <option value="{{$skill->id}}"
                              @foreach(Auth::user()->skills as $existskill)
                                  @if($existskill->id == $skill->id)
                                     selected
                                  @endif  
                              @endforeach
                              >{{ $skill->name}}</option>
                          @endforeach
                        </select>
                        <br>
                        <br>
                        <center><input class="btn btn-success" type="submit" value="Add" ></center>
                      </div>
                      
                    </div>
                </form>
            </div>
            <br>    
          </div>
        </div>
      </div>
    </section>

   
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection

@section('footerSection')
 <script src="{{ asset('/admint/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
 <script src="{{ asset('/admint/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

 <script>
  $(function () {

    
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

<!-- ##### All Javascript Files ##### -->
<!-- jQuery-2.2.4 js -->
<script src="/user/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="/user/js/bootstrap/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="/user/js/bootstrap/bootstrap.min.js"></script>
<!-- All Plugins js -->
<script src="/user/js/plugins/plugins.js"></script>
<!-- Active js -->
<script src="/user/js/active.js"></script>

<script src="{{ asset('/user/dist/js/select2.full.min.js')}}"></script>
<script>
  
  $(document).ready(function(){

   $('.select2').select2();
  });
</script>
@endsection