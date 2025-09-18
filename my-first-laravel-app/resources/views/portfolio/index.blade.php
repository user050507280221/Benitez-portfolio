@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<!-- HERO SECTION -->
<section id="hero" class="hero-section">
    <div class="container text-center">
        <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">
        <h1>{{ $portfolio['name'] }}</h1>
        <h3>{{ $portfolio['title'] }}</h3>
        <p>{{ $portfolio['bio'] }}</p>
    </div>
</section>

<!-- ABOUT SECTION -->
<section id="about" class="section">
    <div class="container">
        <h2 class="section-title">About Me</h2>
        <p>{{ $portfolio['about'][0] }}</p>

        <h3>Education</h3>
        @foreach ($portfolio['education'] as $title => $description)
            <p><strong>{{ $title }}</strong> — {{ $description }}</p>
        @endforeach

        <h3>Experience</h3>
        @foreach ($portfolio['experience'] as $title => $description)
            <p><strong>{{ $title }}</strong> — {{ $description }}</p>
        @endforeach
    </div>
</section>

<!-- PROJECTS SECTION -->
<section id="projects" class="section">
    <div class="container">
        <h2 class="section-title">Projects</h2>
        @foreach ($portfolio['projects'] as $title => $project)
            <strong>
                <a href="{{ $project['link'] }}" target="_blank">{{ $title }}</a>
            </strong>
            <p>{{ $project['details'] }}</p>
        @endforeach
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="section">
    <div class="container">
        <h2 class="section-title">Get In Touch</h2>
        <p><strong>Phone:</strong> {{ $portfolio['phone'] }}</p>
        <p><strong>Location:</strong> {{ $portfolio['location'] }}</p>

        <div class="social-links">
            @foreach ($portfolio['social_links'] as $platform => $link)
                @if ($platform === 'Email')
                    <a href="mailto:{{ $link }}"><i class="fas fa-envelope"></i></a>
                @elseif ($platform === 'GitHub')
                    <a href="{{ $link }}"><i class="fab fa-github"></i></a>
                @elseif ($platform === 'Instagram')
                    <a href="{{ $link }}"><i class="fab fa-instagram"></i></a>
                @elseif ($platform === 'Facebook')
                    <a href="{{ $link }}"><i class="fab fa-facebook"></i></a>
                @endif
            @endforeach
        </div>
    </div>
</section>

@endsection
