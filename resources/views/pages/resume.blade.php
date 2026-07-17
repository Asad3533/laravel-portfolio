@extends('layouts.app')

@section('title', 'Resume')

@section('content')

<div class="container py-5">

    <div class="text-center mb-5">

        <h1 class="fw-bold">Resume</h1>

        <p class="lead">
            Download my latest resume or view a summary below.
        </p>

        <a href="{{ asset('files/Asad_Rafeeq_Resume.pdf') }}"
           class="btn btn-primary btn-lg"
           download>

            📄 Download Resume

        </a>

    </div>

    <hr>

    <h2>Education</h2>

    <div class="mb-4">

        <h4>Capital University of Science and Technology (CUST)</h4>

        <p>
            BS Software Engineering (2022 – 2026)
        </p>

    </div>

    <hr>

    <h2>Experience</h2>

    <div class="mb-4">

        <h4>Laravel Developer Intern</h4>

        <h6>Goftech Technologies</h6>

        <ul>

            <li>Developed Laravel applications.</li>

            <li>Worked with REST APIs.</li>

            <li>Managed MySQL databases.</li>

        </ul>

    </div>

    <hr>

    <h2>Skills</h2>

    <div class="row">

        <div class="col-md-3 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    Laravel
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    PHP
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    Power BI
                </div>
            </div>
        </div>

        <div class="col-md-3 mb-3">
            <div class="card text-center">
                <div class="card-body">
                    React
                </div>
            </div>
        </div>

    </div>

    <hr>

    <h2>Certifications</h2>

    <ul>

        <li>Generative AI Application Developer – PAK Angels</li>

        <li>Python for Beginners – Great Learning</li>

        <li>Excel for Beginners – Great Learning</li>

        <li>Basics of SQL – UniAthena</li>

    </ul>

</div>

@endsection