
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
                            <li><a href="">{{$question->title}}</a></li>
                            <li><a href="">Answer</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>

<div><center><h4>Write Down Your Answer</h4></center>
            <br></div>
        


<div class="container">
    
	<div class="row col-lg-12">
        <form role="form" action="{{route('user.answer',$question->id)}}" method="post" >
            {{csrf_field()}}
			<input class="form-control" type="text" disabled="" value="{{$question->question}}"> 
            <div class="form-group">
                <label class="btn btn-success" for="answer">Answer:</label>
                <textarea class="form-control" name="answer" id="answer" cols="120" rows="10"></textarea>
                <input class="btn btn-primary" type="submit" value="Submit Answer">
            </div>

     
		</form>
		</div>
        <hr>
		
    
</div>
<br>
<br>
<br>



@endsection
@section('footerSection')
<script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script>
<script src='https://vjs.zencdn.net/7.6.0/video.js'></script>
@endsection