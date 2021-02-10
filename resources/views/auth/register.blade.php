@extends('layouts.master')
@section('page-title', "Register")
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{url('img/Banner.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Register</h1>
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
                <p>Please enter your details below or <a href="{{url('/auth/login')}}" class="auth-links">Login</a></p>

                <form method="POST" action="{{url('/auth/register')}}" novalidate>
                        @csrf
                    <div class="control-group mb-4">
                        <div class="form-group  controls">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="firstname"  id="firstname" required data-validation-required-message="Please enter your first name">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group mb-4">
                        <div class="form-group  controls">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="lastname"  id="lastname" required data-validation-required-message="Please enter your last name">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group mb-4">
                        <div class="form-group  controls">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email"  id="email" required data-validation-required-message="Please enter your email address.">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group mb-4">
                        <div class="form-group col-xs-12  controls">
                            <label>Your Password</label>
                            <input type="password" class="form-control" name="password"  id="password"  required data-validation-required-message="Please enter your password.">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group mb-4">
                        <div class="form-group col-xs-12  controls">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control"  id="password2" name="password2" required data-validation-required-message="Please confirm your password." data-validation-match-match="password" data-validation-match-message="password doesn't match">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>

                    <div class="mt-5 text-right">
                        <button type="submit" class="btn btn-primary" >Register</button>
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
