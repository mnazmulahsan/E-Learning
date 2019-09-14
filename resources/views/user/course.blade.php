
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
                            <li><a href="courses.html">Courses</a></li>
                            <li>Course Details</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>


<!-- Course -->


<div class="course">
    <div class="container">
        <div class="row">

            <!-- Course -->
            <div class="col-lg-12">
                
                <div class="course_container">
                    <div class="course_title">{{$cour->title}}</div>
                    <div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">
    
                        <div class="course_info_item">
                            <div class="course_info_title">Teacher:</div>
                            <div class="course_info_text"><a href="#">
                                @foreach($cour->instructors as $ins)

                                  {{$ins->name}}

                                @endforeach
                            </a></div>
                        </div>
                        <div class="course_info_item">
                            <div class="course_info_title">Categories:</div>
                            <div class="course_info_text"><a href="#">{{$cour->category_id}} {{$cour->subcategory_id}} {{$cour->subsubcategory_id}}</a></div>
                        </div>
                    </div>
                    done

                    <div class="course_tabs_container">
                        <div class="tabs d-flex flex-row align-items-center justify-content-start">
                            <div class="tab active">Description</div>
                        </div>
                        <div class="tab_panels">

                            <!-- Description -->
                            <div class="tab_panel active">
                                <div class="tab_panel_title">{{$cour->title}}</div>
                                <div class="tab_panel_content">
                                    <div class="tab_panel_text">
                                        <p>{{$cour->description}}</p>
                                    </div>
                                    <div class="tab_panel_section">
                                        <div class="tab_panel_subtitle">Requirements</div>
                                        <ul class="tab_panel_bullets">
                                            <li>{{$cour->requirement}}</li>
                                            
                                        </ul>
                                    </div>
                                    <div class="tab_panel_section">
                                        <div class="tab_panel_subtitle">What is the target audience?</div>
                                        <div class="tab_panel_text">
                                            <p>{{$cour->tar_audi}}</p>
                                        </div>
                                    </div>                                  
                                </div>                           
                            </div>
                        </div>
                     </div>
             
                </div>



        @if (Auth::check())
            @if( $cour->enrolled($cour->id, Auth::user()->id))
                <div>
                    <a class="btn btn-danger" href="{{route('user.video', $cour->id)}}">See Course Materials</a>
                </div>
            @else
                <div>
                    <a href="{{ route('enroll', $cour->id)}}" class="btn btn-primary">First Enroll</a>
                </div>
            @endif
        @else 
           <div>
               <a href="{{ route('login') }}" class="btn btn-danger">Please Login To See Course Materials</a>
           </div>      
        @endif
              
            </div>
        </div>
    </div>
</div>


@endsection