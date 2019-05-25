@extends('user/app')
@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/responsive.css')}}">
@endsection

@section('category')

<div>
    <ul class="list-inline">
        <li class="list-inline-item" id="main-cat"><a href="#">Categories</a>

            <!-- category copied from final project file -->
               
               <ul class="catagory">

                @foreach($cat as $ca)
                    <li class="dev-hover"><a href="">{{ $ca->category_name}}</a>
                        <ul class="dev-part">
                            @foreach($ca->childs() as $child)
                            <li class="web-hover">
                                <a href="#">
                                {{ $child->category_name }}
                            </a>
                                <ul class="sub_dev">
                                    @foreach($child->childs() as $ch)

                                    <li><a href="#">{{ $ch->category_name }}</a></li>
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
    <div class="home_slider_container">
        
        <!-- Home Slider -->
        <div class="owl-carousel owl-theme home_slider">
            
            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url({{asset('user/images/home_slider_1.jpg')}})"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="home_slider_title">Skilled Bangladesh</div>
                                <div class="home_slider_subtitle">Future Of Education Technology</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url({{asset('user/images/home_slider_1.jpg')}})"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="home_slider_title">Skilled Bangladesh</div>
                                <div class="home_slider_subtitle">Future Of Education Technology</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Home Slider Item -->
            <div class="owl-item">
                <div class="home_slider_background" style="background-image:url({{asset('user/images/home_slider_1.jpg')}})"></div>
                <div class="home_slider_content">
                    <div class="container">
                        <div class="row">
                            <div class="col text-center">
                                <div class="home_slider_title">Skilled Bangladesh</div>
                                <div class="home_slider_subtitle">Future Of Education Technology</div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- Home Slider Nav -->

    <div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
    <div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
</div>


<!-- Popular Courses -->

<div class="courses">
    <div class="section_background parallax-window" data-parallax="scroll" data-image-src="{{asset('user/images/courses_background.jpg')}}" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Popular Online Courses</h2>
                    <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
                </div>
            </div>
        </div>
        <div class="row courses_row">
            
            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="images/course_1.jpg" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="course.html">Software Training</a></h3>
                        <div class="course_teacher">Mr. John Taylor</div>
                        <div class="course_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
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
                            <div class="course_price ml-auto">$130</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="images/course_2.jpg" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="course.html">Developing Mobile Apps</a></h3>
                        <div class="course_teacher">Ms. Lucius</div>
                        <div class="course_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
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
                            <div class="course_price ml-auto">Free</div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Course -->
            <div class="col-lg-4 course_col">
                <div class="course">
                    <div class="course_image"><img src="images/course_3.jpg" alt=""></div>
                    <div class="course_body">
                        <h3 class="course_title"><a href="course.html">Starting a Startup</a></h3>
                        <div class="course_teacher">Mr. Charles</div>
                        <div class="course_text">
                            <p>Lorem ipsum dolor sit amet, consectetur adipi elitsed do eiusmod tempor</p>
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
                            <div class="course_price ml-auto"><span>$320</span>$220</div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="row">
            <div class="col">
                <div class="courses_button trans_200"><a href="#">view all courses</a></div>
            </div>
        </div>
    </div>
</div>

<!-- Events -->

<div class="events">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">Upcoming events</h2>
                    <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
                </div>
            </div>
        </div>
        <div class="row events_row">

            <!-- Event -->
            <div class="col-lg-4 event_col">
                <div class="event event_left">
                    <div class="event_image"><img src="images/event_1.jpg" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">21</div>
                                <div class="event_month trans_200">Aug</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Which Country Handles Student Debt?</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>15.00 - 19.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 New York City</span></div>
                                <div class="event_text">
                                    <p>Policy analysts generally agree on a need for reform, but not on which path...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event -->
            <div class="col-lg-4 event_col">
                <div class="event event_mid">
                    <div class="event_image"><img src="images/event_2.jpg" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">27</div>
                                <div class="event_month trans_200">Aug</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Repaying your student loans (Winter 2017-2018)</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>09.00 - 17.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 Brooklyn City</span></div>
                                <div class="event_text">
                                    <p>This Consumer Action News issue covers topics now being debated before...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Event -->
            <div class="col-lg-4 event_col">
                <div class="event event_right">
                    <div class="event_image"><img src="images/event_3.jpg" alt=""></div>
                    <div class="event_body d-flex flex-row align-items-start justify-content-start">
                        <div class="event_date">
                            <div class="d-flex flex-column align-items-center justify-content-center trans_200">
                                <div class="event_day trans_200">01</div>
                                <div class="event_month trans_200">Sep</div>
                            </div>
                        </div>
                        <div class="event_content">
                            <div class="event_title"><a href="#">Alternative data and financial inclusion</a></div>
                            <div class="event_info_container">
                                <div class="event_info"><i class="fa fa-clock-o" aria-hidden="true"></i><span>13.00 - 18.30</span></div>
                                <div class="event_info"><i class="fa fa-map-marker" aria-hidden="true"></i><span>25 New York City</span></div>
                                <div class="event_text">
                                    <p>Policy analysts generally agree on a need for reform, but not on which path...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Team -->

<div class="team">
    <div class="team_background parallax-window" data-parallax="scroll" data-image-src="images/team_background.jpg" data-speed="0.8"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section_title_container text-center">
                    <h2 class="section_title">The Best Tutors in Town</h2>
                    <div class="section_subtitle"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec vel gravida arcu. Vestibulum feugiat, sapien ultrices fermentum congue, quam velit venenatis sem</p></div>
                </div>
            </div>
        </div>
        <div class="row team_row">
            
            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_1.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Jacke Masito</a></div>
                        <div class="team_subtitle">Marketing & Management</div>
                        <div class="social_list">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_2.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">William James</a></div>
                        <div class="team_subtitle">Designer & Website</div>
                        <div class="social_list">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_3.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">John Tyler</a></div>
                        <div class="team_subtitle">Quantum mechanics</div>
                        <div class="social_list">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Item -->
            <div class="col-lg-3 col-md-6 team_col">
                <div class="team_item">
                    <div class="team_image"><img src="images/team_4.jpg" alt=""></div>
                    <div class="team_body">
                        <div class="team_title"><a href="#">Veronica Vahn</a></div>
                        <div class="team_subtitle">Math & Physics</div>
                        <div class="social_list">
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

@endsection