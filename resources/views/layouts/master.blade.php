<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>@yield('page-title') - Blog.com</title>

    <!-- core CSS -->
    {!! HTML::style('vendor/bootstrap/css/bootstrap.css') !!}


    <!-- Custom fonts -->
    {!! HTML::style('vendor/fontawesome-free/css/all.min.css') !!}
    <link href='https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Custom styles -->
    {!! HTML::style('css/custom.css') !!}

</head>

<body class="blue-bg">

<!-- Navigation -->
@include('layouts.partials.header')

@yield('content')


<!-- Footer -->
@include('layouts.partials.footer')
<!-- core JavaScript -->
{!! HTML::script('vendor/jquery/jquery.min.js') !!}
{!! HTML::script('vendor/bootstrap/js/bootstrap.bundle.min.js') !!}


<!-- Custom scripts -->
{!! HTML::script('js/custom.js') !!}
@yield('scripts')
</body>

</html>
