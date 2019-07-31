@extends('Instructor.layouts.app')

@section('headerSection')

<link rel="stylesheet" type="text/css" href="{{ asset('/admint/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

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
                <center><h2 class="btn btn-primary">About {{$instructor->name}} </h2></center>
            </div>
            <br>
            
            <div>
              <div class="col-lg-10">
                  <div class="form-group">
                    <label for="fname">Full Name : </label>
                    <span>@isset($iabout->fullName){{$iabout->fullName}}@endisset</span>
                  </div>
                  <div class="form-group">
                    <label for="desig">Field of Teaching : </label>
                    <span>@isset($iabout->designation){{$iabout->fullName}}@endisset</span>
                  </div>
                  <div class="form-group">
                    <label for="fname">Address : </label>
                    <span>@isset($iabout->address){{$iabout->address}}@endisset</span>
                  </div>
                  <div class="form-group">
                    <label for="fname">Email : </label>
                    <span>{{$instructor->email}}</span>
                  </div>
                  <div class="form-group">
                    <label for="fname">Contact Number : </label>
                    <span>@isset($iabout->number){{$iabout->number}}@endisset</span>
                  </div>

                   <div class="form-group">
                    <label for="about">About : </label>
                    <span>@isset($iabout->about){{$iabout->about}}@endisset</span>
                   </div>

                   <div class="form-group">
                     <label for="fname">Facebook : </label>
                     <span>@isset($iabout->facebook){{$iabout->facebook}}@endisset</span>
                   </div>
                   <div class="form-group">
                     <label for="fname">LinkedIn : </label>
                     <span>@isset($iabout->linkedin){{$iabout->linkedin}}@endisset</span>
                   </div>
                   <div class="form-group">
                     <label for="fname">Git handle : </label>
                     <span>@isset($iabout->git){{$iabout->git}}@endisset</span>
                   </div>            
              </div>                
            </div>
          </div>
        </div>
      </div>
    </section>
    <section>
      <div class="container">
        <div class="row">
          <div class="container-fluid">
            
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row">
          <div class="container-fluid">
             <div>
                <center><h2 class="btn btn-success">{{$instructor->name}}'s Skills</h2></center>
            </div>
            <br>
            <!-- Single Skills Area -->
            @foreach (Auth::user()->skills as $su)
                <div class="col-12 col-md-2 col-xl-2">
                    <div class="single-skils-area mb-100">
                        <div>
                            <h3 class="btn btn-danger"><span>@isset($su->name){{$su->name}}@endisset</span></h3>
                        </div>
                    </div>
                </div>
            @endforeach     

           
          </div>
        </div>
      </div>
    </section>

    <section>
          <div class="container">
            <div class="row">
              <div class="container-fluid">
                 <div>
                    <center><a class="btn btn-danger" href="{{route('instructor.createprofile',$instructor->id)}}">Create Profile</a></center>
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


@endsection