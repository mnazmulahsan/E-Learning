<!DOCTYPE html>
<html>
<head>
	@include('Instructor.layouts.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
@include('Instructor.layouts.header')
@include('Instructor.layouts.leftsidebar')

@section('main-content')

@show

@include('Instructor.layouts.footer')
</div>
</body>
</html>