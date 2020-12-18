<div class="navigation-section">
    <nav class="navbar m-menu navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#navbar-collapse-1"><span class="sr-only">Toggle
                        navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span
                        class="icon-bar"></span>
                </button>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="#navbar-collapse-1">
                <ul class="nav navbar-nav main-nav">
                    <li class="@if(url()->current() == url('/')) active @endif"><a href="/">Home</a></li>
                    @foreach ($menus as $menu)
                    <li class="@if(url()->current() == route('menu', $menu->newsCategory->slug)) active @endif"><a
                            href="{{route('menu', $menu->newsCategory->slug)}}">{{$menu->name}}</a></li>
                    @endforeach
                    {{-- <li class="dropdown m-menu-fw"><a href="#" data-toggle="dropdown" class="dropdown-toggle">More
                            <span><i class="fa fa-angle-down"></i></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <div class="m-menu-content">
                                    <ul class="col-sm-3">
                                        <li class="dropdown-header">Widget Haeder</li>
                                        <li><a href="#">Awesome Features</a></li>
                                        <li><a href="#">Clean Interface</a></li>
                                        <li><a href="#">Available Possibilities</a></li>
                                        <li><a href="#">Responsive Design</a></li>
                                        <li><a href="#">Pixel Perfect Graphics</a></li>
                                    </ul>
                                    <ul class="col-sm-3">
                                        <li class="dropdown-header">Widget Haeder</li>
                                        <li><a href="#">Awesome Features</a></li>
                                        <li><a href="#">Clean Interface</a></li>
                                        <li><a href="#">Available Possibilities</a></li>
                                        <li><a href="#">Responsive Design</a></li>
                                        <li><a href="#">Pixel Perfect Graphics</a></li>
                                    </ul>
                                    <ul class="col-sm-3">
                                        <li class="dropdown-header">Widget Haeder</li>
                                        <li><a href="#">Awesome Features</a></li>
                                        <li><a href="#">Clean Interface</a></li>
                                        <li><a href="#">Available Possibilities</a></li>
                                        <li><a href="#">Responsive Design</a></li>
                                        <li><a href="#">Pixel Perfect Graphics</a></li>
                                    </ul>
                                    <ul class="col-sm-3">
                                        <li class="dropdown-header">Widget Haeder</li>
                                        <li><a href="#">Awesome Features</a></li>
                                        <li><a href="#">Clean Interface</a></li>
                                        <li><a href="#">Available Possibilities</a></li>
                                        <li><a href="#">Responsive Design</a></li>
                                        <li><a href="#">Pixel Perfect Graphics</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul> --}}
            </div>
            <!-- .navbar-collapse -->
        </div>
        <!-- .container -->
    </nav>
    <!-- .nav -->
</div>