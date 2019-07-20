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
        <small>Future of education Technology</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Instructor</a></li>
        <li><a href="#">Course</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="box">

        <div class="box-body">
          
            <a class="col-lg-offset-5 btn btn-primary" href="{{ route('course.create')}}">Add New course</a>

        </div>


        <div class="box-body">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">course That are already exist</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S No</th>
                  <th>Course Title</th>
                  <th>Course Instructor</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                   
                   @foreach ($courses as $cor)
                    <tr>
                      <td>{{$loop->index+1}}</td>
                      <td>{{$cor->title}}</td>
                      <td>{{$cor->created_by}}</td>
                      <td><a href="{{ route('course.edit',$cor->id)}}"><i class="fa fa-fw fa-edit"></i></a></td>
                      <td>
                        <form id="cat-delete-form-{{$cor->id}}" action="{{ route('course.destroy',$cor->id)}}" method="post" style="display: none" >
                          
                          {{csrf_field()}}
                          {{method_field('DELETE')}}

                        </form>
                        <a href="#" onclick="if(confirm('Do You Want To Delete')){
                           
                           event.preventDefault();
                           document.getElementById('cat-delete-form-{{$cor->id}}').submit();

                        }else{
                          event.preventDefault();
                        }"><i class="fa fa-fw fa-trash"></i></a>
                      </td>
                    </tr>
                   @endforeach
               
                </tbody>
                <tfoot>
                <tr>
                  <th>S No</th>
                  <th>Course Title</th>
                  <th>Course Instructor</th>
                  <th>Edit</th>
                  <th>Delete</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
        </div>
        



        <div class="box-footer">
          Footer
        </div>
        <!-- /.box-footer-->
      </div>
      <!-- /.box -->

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