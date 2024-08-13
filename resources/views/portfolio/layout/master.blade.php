<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'My Portfolio')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- CSS -->
    @include('portfolio.component.css')
</head>
<body>
    {{-- data-spy="scroll" data-target=".site-navbar-target" data-offset="300" --}}
	
    <!-- Navbar -->
	@include('portfolio.component.navbar')

    <!-- Hero -->
    @include('portfolio.component.hero_part')
	

    @yield('content')
    
	
    <!-- Footer -->
    @include('portfolio.component.footer')
		
	<!-- loader -->
	@include('portfolio.component.loader')

    <!-- Javascript -->
    @include('portfolio.component.js')
		
</body>
</html>