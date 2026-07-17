@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="hero-section py-5">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-7">

                <h1 class="display-3 fw-bold text-dark">
                    {{ $profile['name'] }}
                </h1>

                <h3 class="text-primary mb-3">
                    {{ $profile['profession'] }}
                </h3>

                <p class="lead text-muted">
                    {{ $profile['tagline'] }}
                </p>

                <div class="mt-4">

                    <a href="{{ route('resume') }}" class="btn btn-primary btn-lg me-2">
                        <i class="bi bi-download"></i>
                        Resume
                    </a>

                    <a href="{{ route('projects') }}" class="btn btn-outline-dark btn-lg">
                        <i class="bi bi-folder2-open"></i>
                        Projects
                    </a>

                </div>

            </div>

            <div class="col-lg-5 text-center">

                <img src="{{ asset('images/asad.jpg') }}"
                     class="img-fluid rounded-circle shadow-lg profile-img"
                     alt="Asad Rafeeq">

            </div>

        </div>

    </div>
</section>
<!-- About -->
<section class="py-5">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-7">

<h2 class="fw-bold mb-4">
About Me
</h2>

<p class="text-muted fs-5">

I am a Software Engineering graduate passionate about building modern web
applications and transforming raw data into actionable business insights.

My expertise includes Laravel, PHP, SQL, Power BI, React, Python and
data visualization.

</p>

</div>

<div class="col-lg-5">

<div class="card shadow border-0">

<div class="card-body p-4">

<h4 class="fw-bold mb-3">
Quick Info
</h4>

<p><strong>Email:</strong> {{ $profile['email'] }}</p>

<p><strong>Phone:</strong> {{ $profile['phone'] }}</p>

<p><strong>Location:</strong> {{ $profile['location'] }}</p>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- Stats -->

<section class="stats-section py-4">

<div class="container">

<div class="row text-center">

<div class="col-md-4">

<h2 class="fw-bold text-primary">
10+
</h2>

<p>Projects Completed</p>

</div>

<div class="col-md-4">

<h2 class="fw-bold text-primary">
8+
</h2>

<p>Technologies</p>

</div>

<div class="col-md-4">

<h2 class="fw-bold text-primary">
6+
</h2>

<p>Certificates</p>

</div>

</div>

</div>

</section>

<!-- Skills -->

<section class="py-5">

<div class="container">

<h2 class="fw-bold text-center mb-5">

Technical Skills

</h2>

<div class="text-center">

<span class="badge bg-primary fs-6 p-3 m-2">Laravel</span>

<span class="badge bg-dark fs-6 p-3 m-2">PHP</span>

<span class="badge bg-success fs-6 p-3 m-2">MySQL</span>

<span class="badge bg-danger fs-6 p-3 m-2">SQL</span>

<span class="badge bg-warning text-dark fs-6 p-3 m-2">Power BI</span>

<span class="badge bg-info text-dark fs-6 p-3 m-2">React</span>

<span class="badge bg-secondary fs-6 p-3 m-2">Python</span>

<span class="badge bg-primary fs-6 p-3 m-2">Git & GitHub</span>

</div>

</div>

</section>

<!-- Featured Projects -->

<section class="projects-section py-5">

<div class="container">

<h2 class="fw-bold text-center mb-5">

Featured Projects

</h2>

<div class="row">

@foreach($projects as $project)

<div class="col-lg-4 mb-4">

<div class="card border-0 shadow h-100">

<div class="card-body d-flex flex-column">

<h4 class="fw-bold">

{{ $project->title }}

</h4>

<p class="text-muted flex-grow-1">

{{ $project->description }}

</p>

<span class="badge bg-primary mb-3">

{{ $project->technologies }}

</span>

@if($project->github_url)

<a href="{{ $project->github_url }}"
target="_blank"
class="btn btn-dark mt-auto">

View on GitHub

</a>

@endif

</div>

</div>

</div>

@endforeach

</div>

</div>

</section>

<!-- CTA -->

<section class="text-center py-5">

<h2 class="fw-bold">

Let's Work Together

</h2>

<p class="lead text-muted">

Interested in collaborating or hiring me?

</p>

<a href="{{ route('contact') }}" class="btn btn-primary btn-lg">

Contact Me

</a>

</section>

@endsection