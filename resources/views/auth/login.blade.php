@extends('layouts.master')
@section('page-title', "Login")
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{url('img/Banner.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Login</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-8 mx-auto auth-wrapper">
                <div class="mb-3">
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <p class="alert alert-danger">{{ $error }}</p>
                        @endforeach

                    @endif

                    @if (session('success'))
                        <div class="alert alert-success alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
                            {{ session('success')}}
                        </div>
                    @endif

                    @if (session('error'))
                        <div class="alert alert-danger alert-dismissable">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">x</a>
                            {{ session('error')}}
                        </div>
                    @endif
                </div>
                <p>Please enter your details below or <a href="{{url('/auth/register')}}" class="auth-links">Register</a></p>

                <form  novalidate method="POST" action="{{url('/auth/login')}}">
                            @csrf
                    <div class="control-group mb-4">
                        <div class="form-group  controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email"  id="email" required data-validation-required-message="Please enter your email address.">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group col-xs-12  controls">
                            <label>Your Password</label>
                            <input type="password" class="form-control" name="password"  id="password" required data-validation-required-message="Please enter your password.">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>

                    <div class="mt-5 text-right">
                        <button type="submit" class="btn btn-primary" >Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@stop
@section('scripts')
    <script src="{{url('js/jqBootstrapValidation.js')}}"></script>
    <script src="{{url('js/validation.js')}}"></script>

@stop
