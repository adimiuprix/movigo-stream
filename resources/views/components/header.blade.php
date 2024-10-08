<!-- header -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="header__content">
                    <!-- header logo -->
                    <a href="{{ route('home') }}" class="header__logo">
                        <img src="{{ asset('public/img/logo.svg') }}" alt="">
                    </a>
                    <!-- end header logo -->
                    <!-- header nav -->
                    <ul class="header__nav">
                        <!-- dropdown -->
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <!-- end dropdown -->
                        <li class="header__nav-item">
                            <a href="movies" class="header__nav-link">All Movie</a>
                        </li>
                        <!-- dropdown -->
                        <li class="header__nav-item">
                            <a class="header__nav-link" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Genre
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M17,9.17a1,1,0,0,0-1.41,0L12,12.71,8.46,9.17a1,1,0,0,0-1.41,0,1,1,0,0,0,0,1.42l4.24,4.24a1,1,0,0,0,1.42,0L17,10.59A1,1,0,0,0,17,9.17Z"/>
                                </svg>
                            </a>
                            <ul class="dropdown-menu header__dropdown-menu">
                                @foreach ($genres as $genre)
                                <li>
                                    <a href="{{ $genre->slug }}">{{ $genre->g_name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <!-- end dropdown -->
                        <li class="header__nav-item">
                            <a href="about" class="header__nav-link">About</a>
                        </li>
                        <li class="header__nav-item">
                            <a href="contact" class="header__nav-link">Contact</a>
                        </li>
                    </ul>
                    <!-- end header nav -->
                    <!-- header actions -->
                    <div class="header__actions">
                        <form action="#" class="header__search">
                            <input type="text" placeholder="Search">
                            <button type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M21.71,20.29,18,16.61A9,9,0,1,0,16.61,18l3.68,3.68a1,1,0,0,0,1.42,0A1,1,0,0,0,21.71,20.29ZM11,18a7,7,0,1,1,7-7A7,7,0,0,1,11,18Z"></path>
                                </svg>
                            </button>
                        </form>
                        <a href="signin" class="header__sign-in">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                <path d="M20,12a1,1,0,0,0-1-1H11.41l2.3-2.29a1,1,0,1,0-1.42-1.42l-4,4a1,1,0,0,0-.21.33,1,1,0,0,0,0,.76,1,1,0,0,0,.21.33l4,4a1,1,0,0,0,1.42,0,1,1,0,0,0,0-1.42L11.41,13H19A1,1,0,0,0,20,12ZM17,2H7A3,3,0,0,0,4,5V19a3,3,0,0,0,3,3H17a3,3,0,0,0,3-3V16a1,1,0,0,0-2,0v3a1,1,0,0,1-1,1H7a1,1,0,0,1-1-1V5A1,1,0,0,1,7,4H17a1,1,0,0,1,1,1V8a1,1,0,0,0,2,0V5A3,3,0,0,0,17,2Z"/>
                            </svg>
                            <span>sign in</span>
                        </a>
                    </div>
                    <!-- end header actions -->
                    <!-- header menu btn -->
                    <button class="header__btn" type="button">
                        <span></span>
                        <span></span>
                        <span></span>
                    </button>
                    <!-- end header menu btn -->
                </div>
            </div>
        </div>
    </div>
</header>
<!-- end header -->