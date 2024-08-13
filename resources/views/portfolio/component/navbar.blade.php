<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light site-navbar-target" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{url('/')}}">HABIB<span>.</span></a>
        <button class="navbar-toggler js-fh5co-nav-toggle fh5co-nav-toggle" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav nav ml-auto">
                <li class="nav-item"><a href="{{url('/')}}" class="{{request()->is('/') ? 'nav-link active' : 'nav-link'}}"><span>Home</span></a></li>
                <li class="nav-item"><a href="{{url('about')}}" class="{{request()->is('about') ? 'nav-link active' : 'nav-link'}}"><span>About</span></a></li>
                <li class="nav-item"><a href="{{url('skill')}}" class="{{request()->is('skill') ? 'nav-link active' : 'nav-link'}}"><span>Skills</span></a></li>
                <li class="nav-item"><a href="{{url('service')}}" class="{{request()->is('service') ? 'nav-link active' : 'nav-link'}}"><span>Services</span></a></li>
                <li class="nav-item"><a href="{{url('project')}}" class="{{request()->is('project') ? 'nav-link active' : 'nav-link'}}"><span>Projects</span></a></li>
                <li class="nav-item"><a href="{{url('blog')}}" class="{{request()->is('blog') || request()->is('blog_detail') ? 'nav-link active' : 'nav-link'}}"><span>Blog</span></a></li>
                <li class="nav-item"><a href="{{url('contact')}}" class="{{request()->is('contact') ? 'nav-link active' : 'nav-link'}}"><span>Contact</span></a></li>
                @if (Route::has('login'))
                    @auth
                    <li class="nav-item"><a href="{{ url('dashboard') }}" class="{{request()->is('dashboard') ? 'nav-link active' : 'nav-link'}}"><span>Dashboard</span></a></li>
                @else
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link"><span>Log in</span></a></li>
                        {{-- @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">Register</a>
                        @endif --}}
                    @endauth
                @endif
            </ul>
        </div>
    </div>
</nav>