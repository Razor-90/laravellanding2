<!-- Header Section Start -->
<header id="home" class="hero-area">
    <div class="overlay">
        <span></span>
        <span></span>
    </div>
    <nav class="navbar navbar-expand-md bg-inverse fixed-top scrolling-navbar">
        <div class="container">
            <a href="index.html" class="navbar-brand"><img src="img/logo.png" alt=""></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="lni-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto w-100 justify-content-end">
                    @foreach($menus as $menu)
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{$menu->alias}}">{{$menu->title}}</a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </nav>
    <div class="container">

        <div class="row space-100">
            @foreach($pages as $page)
            <div class="col-lg-6 col-md-12 col-xs-12">

                <div class="contents">

                    <h2 class="head-title">{{$page->title}}</h2>
                    <p>{{$page->description}}</p>
                    <div class="header-button">
                        <a href="{{$page->alias}}" class="btn btn-border-filled">Get Started</a>
                    </div>
                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-xs-12 p-0">
                <div class="intro-img">
                    <img src="{{$page->images}}" alt="">
                </div>
            </div>
            @endforeach
        </div>

    </div>
</header>
<!-- Header Section End -->
