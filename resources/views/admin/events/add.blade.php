@extends('admin.layouts.app')

@section('headerSection')

<link rel="stylesheet" type="text/css" href="{{ asset('/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">

@endsection

@section('main-content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Blank page
        <small>it all starts here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-body">
          <form role="form" action="{{ route('event.store')}}" method="post">
                {{csrf_field()}}
                
                  <div class=" col-lg-offset-1 col-lg-6">
                      <div class="form-group">
                        <label for="name">Category</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Category">
                       </div>

                       <div class="form-group">
                         
                          <lebel>Parent Category</lebel>
                          <select class="form-control" name="parent_id" id="">
                            @foreach($parent as $pa)
                            <option value="{{ $pa->id }}">{{ $pa->category_name }}</option>
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
 <script src="{{ asset('/admin/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
 <script src="{{ asset('/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>

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