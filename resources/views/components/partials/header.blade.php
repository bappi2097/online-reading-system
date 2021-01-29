<section id="header_section_wrapper" class="header_section_wrapper">
    <div class="container">
        <div class="header-section">
            <div class="row">
                <div class="col-md-4">
                    <div class="left_section">
                        <span class="date">
                            {{date("l")}} .
                        </span>
                        <!-- Date -->
                        <span class="time">
                            {{date("j F . Y")}}
                        </span>
                        <!-- Time -->
                        <div class="social">
                            @foreach ($socialMedias as $socialMedia)
                            <a href="//{{$socialMedia->link}}" class="icons-sm fb-ic">{!!$socialMedia->icon!!}</a>
                            @endforeach
                        </div>
                        <!-- Top Social Section -->
                    </div>
                    <!-- Left Header Section -->
                </div>
                <div class="col-md-4">
                    <div class="logo">
                        <a href="/"><img class="lozad" src="{{$meta->logo}}" alt="Tech NewsLogo"></a>
                    </div>
                    <!-- Logo Section -->
                </div>
                <div class="col-md-4">
                    <div class="right_section">
                        <ul class="nav navbar-nav">
                            @auth
                            <li><a href="#">{{auth()->user()->first_name . " " . auth()->user()->last_name}}</a></li>
                            <li>
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }} </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </li>
                            @endauth
                            @guest
                            <li><a href="{{route('login')}}">Login</a></li>
                            <li><a href="{{route('register')}}">Register</a></li>
                            @endguest
                            <li class="dropdown lang">
                                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">En <i
                                        class="fa fa-angle-down"></i></button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#">Bn</a></li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Language Section -->

                        <ul class="nav-cta hidden-xs">
                            <li class="dropdown"><a href="#" data-toggle="dropdown" class="dropdown-toggle"><i
                                        class="fa fa-search"></i></a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <div class="head-search">
                                            <form action="{{route('search')}}" method="get">
                                                <!-- Input Group -->
                                                <div class="input-group">
                                                    <input type="text" class="form-control" name="search"
                                                        placeholder="Type Something"> <span class="input-group-btn">
                                                        <button type="submit" class="btn btn-primary">Search
                                                        </button>
                                                    </span></div>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!-- Search Section -->
                    </div>
                    <!-- Right Header Section -->
                </div>
            </div>
        </div>
        <!-- Header Section -->
        <x-partials.navbar></x-partials.navbar>

        <!-- .navigation-section -->
    </div>
    <!-- .container -->
</section>