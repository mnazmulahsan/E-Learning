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
    <br>

    <div>
        <center><h2 class="btn btn-primary">Update Your Info</h2></center>
    </div>
    
    <div>
        <form role="form" action="{{route('user.aboutupdate', $user->id)}}" method="post">
        {{-- <form role="form" id="catForm" method="post"> --}}
              {{csrf_field()}}
              
                <div class=" offset-lg-2 col-lg-8">
                    <div class="form-group">
                      <label for="fname">Full Name</label>
                      <input type="text" class="form-control" id="fname" name="fname" value="@isset($about->fullName){{$about->fullName}}@endisset">
                    </div>

                     <div class="form-group">
                      <label for="desig">Designation</label>
                      <input type="text" class="form-control" id="desig" name="desig" value="@isset($about->designation){{$about->designation}}@endisset">
                     </div>

                     <div class="form-group">
                      <label for="add">Address</label>
                      <input type="text" class="form-control" id="add" name="add" value="@isset($about->address){{$about->address}}@endisset">
                     </div>

                     <div class="form-group">
                      <label for="number">Number</label>
                      <input type="text" class="form-control" id="number" name="number" value="@isset($about->number){{$about->number}}@endisset">
                     </div>
                     <div class="form-group">
                      <label for="about">About</label>
                      <textarea class="form-control" name="about" id="about" cols="30" rows="10">@isset($about->about){{$about->about}}@endisset</textarea>
                     </div>

                     <div class="form-group">
                      <label for="fb">Facebook</label>
                      <input type="text" class="form-control" id="fb" name="fb" value="@isset($about->facebook){{$about->facebook}}@endisset">
                     </div>

                     <div class="form-group">
                      <label for="linked">LinkedIn</label>
                      <input type="text" class="form-control" id="linked" name="linked" value="@isset($about->linkedin){{$about->linkedin}}@endisset">
                     </div>

                     <div class="form-group">
                      <label for="git">Git</label>
                      <input type="text" class="form-control" id="git" name="git" value="@isset($about->git){{$about->git}}@endisset">
                     </div>
        
                    <div class="form-group">
                     <button type="submit" class="btn btn-primary" id="saveBtn">Save</button>
                     <a class="btn btn-danger" href="{{route('user.about',$user->id)}}">Back</a>
                    </div>
                </div>
          
        </form>
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