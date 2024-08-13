
@if(request()->is('/'))
<section id="home-section" class="hero">
    <div class="home-slider owl-carousel">
        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container-fluid px-md-0">
                <div class="row d-md-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img" style="background-image:url({{asset('portfolio_asset/images/bg_1.jpg')}});">
                        <div class="overlay"></div>
                        <div class="overlay-1"></div>
                    </div>
                    <div class="one-forth d-flex  align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">Hello! This is Habib</span>
                            <h1 class="mb-4 mt-3">Creative <span>UI/UX</span> Designer &amp; Developer</h1>
                            <p><a href="{{url('contact')}}" class="btn btn-primary">Hire me</a> <a href="#" class="btn btn-primary btn-outline-primary">Download CV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item">
            <div class="overlay"></div>
            <div class="container-fluid px-md-0">
                <div class="row d-flex no-gutters slider-text align-items-end justify-content-end" data-scrollax-parent="true">
                    <div class="one-third order-md-last img" style="background-image:url({{asset('portfolio_asset/images/bg_2.jpg')}});">
                        <div class="overlay"></div>
                        <div class="overlay-1"></div>
                    </div>
                    <div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
                        <div class="text">
                            <span class="subheading">We Design &amp; Build Brands</span>
                            <h1 class="mb-4 mt-3">Hi, I am <span>Habib.</span> This is my favorite work.</h1>
                            <p><a href="#" class="btn btn-primary">Hire me</a> <a href="#" class="btn btn-primary btn-outline-primary">Download CV</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@else
<section class="hero-wrap hero-wrap-2" style="background-image: url('{{asset('portfolio_asset/images/bg_4.jpg')}}');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            @if(request()->is('about'))
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{url('about')}}">About <i class="fa fa-chevron-right"></i></a></span></p>
            <h1 class="mb-0 bread">About Me</h1>
            @elseif (request()->is('blog'))
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{url('blog')}}">Blog <i class="fa fa-chevron-right"></i></a></span></p>
            <h1 class="mb-0 bread">All Blog</h1>
            @elseif (request()->is('blog_detail'))
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{url('blog')}}">Blog <i class="fa fa-chevron-right"></i></a></span><span class="mr-2"><a href="{{url('blog_detail')}}">Blog Detail <i class="fa fa-chevron-right"></i></a></span></p>
            <h1 class="mb-0 bread">Blog Detail</h1>
            @elseif (request()->is('contact'))
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{url('contact')}}">Contact <i class="fa fa-chevron-right"></i></a></span></p>
            <h1 class="mb-0 bread">Contact details</h1>
            @elseif (request()->is('skill'))
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{url('skill')}}">Skill <i class="fa fa-chevron-right"></i></a></span></p>
            <h1 class="mb-0 bread">My Skills</h1>
            @elseif (request()->is('service'))
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{url('service')}}">Service <i class="fa fa-chevron-right"></i></a></span></p>
            <h1 class="mb-0 bread">My Services</h1>
            @else
            <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="fa fa-chevron-right"></i></a></span> <span class="mr-2"><a href="{{url('project')}}">Project <i class="fa fa-chevron-right"></i></a></span></p>
            <h1 class="mb-0 bread">My Projects</h1>
            @endif
        </div>
      </div>
    </div>
</section>
@endif
