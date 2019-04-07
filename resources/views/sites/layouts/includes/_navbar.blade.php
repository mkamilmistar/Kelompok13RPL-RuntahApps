<div class="clever-main-menu">
    <div class="classy-nav-container breakpoint-off">
        <!-- Menu -->
        <nav class="classy-navbar justify-content-between" id="cleverNav">

            <!-- Logo -->
            <a class="nav-brand" href="/"><img src="{{asset('/sites')}}/img/logo.png" alt=""></a>

            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
                <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>

            <!-- Menu -->
            <div class="classy-menu">

                <!-- Close Button -->
                <div class="classycloseIcon">
                    <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                </div>

                <!-- Nav Start -->
                <div class="classynav">
                    <ul>
                        @if(Auth::guest())
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Do It Yourself!</a></li>
                        <li><a href="#">Information</a></li>
                        <li><a href="#">Volunteer</a>
                            <ul class="dropdown">
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Courses</a></li>
                            </ul>
                        </li>
                        <li><a href="/about">About</a></li>

                        @elseif(auth()->user()->role=='admin')
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Do It Yourself!</a></li>
                        <li><a href="#">Information</a></li>
                        <li><a href="#">Volunteer</a>
                            <ul class="dropdown">
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Courses</a></li>
                            </ul>
                        </li>
                        <li><a href="/about">About</a></li>
                        <li><a href="/volunteer">Admin</a></li>

                        @elseif(auth()->user()->role=='volunteer')
                        <li><a href="/">Home</a></li>
                        <li><a href="#">Do It Yourself!</a></li>
                        <li><a href="#">Information</a></li>
                        <li><a href="#">Volunteer</a>
                            <ul class="dropdown">
                                <li><a href="/">Home</a></li>
                                <li><a href="#">Courses</a></li>
                            </ul>
                        </li>
                        <li><a href="/about">About</a></li>
                        @endif
                    </ul>


                    <!-- Search Button -->
                    <div class="search-area">
                        <form action="#" method="get">
                            <input type="search" name="search" id="search" placeholder="Search">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div>

                    @if(Auth::guest())
                    <!-- Register / Login -->
                    <div class="register-login-area">
                        <a href="#" class="btn">Register</a>
                        <a href="/login" class="btn active">Login</a>
                    </div>
                    @else
                    <div class="login-state d-flex align-items-center">
                        <div class="user-name mr-30">
                            <div class="dropdown">
                                <a class="dropdown-toggle" href="#" role="button" id="userName" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{auth()->user()->name}}</a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userName">
                                    <a class="dropdown-item" href="#">Profile</a>
                                    <a class="dropdown-item" href="#">Account Info</a>
                                    <a class="dropdown-item" href="/logout">Logout</a>
                                </div>
                            </div>
                        </div>
                        <div class="userthumb">
                            <img src="{{asset('/sites')}}/img/bg-img/t1.png" alt="">
                        </div>
                    </div>
                    @endif

                </div>
                <!-- Nav End -->
            </div>
        </nav>
    </div>
</div>