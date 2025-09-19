@extends('layouts.portfolio')

@section('title', $portfolio['name'] . ' - Portfolio')

@section('content')

<section id="hero" class="hero-section">
    <div class="container hero-container">
        <div class="hero-text">
            <h1>Hi, I'm {{ $portfolio['name'] }}</h1>
            <h3>{{ $portfolio['title'] }}</h3>
            <p>{{ $portfolio['bio'] }}</p>
                @foreach ($portfolio['social_links'] as $platform => $link)
            @if ($platform === 'LinkedIn')
                <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin-in"></i></a>

            @elseif ($platform === 'GitHub')
                <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
            @elseif ($platform === 'Email')
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
            @elseif ($platform === 'Facebook')
                <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
            @elseif ($platform === 'Instagram')
                <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            @endif
        @endforeach

        </div>
        <div class="hero-image">
            <img src="{{ $portfolio['profile_image'] }}" alt="{{ $portfolio['name'] }}" class="profile-img">
        </div>
    </div>
</section>



<!-- ABOUT SECTION -->
<section id="about" class="section">
    <div class="container">
        <h2 class="section-title">About Me</h2>
        <p class="justified">{{ $portfolio['about'][0] }}</p>

        <h3>Education</h3>
        @foreach ($portfolio['education'] as $title => $description)
            <p class="justified"><strong>{{ $title }}</strong> — {{ $description }}</p>
        @endforeach

        <h3>Experience</h3>
        @foreach ($portfolio['experience'] as $title => $description)
            <p class="justified"><strong>{{ $title }}</strong> — {{ $description }}</p>
        @endforeach

        <h3>Skills</h3>
        <p class="justified">
            @foreach ($portfolio['skills'] as $skill)
                {{ $skill }}@if (!$loop->last), @endif
            @endforeach
        </p>
    </div>
</section>

<!-- PROJECTS SECTION -->
<section id="projects" class="section">
    <div class="container">
        <h2 class="section-title">Projects</h2>
        @foreach ($portfolio['projects'] as $title => $project)
            <p class="justified">
                <strong>
                    <a href="{{ $project['link'] }}" target="_blank" rel="noopener noreferrer">{{ $title }}</a>
                </strong><br>
                {{ $project['details'] }}
            </p>
        @endforeach
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="section">
    <div class="container">
        <h2 class="section-title">Get In Touch</h2>
        <p class="justified"><strong>Phone:</strong> {{ $portfolio['phone'] }}</p>
        <p class="justified"><strong>Location:</strong> {{ $portfolio['location'] }}</p>

        <div class="social-links">
                    @foreach ($portfolio['social_links'] as $platform => $link)
            @if ($platform === 'LinkedIn')
                <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-linkedin"></i></a>
            @elseif ($platform === 'GitHub')
                <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-github"></i></a>
            @elseif ($platform === 'Email')
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to={{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fas fa-envelope"></i></a>
            @elseif ($platform === 'Facebook')
                <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-facebook"></i></a>
            @elseif ($platform === 'Instagram')
                <a href="{{ $link }}" target="_blank" rel="noopener noreferrer"><i class="fab fa-instagram"></i></a>
            @endif
        @endforeach

        </div>
    </div>
</section>

@endsection
