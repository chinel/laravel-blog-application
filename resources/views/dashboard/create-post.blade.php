@extends('layouts.master')
@section('page-title', "Create Post")
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/Banner.jpg')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>Create new post</h1>
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
                <p>Please fill in the post details below</p>

                <form  novalidate>

                    <div class="control-group mb-4">
                        <div class="form-group  controls">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" id="title" required data-validation-required-message="Please enter the post title">
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>
                    <div class="control-group mb-4">
                        <div class="form-group  controls">
                            <label>Description</label>
                            <textarea rows="5" class="form-control" name="description" id="description" required data-validation-required-message="Please enter the post description."></textarea>
                            <span class="help-block text-danger"></span>
                        </div>
                    </div>

                    <div class="mt-5 text-right">
                        <button type="submit" class="btn btn-primary" >Submit Post</button>
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
