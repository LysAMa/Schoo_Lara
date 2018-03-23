<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> {{isset($title) ? $title. ' | ' : ''}} School of Data</title>

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <!--     Semantic UI     -->
  <link rel="stylesheet" type="text/css" href="{{ asset('libs/semantic/dist/semantic.min.css')}}">


  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
    crossorigin="anonymous">
  <!-- Custom styles -->
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:700,900" rel="stylesheet">

  <!-- Custom core CSS -->

  <link rel="stylesheet" href="{{ asset('css/style.css')}}">
  <link rel="stylesheet" href="{{ asset('css/custom.css')}}">

</head>

<body data-ng-app="dashboardApp">

  <div class="container">
    @yield('content') @include('layouts/_footer')
  </div>


  <!-- Bootstrap core JavaScript
    ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <!--
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" 
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" 
    crossorigin="anonymous"></script>
    -->

  <script src="{{asset('js/jquery-3.2.1.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/jquery.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/bootstrap.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/material.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('libs/semantic/dist/semantic.min.js')}} type=" text/javascript ""></script>
  <!--  Semantic UI Plugin -->

  <!-- Angular Apps -->
  <script src="{{asset('js/angular.min.js')}}" type="text/javascript"></script>
  <script src="{{asset('js/angular/Apps/dashboardApp.js')}}"></script>
  @yield('appCtrls')


</body>

</html>