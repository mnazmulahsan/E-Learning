@extends('admin.layouts.app')

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
        <small>Furute of education technology</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li><a href="#">Category</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-body">
          <form role="form" action="{{ route('category.update',$cat->id)}}" method="post">
                {{csrf_field()}}
                {{method_field('PUT')}}
                  <div class=" col-lg-offset-1 col-lg-6">
                      <div class="form-group">
                        <label for="name">Category</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ $cat->category_name}}">
                       </div>

                       <div class="form-group">
                         
                          <lebel>Parent Category</lebel>
                          <select class="form-control" name="parent_id" id="">
                            <option value="null">None</option>
                            @foreach($allcat as $all)
                            <option value="{{ $all->id }}">{{ $all->category_name }}</option>
                            @endforeach
                          </select>

                       </div>

                       <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add</button>
                        <a class="btn btn-danger" href="{{ route('category.index')}}">Back</a>
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