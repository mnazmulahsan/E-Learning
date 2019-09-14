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
        <small>Future of education technology</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Instructor</a></li>
        <li><a href="#">Answer</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">


      <!-- Default box -->
      <div class="box">


      @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
      @endif
        <div class="box-body">
          <form role="form" action="{{route('single',$answer->id)}}" method="post" enctype="multipart/form-data">
          {{-- <form role="form" id="catForm" method="post"> --}}
                {{csrf_field()}}
                
                  <div class=" col-lg-offset-1 col-lg-6">

                       <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" name="title" id="title" value="{{$answer->title}}" >
                       </div>


                       <div class="form-group">
                        <label for="question">Question</label>
                        <textarea class="form-control" name="question" id="question" cols="120" rows="10">{{$answer->question}}</textarea>
                       </div>

                       <div class="form-group">
                        <label for="answer">Answer</label>
                        <textarea class="form-control" name="answer" id="answer" cols="120" rows="10">{{$answer->answer}}</textarea>
                       </div>

                        <div class="form-group">
                        <label for="mark">Marks</label>
                        <input class="form-control" type="text" name="mark" id="mark">
                       </div>

                       
                      <div class="form-group">
                       <button type="submit" class="btn btn-primary" id="saveBtn">Set Mark</button>
                       <a class="btn btn-danger" href="{{ route('all',Auth::user()->id)}}">Back</a>
                      </div>
                  </div>
            
          </form>

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
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 

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