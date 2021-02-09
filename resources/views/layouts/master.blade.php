<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>@yield('page-title') - Blog.com</title>

    <!-- core CSS -->
    <link rel="stylesheet" href="{{url('vendor/bootstrap/css/bootstrap.css')}}">



    <!-- Custom fonts -->
    <link rel="stylesheet" href="{{url('vendor/fontawesome-free/css/all.min.css')}}">

    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles -->
    <link rel="stylesheet" href="{{url('css/custom.css')}}">


</head>

<body class="blue-bg">

<!-- Navigation -->
@include('layouts.partials.header')

@yield('content')


<!-- Footer -->
@include('layouts.partials.footer')

<!-- core JavaScript -->
<script src="{{url('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{url('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>



<!-- Custom scripts -->
<script src="{{url('js/custom.js')}}"></script>
@yield('scripts')
</body>

</html>
