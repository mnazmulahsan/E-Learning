@extends('user/app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/course.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/course_responsive.css')}}">
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
                            <li><a href="index.html">Home</a></li>
                            <li><a href="courses.html">Contact</a></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>


<div class="container">
	<div class="row">
		
		<div class="col-lg-7">
			<h2>Offline Location</h2>
			<!--map-->
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.405718203368!2d90.30901191435092!3d23.875227789914494!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c259fa853253%3A0xeb42feba436deb20!2sDaffodil+International+University%2C+Bangladesh!5e0!3m2!1sen!2sbd!4v1558854126980!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			
		</div>

		<div class="col-lg-5">
			<h2>Offline Location</h2>
			<div class="card">
				<div class="card-body">
					<h2>Offline Location</h2>
					<h2>Offline Location</h2>
					<h2>Offline Location</h2>
					<h2>Offline Location</h2>
					<h2>Offline Location</h2>
					<h2>Offline Location</h2>
					<h2>Offline Location</h2>
					<h2>Offline Location</h2>
					<h2>Offline Location</h2>
					<h2>Offline Location</h2>
				</div>
			</div>
			
		</div>
		
	</div>
</div>

		


@endsection