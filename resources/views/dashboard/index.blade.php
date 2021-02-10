@extends('layouts.master')
@section('page-title', "My Posts")
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{url('img/Banner.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="page-heading">
                        <h1>My Posts</h1>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
       <div class="col-lg-4 col-md-4 col-sm-12"></div>
            <div class="col-lg-4 col-md-4 col-sm-12">
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
            <div class="col-lg-4 col-md-4 col-sm-12"></div>
        </div>

            @if(count($blogPosts) == 0)
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2>No Blog Post found</h2>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-12 text-right mb-5">
                        <form action="{{url('/dashboard')}}" method="GET" id="viewBy">
                            <select name="sortBy" id="filter" >
                                <option @if(request()->query('sortBy') === "latest") selected @endif value="latest">Latest Trends</option>
                                <option @if(request()->query('sortBy') === "oldest") selected @endif value="oldest">Old Trends</option>
                            </select>
                        </form>
                    </div>
                </div>
            <div class="row">
                @foreach($blogPosts as $value)
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="post-preview blog-wrapper">
                    <a href="post.html">
                        <h2 class="post-title">
                            {{$value->title}}
                        </h2>
                    </a>
                    <h3 class="post-summary">
                        {{$value->getPostSummary($value->description)}}
                    </h3>
                    <p class="post-meta">Posted by
                        <a href="#">{{$value->getUser($value->user_id)}}</a>
                        on {{$value->formatDate($value->created_at)}}</p>
                </div>

            </div>
                @endforeach
            </div>
            @endif

            <!-- Pager -->
                <div class="clearfix pagination-wrapper ">
                    {!! $blogPosts->links() !!}

                </div>

    </div>


@stop
