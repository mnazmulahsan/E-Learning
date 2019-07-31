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
               <center><h2 class="btn btn-primary">Update {{$instructor->name}}'s Profile </h2></center>
           </div>
           <br>
          <div>
              <form role="form" action="{{route('instructor.editprofile', $instructor->id)}}" method="post">
              {{-- <form role="form" id="catForm" method="post"> --}}
                    {{csrf_field()}}
                    
                      <div class="col-lg-10">
                          <div class="form-group">
                            <label for="fname">Full Name</label>
                            <input type="text" class="form-control" id="fname" name="fname" value="@isset($iabout->fullName){{$iabout->fullName}}@endisset">
                          </div>
                          <div class="form-group">
                            <label for="desig">Field of Teaching</label>
                            <input type="text" class="form-control" id="desig" name="desig" value="@isset($iabout->designation){{$iabout->designation}}@endisset">
                          </div>

                           <div class="form-group">
                            <label for="add">Address</label>
                            <input type="text" class="form-control" id="add" name="add" value="@isset($iabout->address){{$iabout->address}}@endisset">
                           </div>

                           <div class="form-group">
                            <label for="number">Number</label>
                            <input type="text" class="form-control" id="number" name="number" value="@isset($iabout->number){{$iabout->number}}@endisset">
                           </div>
                           <div class="form-group">
                            <label for="about">About</label>
                            <textarea class="form-control" name="about" id="about" cols="30" rows="10">@isset($iabout->about){{$iabout->about}}@endisset</textarea>
                           </div>

                           <div class="form-group">
                            <label for="fb">Facebook</label>
                            <input type="text" class="form-control" id="fb" name="fb" value="@isset($iabout->facebook){{$iabout->facebook}}@endisset">
                           </div>

                           <div class="form-group">
                            <label for="linked">LinkedIn</label>
                            <input type="text" class="form-control" id="linked" name="linked" value="@isset($iabout->linkedin){{$iabout->linkedin}}@endisset">
                           </div>

                           <div class="form-group">
                            <label for="git">Git</label>
                            <input type="text" class="form-control" id="git" name="git" value="@isset($iabout->git){{$iabout->git}}@endisset">
                           </div>
              
                          <div class="form-group">
                           <button type="submit" class="btn btn-primary" id="saveBtn">Update</button>
                           <a class="btn btn-danger" href="{{route('instructor.about',$instructor->id)}}">Back</a>
                          </div>
                        </div>
                  
                </form>
            </div>
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