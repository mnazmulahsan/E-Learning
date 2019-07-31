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
        <li><a href="#">Course</a></li>
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
          <form role="form" action="{{ route('icourse.update',$cor->id)}}" method="post">
          {{-- <form role="form" id="catForm" method="post"> --}}
                {{csrf_field()}}
                {{method_field('PUT')}}
                
                  <div class=" col-lg-offset-1 col-lg-6">
                      <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" class="form-control" id="title" name="title" value="{{ $cor->title}}">
                      </div>

                       <div class="form-group">
                        <label for="subtitle">SubTitle</label>
                        <input type="text" class="form-control" id="subtitle" name="subtitle" value="{{ $cor->subTitle}}">
                       </div>

                       <div class="form-group">
                        <label for="descr">Description</label>
                        <input type="text" class="form-control" id="descr" name="descr" value="{{ $cor->description}}">
                       </div>

                       <div class="form-group">
                        <label for="requirement">Requirement</label>
                        <input type="text" class="form-control" id="requirement" name="requirement" value="{{ $cor->requirement}}">
                       </div>

                       <div class="form-group">
                        <label for="tar_audi">Targeted Audience</label>
                        <input type="text" class="form-control" id="tar_audi" name="tar_audi" value="{{ $cor->tar_audi}}">
                       </div>
  
        					    <select  style="width: 506px; height:35px" class="productcategory" id="prod_cat_id" name="   catt">					  	
        						  	<option value="0" disabled="true" selected="true">-Select-Category-</option>
        						  	@foreach($prod as $cat)
        						  		<option value="{{$cat->id}}" id="maincat">{{$cat->category_name}}</option>
        						  	@endforeach
        						  </select>
                     
        						  <select  style="width: 506px; height:35px" class="productname" name="subcatt">
        						  	<option value="0" disabled="true"  selected="true" id="subcat">-Select-SubCategory-</option>
        						  </select>
                        
        						  
        						  <select  style="width: 506px; height:35px" class="product" name="subsubcatt">

        						  	<option value="0" disabled="true"  selected="true" id="subsubcat">-Select-SubSubCategory-</option>
        						  </select>
              
                      <div class="form-group">
                       <button type="submit" class="btn btn-primary" id="saveBtn">Add</button>
                       <a class="btn btn-danger" href="{{ route('icourse.index')}}">Back</a>
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
 
 	<script type="text/javascript">


	$(document).ready(function(){

    $.ajaxSetup({
              headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
              }
        });


		$(document).on('change','.productcategory',function(){

			var cat_id=$(this).val();
			var div=$(this).parent();

			var op=" ";

			$.ajax({
				type:'get',
				url:'{!!URL::to('findProductName')!!}',
				data:{'id':cat_id},
				success:function(data){
					
					op+='<option value="0" selected disabled>Select SubCategory</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].category_name+'</option>';
				   }

				   div.find('.productname').html(" ");
				   div.find('.productname').append(op);
				},
				error:function(){

				}
			});
		});

		


		$(document).on('change','.productname',function(){
			

			var cat_id=$(this).val();
			var div=$(this).parent();

			var op=" ";

			$.ajax({
				type:'get',
				url:'{!!URL::to('findProductName')!!}',
				data:{'id':cat_id},
				success:function(data){
					
					op+='<option value="0" selected disabled>Select SubSubCategory</option>';
					for(var i=0;i<data.length;i++){
					op+='<option value="'+data[i].id+'">'+data[i].category_name+'</option>';
				   }

				   div.find('.product').html(" ");
				   div.find('.product').append(op);
				},
				error:function(){

				}
			});
		});

  });

</script>

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