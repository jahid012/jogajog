<div class="navbar-nav navbar-nav-hover align-items-lg-center ml-auto">
    <nav id="navigation" class="style-1">
        <ul id="responsive">
            <li>
                <a class="current" href="{{route('home')}}">Home</a>
            </li>
            <li>
                <a href="{{route('listings')}}">Listings</a>
            </li>
            <li>
                <a href="{{route('success-stories')}}">Success Stories</a>
            </li>
        </ul>
    </nav>
    <div class="header-widget">
        <a class="btn btn-neutral btn-icon btn-radius" href="{{route('listings.create')}}">Add Listing <i class="fa fa-plus"></i></a>
    </div>
    <nav id="navigation" class="style-1">
        <ul id="responsive" class="auth-nav">
            <li><a href="{{route('login')}}">Login</a></li>
            <li><a>/</a></li>
            <li><a href="{{route('register')}}">Register</a></li>
        </ul>
    </nav>
</div>