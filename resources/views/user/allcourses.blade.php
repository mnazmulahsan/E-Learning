@extends('user/app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/courses.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/courses_responsive.css')}}">
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
                            <li>All Courses</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>			
</div>



<div class="courses">
    <div class="container">
        <div class="row">

            <!-- Courses Main Content -->
            <div class="col-lg-12">
                <div class="courses_search_container col-lg-8">
                    <form action="#" id="courses_search_form" class="courses_search_form d-flex flex-row align-items-center justify-content-start">
                        <input type="search" class="courses_search_input" placeholder="Search Courses" required="required">
                        <select id="courses_search_select" class="courses_search_select courses_search_input">
                            <option>All Categories</option>
                            <option>Category</option>
                            <option>Category</option>
                            <option>Category</option>
                        </select>
                        <button action="submit" class="courses_search_button ml-auto">search now</button>
                    </form>
                </div>
                <div class="courses_container">
                    <div class="row courses_row">
                        
                        @foreach($allcourse as $all)
                        <div class="col-lg-6 course_col">
                            <div class="course">
                                <div class="course_image"><img src="images/course_4.jpg" alt=""></div>
                                <div class="course_body">
                                    <h3 class="course_title"><a href="{{ url('/coursedetails/'.$all->id) }}">{{$all->title}}</a></h3>
                                    <div class="course_teacher">{{$all->created_by}}</div>
                                    <div class="course_text">
                                        <p>{{$all->description}}</p>
                                    </div>
                                </div>
                                <div class="course_footer">
                                    <div class="course_footer_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="course_info">
                                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                                            <span>20 Student</span>
                                        </div>
                                        <div class="course_info">
                                            <i class="fa fa-star" aria-hidden="true"></i>
                                            <span>5 Ratings</span>
                                        </div>
                                        <div class="course_price ml-auto">4500 Taka</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
    

                    </div>
                    <div class="row pagination_row">
                        <div class="col">
                            <div class="pagination_container d-flex flex-row align-items-center justify-content-start">
                                <ul class="pagination_list">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
                                </ul>
                                <div class="courses_show_container ml-auto clearfix">
                                    <div class="courses_show_text">Showing <span class="courses_showing">1-6</span> of <span class="courses_total">26</span> results:</div>
                                    <div class="courses_show_content">
                                        <span>Show: </span>
                                        <select id="courses_show_select" class="courses_show_select">
                                            <option>06</option>
                                            <option>12</option>
                                            <option>24</option>
                                            <option>36</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

           
    </div>
 </div>
</div>



@endsection