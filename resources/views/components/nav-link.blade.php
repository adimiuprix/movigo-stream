<!-- menu nav -->
<ul class="menu__nav">
    <!-- dropdown -->
    <li class="menu__nav-item">
        <a class="menu__nav-link" href="#">Home</a>
    </li>
    <!-- end dropdown -->
    <li class="menu__nav-item">
        <a href="movies" class="menu__nav-link">All movie</a>
    </li>
    <!-- dropdown -->
    <li class="menu__nav-item">
        <a class="menu__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Genre
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/>
            </svg>
        </a>
        <ul class="dropdown-menu menu__dropdown-menu">
            @foreach ($genres as $genre)
            <li class="menu__nav-item">
                <a class="menu__nav-link" href="{{ $genre->slug }}">{{ $genre->g_name }}</a>
            </li>
            @endforeach
        </ul>
    </li>
    <!-- end dropdown -->
    <li class="menu__nav-item">
        <a href="about" class="menu__nav-link">About</a>
    </li>
    <li class="menu__nav-item">
        <a href="contact" class="menu__nav-link">Contact</a>
    </li>
    <!-- dropdown -->
    <li class="menu__nav-item">
        <a class="menu__nav-link menu__nav-link--more" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                <path d="M12,10a2,2,0,1,0,2,2A2,2,0,0,0,12,10ZM5,10a2,2,0,1,0,2,2A2,2,0,0,0,5,10Zm14,0a2,2,0,1,0,2,2A2,2,0,0,0,19,10Z"/>
            </svg>
        </a>
        <ul class="dropdown-menu menu__dropdown-menu">
            <li><a href="signin">Sign In</a></li>
            <li><a href="signup">Sign Up</a></li>
            <li><a href="forgot">Forgot password</a></li>
            <li><a href="404">404 Page</a></li>
        </ul>
    </li>
    <!-- end dropdown -->
</ul>
<!-- end menu nav -->