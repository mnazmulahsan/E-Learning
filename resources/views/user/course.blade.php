@extends('user/app')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/course.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('user/styles/course_responsive.css')}}">
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
            <div class="col-lg-8">
                
                <div class="course_container">
                    <div class="course_title">Software Training</div>
                    <div class="course_info d-flex flex-lg-row flex-column align-items-lg-center align-items-start justify-content-start">

                        <!-- Course Info Item -->
                        <div class="course_info_item">
                            <div class="course_info_title">Teacher:</div>
                            <div class="course_info_text"><a href="#">Jacke Masito</a></div>
                        </div>

                        <!-- Course Info Item -->
                        <div class="course_info_item">
                            <div class="course_info_title">Reviews:</div>
                            <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
                        </div>

                        <!-- Course Info Item -->
                        <div class="course_info_item">
                            <div class="course_info_title">Categories:</div>
                            <div class="course_info_text"><a href="#">Languages</a></div>
                        </div>

                    </div>

                    <!-- Course Image -->
                    <div class="course_image"><img src="images/course_image.jpg" alt=""></div>

                    <!-- Course Tabs -->
                    <div class="course_tabs_container">
                        <div class="tabs d-flex flex-row align-items-center justify-content-start">
                            <div class="tab active">description</div>
                            <div class="tab">curriculum</div>
                            <div class="tab">reviews</div>
                        </div>
                        <div class="tab_panels">

                            <!-- Description -->
                            <div class="tab_panel active">
                                <div class="tab_panel_title">Software Training</div>
                                <div class="tab_panel_content">
                                    <div class="tab_panel_text">
                                        <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosquad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent per conubia nostra, per inceptos himenaeos.</p>
                                    </div>
                                    <div class="tab_panel_section">
                                        <div class="tab_panel_subtitle">Requirements</div>
                                        <ul class="tab_panel_bullets">
                                            <li>Lorem Ipsn gravida nibh vel velit auctor aliquet. Class aptent taciti sociosquad litora torquent.</li>
                                            <li>Cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a.</li>
                                            <li>Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non mauris vitae erat consequat.</li>
                                            <li>Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</li>
                                        </ul>
                                    </div>
                                    <div class="tab_panel_section">
                                        <div class="tab_panel_subtitle">What is the target audience?</div>
                                        <div class="tab_panel_text">
                                            <p>This course is intended for anyone interested in learning to master his or her own body.This course is aimed at beginners, so no previous experience with hand balancing skillts is necessary Aenean viverra tincidunt nibh, in imperdiet nunc. Suspendisse eu ante pretium, consectetur leo at, congue quam. Nullam hendrerit porta ante vitae tristique. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
                                        </div>
                                    </div>
                                    <div class="tab_panel_faq">
                                        <div class="tab_panel_title">FAQ</div>

                                        <!-- Accordions -->
                                        <div class="accordions">
                                            
                                            <div class="elements_accordions">

                                                <div class="accordion_container">
                                                    <div class="accordion d-flex flex-row align-items-center"><div>Can I just enroll in a single course?</div></div>
                                                    <div class="accordion_panel">
                                                        <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                                    </div>
                                                </div>

                                                <div class="accordion_container">
                                                    <div class="accordion d-flex flex-row align-items-center active"><div>I'm not interested in the entire Specialization?</div></div>
                                                    <div class="accordion_panel">
                                                        <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                                    </div>
                                                </div>

                                                <div class="accordion_container">
                                                    <div class="accordion d-flex flex-row align-items-center"><div>What is the refund policy?</div></div>
                                                    <div class="accordion_panel">
                                                        <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                                    </div>
                                                </div>

                                                <div class="accordion_container">
                                                    <div class="accordion d-flex flex-row align-items-center"><div>What background knowledge is necessary?</div></div>
                                                    <div class="accordion_panel">
                                                        <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                                    </div>
                                                </div>

                                                <div class="accordion_container">
                                                    <div class="accordion d-flex flex-row align-items-center"><div>Do i need to take the courses in a specific order?</div></div>
                                                    <div class="accordion_panel">
                                                        <p>Lorem ipsun gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a.</p>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Curriculum -->
                            <div class="tab_panel tab_panel_2">
                                <div class="tab_panel_content">
                                    <div class="tab_panel_title">Software Training</div>
                                    <div class="tab_panel_content">
                                        <div class="tab_panel_text">
                                            <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio.</p>
                                        </div>

                                        <!-- Dropdowns -->
                                        <ul class="dropdowns">
                                            <li class="has_children">
                                                <div class="dropdown_item">
                                                    <div class="dropdown_item_title"><span>Lecture 1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                    <div class="dropdown_item_text">
                                                        <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="dropdown_item">
                                                            <div class="dropdown_item_title"><span>Lecture 1.1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                            <div class="dropdown_item_text">
                                                                <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown_item">
                                                            <div class="dropdown_item_title"><span>Lecture 1.2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                            <div class="dropdown_item_text">
                                                                <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="has_children">
                                                <div class="dropdown_item">
                                                    <div class="dropdown_item_title"><span>Lecture 2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                    <div class="dropdown_item_text">
                                                        <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                    </div>
                                                </div>
                                                <ul>
                                                    <li>
                                                        <div class="dropdown_item">
                                                            <div class="dropdown_item_title"><span>Lecture 2.1:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                            <div class="dropdown_item_text">
                                                                <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="dropdown_item">
                                                            <div class="dropdown_item_title"><span>Lecture 2.2:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                            <div class="dropdown_item_text">
                                                                <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li>
                                                <div class="dropdown_item">
                                                    <div class="dropdown_item_title"><span>Lecture 3:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                    <div class="dropdown_item_text">
                                                        <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown_item">
                                                    <div class="dropdown_item_title"><span>Lecture 4:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                    <div class="dropdown_item_text">
                                                        <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="dropdown_item">
                                                    <div class="dropdown_item_title"><span>Lecture 5:</span> Lorem Ipsn gravida nibh vel velit auctor aliquet.</div>
                                                    <div class="dropdown_item_text">
                                                        <p>Lorem Ipsn gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auci elit consequat ipsutis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus.</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <!-- Reviews -->
                            <div class="tab_panel tab_panel_3">
                                <div class="tab_panel_title">Course Review</div>

                                <!-- Rating -->
                                <div class="review_rating_container">
                                    <div class="review_rating">
                                        <div class="review_rating_num">4.5</div>
                                        <div class="review_rating_stars">
                                            <div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div>
                                        </div>
                                        <div class="review_rating_text">(28 Ratings)</div>
                                    </div>
                                    <div class="review_rating_bars">
                                        <ul>
                                            <li><span>5 Star</span><div class="review_rating_bar"><div style="width:90%;"></div></div></li>
                                            <li><span>4 Star</span><div class="review_rating_bar"><div style="width:75%;"></div></div></li>
                                            <li><span>3 Star</span><div class="review_rating_bar"><div style="width:32%;"></div></div></li>
                                            <li><span>2 Star</span><div class="review_rating_bar"><div style="width:10%;"></div></div></li>
                                            <li><span>1 Star</span><div class="review_rating_bar"><div style="width:3%;"></div></div></li>
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- Comments -->
                                <div class="comments_container">
                                    <ul class="comments_list">
                                        <li>
                                            <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                                <div class="comment_image"><div><img src="images/comment_1.jpg" alt=""></div></div>
                                                <div class="comment_content">
                                                    <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                                        <div class="comment_author"><a href="#">Milley Cyrus</a></div>
                                                        <div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
                                                        <div class="comment_time ml-auto">1 day ago</div>
                                                    </div>
                                                    <div class="comment_text">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
                                                    </div>
                                                    <div class="comment_extras d-flex flex-row align-items-center justify-content-start">
                                                        <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
                                                        <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <ul>
                                                <li>
                                                    <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                                        <div class="comment_image"><div><img src="images/comment_2.jpg" alt=""></div></div>
                                                        <div class="comment_content">
                                                            <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                                                <div class="comment_author"><a href="#">John Tyler</a></div>
                                                                <div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
                                                                <div class="comment_time ml-auto">1 day ago</div>
                                                            </div>
                                                            <div class="comment_text">
                                                                <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
                                                            </div>
                                                            <div class="comment_extras d-flex flex-row align-items-center justify-content-start">
                                                                <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
                                                                <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <div class="comment_item d-flex flex-row align-items-start jutify-content-start">
                                                <div class="comment_image"><div><img src="images/comment_3.jpg" alt=""></div></div>
                                                <div class="comment_content">
                                                    <div class="comment_title_container d-flex flex-row align-items-center justify-content-start">
                                                        <div class="comment_author"><a href="#">Milley Cyrus</a></div>
                                                        <div class="comment_rating"><div class="rating_r rating_r_4"><i></i><i></i><i></i><i></i><i></i></div></div>
                                                        <div class="comment_time ml-auto">1 day ago</div>
                                                    </div>
                                                    <div class="comment_text">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have alteration in some form, by injected humour.</p>
                                                    </div>
                                                    <div class="comment_extras d-flex flex-row align-items-center justify-content-start">
                                                        <div class="comment_extra comment_likes"><a href="#"><i class="fa fa-heart" aria-hidden="true"></i><span>15</span></a></div>
                                                        <div class="comment_extra comment_reply"><a href="#"><i class="fa fa-reply" aria-hidden="true"></i><span>Reply</span></a></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <div class="add_comment_container">
                                        <div class="add_comment_title">Add a review</div>
                                        <div class="add_comment_text">You must be <a href="#">logged</a> in to post a comment.</div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>

            <!-- Course Sidebar -->
            <div class="col-lg-4">
                <div class="sidebar">

                    <!-- Feature -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Course Feature</div>
                        <div class="sidebar_feature">
                            <div class="course_price">$180</div>

                            <!-- Features -->
                            <div class="feature_list">

                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="fa fa-clock-o" aria-hidden="true"></i><span>Duration:</span></div>
                                    <div class="feature_text ml-auto">2 weeks</div>
                                </div>

                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="fa fa-file-text-o" aria-hidden="true"></i><span>Lectures:</span></div>
                                    <div class="feature_text ml-auto">10</div>
                                </div>

                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="fa fa-question-circle-o" aria-hidden="true"></i><span>Lectures:</span></div>
                                    <div class="feature_text ml-auto">6</div>
                                </div>

                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="fa fa-list-alt" aria-hidden="true"></i><span>Lectures:</span></div>
                                    <div class="feature_text ml-auto">Yes</div>
                                </div>

                                <!-- Feature -->
                                <div class="feature d-flex flex-row align-items-center justify-content-start">
                                    <div class="feature_title"><i class="fa fa-users" aria-hidden="true"></i><span>Lectures:</span></div>
                                    <div class="feature_text ml-auto">35</div>
                                </div>

                            </div>
                        </div>
                    </div>

                    <!-- Feature -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Teacher</div>
                        <div class="sidebar_teacher">
                            <div class="teacher_title_container d-flex flex-row align-items-center justify-content-start">
                                <div class="teacher_image"><img src="images/teacher.jpg" alt=""></div>
                                <div class="teacher_title">
                                    <div class="teacher_name"><a href="#">Jacke Masito</a></div>
                                    <div class="teacher_position">Marketing & Management</div>
                                </div>
                            </div>
                            <div class="teacher_meta_container">
                                <!-- Teacher Rating -->
                                <div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
                                    <div class="teacher_meta_title">Average Rating:</div>
                                    <div class="teacher_meta_text ml-auto"><span>4.7</span><i class="fa fa-star" aria-hidden="true"></i></div>
                                </div>
                                <!-- Teacher Review -->
                                <div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
                                    <div class="teacher_meta_title">Review:</div>
                                    <div class="teacher_meta_text ml-auto"><span>12k</span><i class="fa fa-comment" aria-hidden="true"></i></div>
                                </div>
                                <!-- Teacher Quizzes -->
                                <div class="teacher_meta d-flex flex-row align-items-center justify-content-start">
                                    <div class="teacher_meta_title">Quizzes:</div>
                                    <div class="teacher_meta_text ml-auto"><span>600</span><i class="fa fa-user" aria-hidden="true"></i></div>
                                </div>
                            </div>
                            <div class="teacher_info">
                                <p>Hi! I am Masion, I’m a marketing & management  eros pulvinar velit laoreet, sit amet egestas erat dignissim. Sed quis rutrum tellus, sit amet viverra felis. Cras sagittis sem sit amet urna feugiat rutrum nam nulla ipsum.</p>
                            </div>
                        </div>
                    </div>

                    <!-- Latest Course -->
                    <div class="sidebar_section">
                        <div class="sidebar_section_title">Latest Courses</div>
                        <div class="sidebar_latest">

                            <!-- Latest Course -->
                            <div class="latest d-flex flex-row align-items-start justify-content-start">
                                <div class="latest_image"><div><img src="images/latest_1.jpg" alt=""></div></div>
                                <div class="latest_content">
                                    <div class="latest_title"><a href="course.html">How to Design a Logo a Beginners Course</a></div>
                                    <div class="latest_price">Free</div>
                                </div>
                            </div>

                            <!-- Latest Course -->
                            <div class="latest d-flex flex-row align-items-start justify-content-start">
                                <div class="latest_image"><div><img src="images/latest_2.jpg" alt=""></div></div>
                                <div class="latest_content">
                                    <div class="latest_title"><a href="course.html">Photography for Beginners Masterclass</a></div>
                                    <div class="latest_price">$170</div>
                                </div>
                            </div>

                            <!-- Latest Course -->
                            <div class="latest d-flex flex-row align-items-start justify-content-start">
                                <div class="latest_image"><div><img src="images/latest_3.jpg" alt=""></div></div>
                                <div class="latest_content">
                                    <div class="latest_title"><a href="course.html">The Secrets of Body Language</a></div>
                                    <div class="latest_price">$220</div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<!-- Newsletter -->

<div class="newsletter">
    <div class="newsletter_background" style="background-image:url(images/newsletter_background.jpg)"></div>
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="newsletter_container d-flex flex-lg-row flex-column align-items-center justify-content-start">

                    <!-- Newsletter Content -->
                    <div class="newsletter_content text-lg-left text-center">
                        <div class="newsletter_title">sign up for news and offers</div>
                        <div class="newsletter_subtitle">Subcribe to lastest smartphones news & great deals we offer</div>
                    </div>

                    <!-- Newsletter Form -->
                    <div class="newsletter_form_container ml-lg-auto">
                        <form action="#" id="newsletter_form" class="newsletter_form d-flex flex-row align-items-center justify-content-center">
                            <input type="email" class="newsletter_input" placeholder="Your Email" required="required">
                            <button type="submit" class="newsletter_button">subscribe</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection