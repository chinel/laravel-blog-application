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
                <div class="row">
                    <div class="col-md-12 text-right mb-5">
                        <form action="{{url('/')}}" method="GET" id="viewBy">
                            <select name="sortBy" id="filter" >
                                <option @if(request()->query('sortBy') === "latest") selected @endif value="latest">Latest Trends</option>
                                <option @if(request()->query('sortBy') === "oldest") selected @endif value="oldest">Old Trends</option>
                            </select>
                        </form>
                    </div>
                </div>
                @foreach($blogPosts as $value)

            <div class="post-preview">
                <a href="{{url('/blog/'.$value->id)}}">
                    <h2 class="post-title">
                         {{$value->title}}
                    </h2>
                    <h3 class="post-summary">
                        {{$value->getPostSummary($value->description)}}
                    </h3>
                </a>
                <p class="post-meta">Posted by
                    <a href="#">{{$value->getUser($value->user_id)}}</a>
                    on {{$value->formatDate($value->publication_date)}}</p>
            </div>
                @endforeach
            @endif


            <!-- Pager -->
            <div class="clearfix pagination-wrapper ">
                {!! $blogPosts->links() !!}

            </div>
        </div>
    </div>
</div>
@stop
