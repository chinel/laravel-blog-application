@extends('layouts.master')
@section('page-title', "My Posts")
@section('content')
    <!-- Page Header -->
    <header class="masthead" style="background-image: url('img/Banner.jpg')">
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
            <div class="col-lg-4 col-md-8 col-sm-12">
                <div class="post-preview blog-wrapper">
                    <a href="post.html">
                        <h2 class="post-title">
                            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                        </h2>
                    </a>
                    <h3 class="post-summary">
                        Problems look mighty small from 150 miles up......
                    </h3>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on September 18, 2019</p>
                </div>

            </div>
            <div class="col-lg-4 col-md-8 col-sm-12  ">
                <div class="post-preview blog-wrapper">
                    <a href="post.html">
                        <h2 class="post-title">
                            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                        </h2>
                    </a>
                    <h3 class="post-summary">
                        Problems look mighty small from 150 miles up......
                    </h3>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on September 18, 2019</p>
                </div>

            </div>
            <div class="col-lg-4 col-md-8 col-sm-12  ">
                <div class="post-preview blog-wrapper">
                    <a href="post.html">
                        <h2 class="post-title">
                            I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                        </h2>
                    </a>
                    <h3 class="post-summary">
                        Problems look mighty small from 150 miles up......
                    </h3>
                    <p class="post-meta">Posted by
                        <a href="#">Start Bootstrap</a>
                        on September 18, 2019</p>
                </div>

            </div>
            <div class="col-lg-12 clearfix">
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


@stop
