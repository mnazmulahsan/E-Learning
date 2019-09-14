
@extends('user/app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/course.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/course_responsive.css')}}">
<link href="https://vjs.zencdn.net/7.6.0/video-js.css" rel="stylesheet">

  

@endsection

@section('category')

<div>
    <ul class="list-inline">
        <li class="list-inline-item" id="main-cat"><a href="#">Categories</a>

            <!-- category copied from final project file -->
               
               <ul class="catagory">

                @foreach($cat as $ca)
                    <li class="dev-hover"><a href="{{route('user.catwisecourse',$ca->id)}}">{{ $ca->category_name}}</a>
                        <ul class="dev-part">
                            @foreach($ca->childs() as $child)
                            <li class="web-hover">
                                <a href="{{route('user.catwisecourse',$child->id)}}">
                                {{ $child->category_name }}
                            </a>
                                <ul class="sub_dev">
                                    @foreach($child->childs() as $ch)

                                    <li><a href="{{route('user.catwisecourse',$ch->id)}}">{{ $ch->category_name }}</a></li>
                                    @endforeach
                                </ul>

                            </li>
                            @endforeach
                            
                            
                        </ul>
                    
                    </li>
                @endforeach



               </ul>


            <!-- category ended from final project file -->


        </li>
    </ul>
</div>

@endsection



@section('home')

<div class="home">
    <div class="breadcrumbs_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a href="">Quizzes Marks</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>

<div><center><h2>All Quizzes Marks</center>
            <br></div>

            


<div class="container">
    @foreach ($marks as $vd)
	<div class="row col-lg-12">
					 
                <div class="col-lg-5 pull-left">
                    <h4>Quiz Title: <span class="btn btn-primary">{{$vd->title}}</span> </h4>
                </div>
                
                <div class="col-lg-5 pull-right"> 
                    <h4> {{$vd->question}}</h4>
                </div>

                <div class="col-lg-2 pull-right">
                    <h4>Marks: {{$vd->mark}}</h4>      
                </div>

			
		</div>
        <hr>
		@endforeach
    
</div>
<br>
<br>
<br>



@endsection
@section('footerSection')
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<script src='https://vjs.zencdn.net/7.6.0/video.js'></script>
@endsection