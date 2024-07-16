@extends("web.frontend.layouts.app")

@section('content')
<div class="container mt-5">
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('frontend/images/image-1.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First Slide Label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/images/image-2.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second Slide Label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{ asset('frontend/images/image-3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third Slide Label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

{{-- Features start --}}
<div class="container px-4 py-5" id="featured-3">
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
        <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient">
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#collection" /></svg>
            </div>
            <h2>Featured title</h2>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
                Call to action
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#chevron-right" /></svg>
            </a>
        </div>
        <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient">
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#people-circle" /></svg>
            </div>
            <h2>Featured title</h2>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
                Call to action
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#chevron-right" /></svg>
            </a>
        </div>
        <div class="feature col">
            <div class="feature-icon bg-primary bg-gradient">
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#toggles2" /></svg>
            </div>
            <h2>Featured title</h2>
            <p>Paragraph of text beneath the heading to explain the heading. We'll add onto it with another sentence
                and probably just keep going until we run out of words.</p>
            <a href="#" class="icon-link">
                Call to action
                <svg class="bi" width="1em" height="1em">
                    <use xlink:href="#chevron-right" /></svg>
            </a>
        </div>
    </div>
</div>
{{-- Features end --}}
@endsection