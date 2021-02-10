@extends('layouts.master')
@section('page-title', "What's Trending")
@section('content')
<!-- Page Header -->
<header class="masthead" style="background-image: url('{{url('img/Banner.jpg')}}')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <div class="site-heading">
                    <h1>Be Informed</h1>
                    <span class="subheading">Evolving Today for better Tomorrow</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">

            @if(count($blogPosts) == 0)
             <div class="row">
                 <div class="col-md-12 text-center">
                     <h2>No Blog Post found</h2>
                 </div>
             </div>
            @else
                @foreach($blogPosts as $value)

            <div class="post-preview">
                <a href="post.html">
                    <h2 class="post-title">
                         {{$value->title}}
                    </h2>
                    <h3 class="post-summary">
                        {{$value->getPostSummary($value->description)}}
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">{{$value->getUser($value->user_id)}}</a>
                    on {{$value->formatDate($value->created_at)}}</p>
            </div>
                @endforeach
            @endif


            <!-- Pager -->
            <div class="clearfix">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#">Next</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</div>
@stop
