@extends('admin.layouts.app')

@section('main-content')
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        SkilledB Admin panel
        <small>Future Of education is here</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i>Admin</a></li>
        <li><a href="#">Home</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div >
        <br>
        <br>
        <br>
        <br>
        <div class="col-lg-12">
          <div class="col-lg-5 btn btn-primary">Total Category 
            <div>
              <h3>{{$tc}} Category</h3>
            </div>
          </div>
          <div class="col-lg-5 btn btn-success pull-right">Total Skills
            <div>
              <h3>{{$ts}} Skills</h3>
            </div>

          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-lg-12">      
          <div class="col-lg-5 btn btn-danger" >Total Course
            <div>
              <h3>{{$tcor}} Course</h3>
            </div>
          </div>
          <div class="col-lg-5 btn btn-default pull-right">Total Events
            <div>
              <h3>{{$tev}} Event</h3>
            </div>

          </div>
        </div>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="col-lg-12">
          <div class="col-lg-5 btn btn-success">Total Instructor
            <div>
              <h3>{{$ti}} Instructor</h3>
            </div>
          </div>
          <div class="col-lg-5 btn btn-primary pull-right">Total User
            <div>
              <h3>{{$tu}} User</h3>
            </div>
          </div>
        </div>
      </div>
     

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection