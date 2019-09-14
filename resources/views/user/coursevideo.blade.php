
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
                            <li><a href="">{{$course->title}}</a></li>
                            <li><a href="">Videos</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>

<div><center><h2>All Videos <span class="btn btn-primary">{{$course->title}}</span><a href="{{route('user.quizzes',$course->id)}}" class="btn btn-danger">Give Quizzes</a><span></span></h2></center>
            <br></div>
            


<div class="container">
    @foreach ($vdo as $vd)
	<div class="row col-lg-12">
						 
                <div class="col-lg-5 pull-left">
                    <br>
                    <br>
                    <br>
                    <br>
                    <br>
                    <h3>Title: {{$vd->title}}</h3>
                </div>
                
                <div class="col-lg-7 pull-right">
                    <video id='my-video' class='video-js' controls preload='auto' width='640' height='264'
                     poster='MY_VIDEO_POSTER.jpg' data-setup='{}'>
                       <source src='{{URL::asset("storage/videos/$vd->link")}}' type='video/mp4'>
                       <source src='MY_VIDEO.webm' type='video/webm'>
                       <p class='vjs-no-js'>
                         To view this video please enable JavaScript, and consider upgrading to a web browser that
                         <a href='https://videojs.com/html5-video-support/' target='_blank'>supports HTML5 video</a>
                       </p>
                     </video>

                     
                </div>

			
		</div>
        <hr>
		@endforeach
    
</div>

		


@endsection
@section('footerSection')
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<script src='https://vjs.zencdn.net/7.6.0/video.js'></script>
@endsection