@extends('layouts.app')

@section('title', 'Projects')

@section('content')

<!-- Hero Section -->
<section class="bg-dark text-white py-5 rounded-4 shadow mb-5">

    <div class="container text-center">

        <h1 class="display-4 fw-bold">
            My Projects
        </h1>

        <p class="lead mt-3 mx-auto" style="max-width:700px;">
            A collection of web development, data analytics, business intelligence,
            and software engineering projects showcasing my technical skills and
            problem-solving abilities.
        </p>

    </div>

</section>

<!-- Projects -->

<section class="py-2">

<div class="container">

<div class="row">

@foreach($projects as $project)

<div class="col-lg-4 col-md-6 mb-4">

<div class="card border-0 shadow h-100">

<div class="card-body d-flex flex-column">

<h4 class="fw-bold mb-3">

{{ $project->title }}

</h4>

<p class="text-muted flex-grow-1">

{{ $project->description }}

</p>

<div class="mb-3">

<span class="badge bg-primary p-2">

{{ $project->technologies }}

</span>

</div>

@if($project->github_url)

<a href="{{ $project->github_url }}"
   target="_blank"
   class="btn btn-dark mt-auto">

    <i class="bi bi-github"></i>
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

@endsection