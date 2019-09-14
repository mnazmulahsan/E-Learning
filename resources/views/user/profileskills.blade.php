<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>{{Auth::user()->name}}'s Skills</title>

    <!-- Favicon -->

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="/user/styles/style.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('/user/dist/css/select2.min.css')}}">

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
                <a href="{{'/'}}" class="btn vcard-btn contact-btn"><i class="fa fa-envelope-o"></i><span>Back To The HomePage</span></a>
            </div>


            <!-- Header Area -->
            <header class="header_area">
                

                <!-- Menu -->
                <ul class="vcard-nav">
                    <li><a href="{{route('user.about', Auth::user()->id)}}">About</a></li>
                    <li class="active"><a href="{{route('user.skills', Auth::user()->id)}}">Skills</a></li>
                </ul>
            </header>

            <!-- Vcard Page Content -->
            <div class="vcard-page-content-wrapper d-flex align-items-end">
                <div class="page-content">

                    <!-- ##### About Me Area Start ##### -->
                    <div class="about-me-area section-padding-100 clearfix">
                        <div class="container-fluid">
                            <div class="row align-items-end">
                                <div class="col-12 col-xl-6">
                                    <div class="about-me-text">
                                        <h2>Hello!</h2>
                                        <h3 class="btn btn-info">@isset($about->fullName){{$about->fullName}}@endisset</h3>
                                        
                                    </div>
                                </div>

                                <div class="col-12 col-xl-6">
                                    <div class="about-me-text">
                                        <p>@isset($about->about){{$about->about}}@endisset</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ##### About Me Area End ##### -->
                   
                    <form action="{{route('user.skills', Auth::user()->id)}}" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                         <div class="form-group" style="margin-top: 18px;">
                          <label name="skills" class="btn btn-primary">Add Your Skills</label>
                          <select class="form-control select2 select2-hidden-accessible" multiple="multiple"data-placeholder="Select Skill" style="width: 100%;" tabindex="-1" aria-hidden="true" name="skills[]">
                            @foreach ($skills as $skill)
                              <option value="{{$skill->id}}"
                                @foreach(Auth::user()->skills as $existskill)
                                    @if($existskill->id == $skill->id)
                                       selected
                                    @endif  
                                @endforeach
                                >{{ $skill->name}}</option>
                            @endforeach
                          </select>
                          <input class="btn btn-primary" type="submit" value="Add" >
                        </div>
                    </form>
                    <div>
                        <h3 class="btn btn-success">Your Skills</h3>
                    </div>
                    <!-- ##### Skilss Area Start ##### -->
                    <div class="skills-area clearfix">
                        <div class="container-fluid">
                            <div class="row">

                                <!-- Single Skills Area -->
                                @foreach (Auth::user()->skills as $su) 
                                    <div class="col-12 col-md-6 col-xl-2">
                                        <div class="single-skils-area mb-100">
                                            <div>
                                                <h3 class="btn btn-danger"><span>{{$su->name}}</span></h3>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach            
                            </div>
                        </div>
                    </div>
                    <!-- ##### Skilss Area End ##### -->

                    
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

    <script src="{{ asset('/user/dist/js/select2.full.min.js')}}"></script>
    <script>
      
      $(document).ready(function(){

       $('.select2').select2();
      });
    </script>

</body>

</html>