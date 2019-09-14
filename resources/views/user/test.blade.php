<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{$user->name}}'s Profile</title>

    <!-- Favicon -->
    <link rel="icon" href="/user/img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="/user/styles/style.css">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="loader"></div>
    </div>

    <div class="vcard-main-wrapper">
        <div class="vcard-content-wrapper bg-img" style="background-image: url(/user/img/bg-img/bg5.jpg);">

            <!-- Contact Button -->
            <div class="horizontal-contact-btn">
                <a href="#" class="btn vcard-btn contact-btn"><i class="fa fa-envelope-o"></i><span>Have a nice day!</span></a>
            </div>

            <!-- Header Area -->
            <header class="header_area">
                <!-- Logo -->
                <div class="logo d-flex justify-content-center align-items-center">
                    <a href="index-horizontal-about.html"><img src="/user/img/core-img/logo.png" alt=""></a>
                    <!-- Navbar Toggle -->
                    <div class="nav-toggle">
                        <i class="fa fa-bars"></i>
                    </div>
                </div>

                <!-- Menu -->
                <ul class="vcard-nav">
                    <li class="active"><a href="{{route('user.about', Auth::user()->id)}}">About</a></li>
                    <li><a href="{{route('user.skills', Auth::user()->id)}}">Skills</a></li>
                </ul>
            </header>

            <!-- Vcard Page Content -->
            <div class="vcard-page-content-wrapper d-flex align-items-end">
                <div class="page-content">

                    <!-- Hero Content -->
                    <div class="hero-area horizontal clearfix">
                        <div class="hero-content">
                            <h5>Hello I’m </h5>
                            <h3>
                                @isset($about->fullName)
                                    {{$about->fullName}}
                                @endisset                               
                            </h3>
                            <h4>
                                @isset($about->designation)
                                    {{$about->designation}}
                                @endisset
                            </h4>
                            <h4>From :@isset($about->address)
                                    {{$about->address}}
                                @endisset
                            </h4>
                            <!-- Contact Info -->
                            <div class="contact-info mt-30">
                                <a href="#"><img src="/user/img/core-img/envelope2.png" alt="">{{$user->email}}</a>
                                <a href="#"><img src="/user/img/core-img/phone-call2.png" alt="">+880 
                                     @isset($about->number)
                                      {{ $about->number}}
                                     @endisset
                                </a>
                            </div>
                            <br>
                            <div>
                                <div class="card">
                                    <div class="btn btn-primary">
                                       About {{$user->name}}
                                    </div>
                                    <div class="card-body">
                                        <p>@isset($about->about)
                                             {{$about->about}}
                                           @endisset
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!-- Social Info -->
                            <div class="social-info mt-30">
                                <a href="@isset($about->facebook)
                                          {{$about->facebook}}
                                         @endisset
                                " data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="@isset($about->linkedin)
                                           {{$about->linkedin}}
                                         @endisset
                                " data-toggle="tooltip" data-placement="top" title="LinkedIn"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="@isset($about->facebook)
                                          {{$about->facebook}}
                                         @endif
                                " data-toggle="tooltip" data-placement="top" title="Git"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                            <center>
                                <div>
                                    <a href="{{route('user.aboutupdate', Auth::user()->id)}}"><input type="submit" class="btn btn-primary" value="Update Info"></a>     <span><a href="{{route('user.aboutcreate', Auth::user()->id)}}"><input type="submit" class="btn btn-primary" value="Create Info"></a></span>
                                </div>   
                            </center>



                        </div>

                </div>
            </div>

        </div>
    </div>

    <!-- ##### All Javascript Files ##### -->
    <!-- jQuery-2.2.4 js -->
    <script src="/user/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="/user/js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/user/js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="/user/js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="/user/js/active.js"></script>

</body>

</html>