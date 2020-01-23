<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Temidayo Onifade</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Fira+Sans|Roboto:300,400|Questrial|Satisfy">
  <link rel="stylesheet" type="text/css" href="{{asset('front/css/font-awesome.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('front/css/bootstrap.min.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('front/css/animate.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('front/css/style.css')}}">
</head>

<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60" onload="myFunction()">
  @include('layouts.head')

  @yield('content')
  
  @include('layouts.footer')

  <script src="{{asset('front/js/jquery.min.js')}}"></script>
  <script src="{{asset('front/js/jquery.easing.min.js')}}"></script>
  <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
  <script src="{{asset('front/js/jquery.bxslider.min.js')}}"></script>
  <script src="{{asset('front/js/wow.js')}}"></script>
  <script src="{{asset('front/js/custom.js')}}"></script>
  <script src="{{asset('front/contactform/contactform.js')}}"></script>

</body>

</html>
