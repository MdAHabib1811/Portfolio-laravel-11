@extends('portfolio.layout.master')

@section('title', 'Welcome')

@section('content')

    <!-- About -->
    @include('portfolio.component.about_part')
    
    <!-- Skills -->
    @include('portfolio.component.skills_part')

    <!-- Service -->
    @include('portfolio.component.service_part')

    <!-- Home Contact -->
    @include('portfolio.component.home_contact')

    <!-- Project -->
    @include('portfolio.component.project_part')

    <!-- Testimonial -->
    @include('portfolio.component.testimonial_part')

    <!-- Blog -->
    @include('portfolio.component.home_blog')
    
@endsection