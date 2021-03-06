<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">Blog.com</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/') }}">What's Trending </a>
                </li>
                @if(!Auth::check())
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/auth/login') }}">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ url('/auth/register') }}">Register</a>
                </li>
               @else
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        My Account
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{url('/new-post')}}">Create new post</a>
                        <a class="dropdown-item" href="{{url('/dashboard')}}">My posts</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{url('/auth/logout')}}">Logout</a>
                    </div>
                </li>
                    @endif
            </ul>
        </div>
    </div>
</nav>
