@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- Hero Section -->

<section class="hero-section">

    <div class="container">

        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">

        <h1 class="display-4 mb-3">{{ $portfolio['name'] }}</h1>

        <h3 class="mb-4">{{ $portfolio['title'] }}</h3>

        <p class="lead mb-4">{{ $portfolio['bio'] }}</p>

    </div>

</section>

<!-- About Section -->

<section id="about" class="section">

    <div class="container">

        <h2 class="section-title">About Me</h2>

      <p>
    Hi! I’m {{ $portfolio['name'] }}, an IT student who loves exploring web development and programming. 
    I enjoy learning new things, being creative, and taking on challenges that help me grow. 
    Beyond coding, I love exploring new ideas, journaling, and finding creative ways to learn. 
    I also enjoy reading, watching, and stepping out of my comfort zone to face new challenges. 
    I am also a student assistant in the IT department, and by God’s grace, I have gained some technical knowledge along the way.
</p>
<div class="about-details">
            <!-- Education -->
            <h3>Education</h3>
            @foreach ($portfolio['education'] as $title => $description)
                <p><strong>{{ $title }}</strong> — {{ $description }}</p>
            @endforeach

            <!-- Experience -->
            <h3>Experience</h3>
            @foreach ($portfolio['experience'] as $title => $description)
                <p><strong>{{ $title }}</strong> — {{ $description }}</p>
            @endforeach
        </div>
    </div>

</section>

<!-- Projects Section -->

<section id="projects" class="section bg-light">

    <div class="container">

        <h2 class="section-title">My Projects</h2>

    <h3 class="mt-5">Projects</h3>
        @foreach ($portfolio['projects'] as $title => $description)
            <li><strong>{{ $title }}</strong>: {{ $description }}</li>
        @endforeach

    </div>

</section>

<!-- Contact Section -->

<section id="contact" class="section">
    <div class="container">
        <h2 class="section-title">Get In Touch</h2>
            <p><strong>Phone:</strong> {{ $portfolio['phone'] }}</p>
            <p><strong>Location:</strong> {{ $portfolio['location'] }}</p>
        
        @foreach ($portfolio['social_links'] as $platform => $link)
            @if ($platform === 'Email')
                <a href="mailto:{{ $link }}" target="_blank">{{ $platform }}</a>
            @else
                <a href="{{ $link }}" target="_blank">{{ $platform }}</a>
            @endif
        @endforeach

    </div>
</section>


@endsection