

<!DOCTYPE html>
<html lang="en">
<head>
<title>E-Learning</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Unicat project">
<meta name="viewport" content="width=device-width, initial-scale=1">
@include('user/layout/head')
@yield('css')

</head>
<body>

<div class="super_container">

	<!-- Header -->

@include('user/layout/header')
	
	<!-- Home -->

  @section('home')
      
  @show
	


	<!-- Footer -->

@include('user/layout/footer')
<!--
<script>
        
      $("#main-cat").click(function(){
       $(".catagory").toggle();
         });
	 
  </script>
-->
 
</body>
</html>