@extends('layouts.master')
@section('page-title', $blogPost->title)
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('{{url('img/Banner.jpg')}}')">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-heading">
                        <h1>{{$blogPost->title}}</h1>
                        <span class="meta">Posted by
              <a href="#">{{$blogPost->getUser($blogPost->user_id)}}</a>
              on {{$blogPost->formatDate($blogPost->publication_date)}}</span>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <!-- Post Content -->
    <article >
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto">
                    <div class="post-preview">
                        <p>{{$blogPost->description}}</p>


                    </div>
                </div>
            </div>
        </div>
    </article>
@stop
