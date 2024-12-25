@extends('layouts.app')
<div class="container-fluid py-5 bg-dark text-white">
@section('content')
<!-- Hero Section -->
<section class="text-right container text-white py-5">
    <h1 class="lh-base">Over a decade of experience in <br> providing services</h1>
    <p class="lh-base mt-5" ><img src="{{ asset('images/img.png') }}">  Hi, We at DotSpheres.</p>
    <p class="custom-light-gray lh-base mt-5">
        We love nothing more than helping our clients add a touch of magic to their online presence through <br>our exquisite website designs, stunning graphics, bespoke software development, phone app <br> development services.
    </p>
    <!-- <a href="#contact" class="btn btn-primary lh-sm">Let's Connect</a>
 -->
    <a href="#contact" class="btn btn-primary d-flex align-items-center justify-content-center mt-5" style="width: 175px; height: 65px; border-radius: 0; text-align: center;">
        LET'S CONNECT
    </a>
   
</div>
</div>
</section>

<!-- Services Section -->

<div class="container">
    <section id="services" class="my-5">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-2">
            <p class=" mb-0 custom-light-gray">What we do</p>
            <!-- <a href="#services" class="btn btn-primary">VIEW ALL SERVICES</a> -->
            <a href="#services" class="btn btn-primary d-flex align-items-center justify-content-center" style="width: 175px; height: 65px; border-radius: 0; text-align: center;">
            VIEW ALL SERVICE
    </a>
        </div>

        <h2 class="text-light mb-5">Our range of services provided</h2>

        <!-- Service Cards -->
        <div class="row gy-5 gx-3 mt-2 d-flex justify-content-between align-items-center mb-4">
            <!-- Card 1 -->
            <div class="col-md-3">
                <div class="position-relative card border-light text-light bg-dark h-100 shadow-sm p-4" style="min-height: 300px;">
                    <div class="icon-wrapper-on-border position-absolute" style="width: 50px; height: 50px;">
                        <img src="{{ asset('images/test.png') }}" alt="img-fluid" style="width: 50px; height: 50px;">
                        <i class="bi bi-code-slash text-primary" style="font-size: 1.5rem;"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Web Development</h5>
                        <p class="card-text">We love nothing more than helping our clients add a touch of magic to their online presence through our exquisite designs.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2 -->
            <div class="col-md-3">
                <div class="position-relative card border-light text-light bg-dark h-100 shadow-sm p-4" style="min-height: 300px;">
                    <div class="icon-wrapper-on-border position-absolute" style="width: 50px; height: 50px;">
                        <img src="{{ asset('images/mobiledev.png') }}" alt="img-fluid" style="width: 50px; height: 50px;">
                        <i class="bi bi-phone text-primary" style="font-size: 1.5rem;"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Mobile Development</h5>
                        <p class="card-text">We love nothing more than helping our clients add a touch of magic to their online presence through our exquisite designs.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3 -->
            <div class="col-md-3">
                <div class="position-relative card border-light text-light bg-dark h-100 shadow-sm p-4" style="min-height: 300px;">
                    <div class="icon-wrapper-on-border position-absolute" style="width: 50px; height: 50px;">
                        <img src="{{ asset('images/devop.png') }}" alt="img-fluid" style="width: 50px; height: 50px;">
                        <i class="bi bi-cloud-upload text-primary" style="font-size: 1.5rem;"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">DevOps Development</h5>
                        <p class="card-text">We love nothing more than helping our clients add a touch of magic to their online presence through our exquisite designs.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row gy-5 gx-3 mt-2 d-flex justify-content-between align-items-center mb-4">
             <!-- Card 4 -->
            <div class="col-md-3">
                <div class="position-relative card border-light text-light bg-dark h-100 shadow-sm p-4" style="min-height: 300px;">
                    <div class="icon-wrapper-on-border position-absolute" style="width: 50px; height: 50px;">
                        <img src="{{ asset('images/uiux.png') }}" alt="img-fluid" style="width: 50px; height: 50px;">
                        <i class="bi bi-palette text-primary" style="font-size: 1.5rem;"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">UI/UX Development</h5>
                        <p class="card-text">We love nothing more than helping our clients add a touch of magic to their online presence through our exquisite designs.</p>
                    </div>
                </div>
            </div>
            <!-- Card 5 -->
            <div class="col-md-3">
                <div class="position-relative card border-light text-light bg-dark h-100 shadow-sm p-4" style="min-height: 300px;">
                    <div class="icon-wrapper-on-border position-absolute" style="width: 50px; height: 50px;">
                        <img src="{{ asset('images/salesforce.png') }}" alt="img-fluid" style="width: 50px; height: 50px;">
                        <i class="bi bi-diagram-2 text-primary" style="font-size: 1.5rem;"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Salesforce Consulting</h5>
                        <p class="card-text">We love nothing more than helping our clients add a touch of magic to their online presence through our exquisite designs.</p>
                    </div>
                </div>
            </div>
            <!-- Card 6 -->
            <div class="col-md-3">
                <div class="position-relative card border-light text-light bg-dark h-100 shadow-sm p-4" style="min-height: 300px;">
                    <div class="icon-wrapper-on-border position-absolute" style="width: 50px; height: 50px;">
                        <img src="{{ asset('images/Aidev.png') }}" alt="img-fluid" style="width: 50px; height: 50px;">
                        <i class="bi bi-cpu text-primary" style="font-size: 1.5rem;"></i>
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">AI Development & Integration</h5>
                        <p class="card-text">We love nothing more than helping our clients add a touch of magic to their online presence through our exquisite designs.</p>
                    </div>
                </div>
            </div>
        </div>


    </section>

    <section id="Projects" class="my-5">
        <!-- Header Section -->
        <div class="d-flex justify-content-between align-items-center mb-2">
            <p class=" mb-0 custom-light-gray">We did a really amazing work</p>
            <!-- <a href="#projects" class="btn btn-primary">VIEW ALL PROJECTS</a> -->
            <a href="#projects" class="btn btn-primary d-flex align-items-center justify-content-center" style="width: 175px; height: 65px; border-radius: 0; text-align: center;">
             VIEW ALL PROJECTS
            </a>
        </div>

        <h2 class="text-light mb-5">Our Recent Projects</h2>

        <!-- Projects Cards -->
        <div class="row g-4 gx-4">
        <!-- Card 1 -->
        <div class="col-md-6">
            <img src="{{ asset('images/Bil.png') }}" alt="Project 1" class="img-fluid w-100 h-100">
        </div>
        <!-- Card 2 -->
        <div class="col-md-6">
            <img src="{{ asset('images/IndiFit.png') }}" alt="Project 2" class="img-fluid w-100 h-100">
        </div>
        </div>
    </section>
</div>

<div class="container-fluid">
    <section class="bg-dark text-white text-center py-5 position-relative">
        <!-- Background with darkened image -->
        <div class="position-absolute top-0 start-0 w-100 h-100" 
            style="background: url('{{ asset('images/journey.png') }}') no-repeat center center; background-size: cover; filter: brightness(10%); z-index: 1;">
        </div>

        <!-- Foreground content -->
        <div class="container position-relative py-5" style="z-index: 2;">
            <h2 class="fw-bold">Our Journey Till Now</h2>
            <div class="row mt-5 journey">
                <div class="col-md-2">
                    <h3 class="display-4 fw-bold">5+</h3>
                    <p>Years of Experience</p>
                </div>
                <div class="col-md-1">
                <img src="{{ asset('images/Line.png') }}" alt="Project 1" class="img-fluid">
                </div>
                <div class="col-md-2">
                    <h3 class="display-4 fw-bold">30+</h3>
                    <p>Industry Expert</p>
                </div>
                <div class="col-md-1">
                <img src="{{ asset('images/Line.png') }}" alt="Project 1" class="img-fluid">
                </div>
                <div class="col-md-2">
                    <h3 class="display-4 fw-bold">100+</h3>
                    <p>Completed Projects</p>
                </div>
                <div class="col-md-1">
                <img src="{{ asset('images/Line.png') }}" alt="Project 1" class="img-fluid">
                </div>
                <div class="col-md-2">
                    <h3 class="display-4 fw-bold">9k+</h3>
                    <p>Reviews Overall</p>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5">
                <a href="#contact" class="btn btn-primary d-flex align-items-center justify-content-center" style="width: 175px; height: 65px; border-radius: 0; text-align: center;">
                    LET'S CONNECT
                </a>
            </div>

        </div>
        
    </section>
</div>

<div class="container-fluid py-5 bg-dark text-white">
<div class="container">
    <section id="Projects" class="my-5">
        <div class="d-flex justify-content-between align-items-center mb-2">
            <p class="mb-0 custom-light-gray">How we do it</p>
        </div>
        <h2 class="text-light mb-5">Our way of performing</h2>

        <div class="row gy-0 gx-0 mt-2 d-flex justify-content-between align-items-center mb-4">
            <!-- Card 1 -->
            <div class="col-md-2">
                <div class=" card border-dashed text-light bg-dark h-100 shadow-sm p-4" style="border-style: dashed; border-width: 2px; border-color: #645f5f; width: 232px; height: 237px;">
                <img src="{{ asset('images/analysis.png') }}" alt="img-fluid" style="width: 50px; height: 50px;">
                    <div class="card-body text-left">
                        <h5 class="card-title">Analysis</h5>
                        <p class="card-text">We love nothing more than helping our clients add a touch of magic to their online presence.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            <div class="dashed-line bg-dark" style="border-style: dashed; border-width: 2px; border-color: #645f5f; height: 0; width: 232px; margin: auto;"></div>
        </div>
            <!-- Card 2 -->
            <div class="col-md-2">
                <div class=" card border-dashed text-light bg-dark h-100 shadow-sm p-4" style="border-style: dashed; border-width: 2px; border-color: #645f5f; width: 232px; height: 237px;">
                <img src="{{ asset('images/development.png') }}" alt="img-fluid" style="width: 50px; height: 50px;">
                    <div class="card-body text-left">
                        <h5 class="card-title">Development</h5>
                        <p class="card-text">We love nothing more than helping our clients add a touch of magic to their online presence.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            <div class="dashed-line bg-dark" style="border-style: dashed; border-width: 2px; border-color: #645f5f; height: 0; width: 232px; margin: auto;"></div>
        </div>
        <!-- Card 3 -->
            <div class="col-md-2 ">
                <div class=" card border-dashed text-light bg-dark h-100 shadow-sm p-4 dashed-line bg-light" style="border-style: dashed; border-height: 2px; border-width: 2px; border-color: #645f5f; width: 232px; height: 237px;">
                <img src="{{ asset('images/testing.png') }}" alt="img-fluid" style="width: 50px; height: 50px;">
                    <div class="card-body text-left">
                        <h5 class="card-title">Testing</h5>
                        <p class="card-text">We love nothing more than helping our clients add a touch of magic to their online presence.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-1">
            <div class="dashed-line bg-dark" style="border-style: dashed; border-width: 2px; border-color: #645f5f; height: 0; width: 232px; margin: auto;"></div>
        </div>
            <!-- Card 4 -->
            <div class="col-md-2">
                <div class=" card border-dashed text-light bg-dark h-100 shadow-sm p-4" style="border-style: dashed; border-width: 2px; border-color: #645f5f; width: 232px; height: 237px;">
                <img src="{{ asset('images/deployment.png') }}" alt="img-fluid" style="width: 50px; height: 50px;">
                    <div class="card-body text-left">
                        <h5 class="card-title">Deployment</h5>
                        <p class="card-text">We love nothing more than helping our clients add a touch of magic to their online presence.</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
</div>

<div class="container-fluid">
    <section class="bg-dark text-white text-center-align py-5 position-relative">
        <!-- Background with darkened image -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
            style="background: url('{{ asset('images/experties.png') }}') no-repeat center center; background-size: cover; filter: brightness(30%); z-index: 1;">
        </div>
      <div class="container">
        <!-- Content Overlay -->
        <div class="position-relative" style="z-index: 2;">
            <!-- Section Heading -->
            <p class="mb-0 custom-light-gray mb-3">Our expertise</p>
            <h2 class="text-light mb-5">Technologies</h2>

            <!-- Technology Icons and Labels -->
            <div class="row justify-content-center align-items-center text-center mb-5">
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div>
                        <img src="{{ asset('images/embaded.png') }}" alt="Embedded Development" class="mb-3" style="width: 60px;">
                        <h6>Embedded<br>Development</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div>
                        <img src="{{ asset('images/embaded.png') }}" alt="PHP Development" class="mb-3" style="width: 60px;">
                        <h6>PHP<br>Development</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div>
                        <img src="{{ asset('images/embaded.png') }}" alt="Python Development" class="mb-3" style="width: 60px;">
                        <h6>Python<br>Development</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div>
                        <img src="{{ asset('images/embaded.png') }}" alt="Magento Development" class="mb-3" style="width: 60px;">
                        <h6>Magento<br>Development</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div>
                        <img src="{{ asset('images/embaded.png') }}" alt="React Native Development" class="mb-3" style="width: 60px;">
                        <h6>React Native<br>Development</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div>
                        <img src="{{ asset('images/embaded.png') }}" alt="Virtual Reality" class="mb-3" style="width: 60px;">
                        <h6>Virtual<br>Reality</h6>
                    </div>
                </div>
            </div>

            <!-- CTA Button -->
            <div class="d-flex justify-content-center mt-5">
                <a href="#contact" class="btn btn-primary d-flex align-items-center justify-content-center" style="width: 175px; height: 65px; border-radius: 0; text-align: center;">
                    LET'S CONNECT
                </a>
            </div>
        </div>
       </div>
    </section>
</div>

<div class="container-fluid py-5 bg-dark text-white">
    <div class="container position-relative">
        <!-- Section Heading -->
        <p class="mb-0 custom-light-gray mb-3">Industry Serving</p>

        <div class="position-absolute end-0 top-30 translate-middle-y d-flex align-items-center mt-3 me-3">
            <!-- Left Arrow -->
            <button class="btn  me-2  bg-dark" style="border-radius: 50%; width: 40px; height: 40px; background-image: url('{{ asset('images/lefta.png') }}'); background-size: 50px; background-repeat: no-repeat; background-position: center;">
            </button>

            <!-- Right Arrow -->
            <button class="btn  me-2  bg-dark" style="border-radius: 50%; width: 40px; height: 40px; background-image: url('{{ asset('images/rightarw.png') }}'); background-size: 50px; background-repeat: no-repeat; background-position: center;">
            </button>
        </div>


        <h2 class="text-light mb-5">Expertise in multiple industries</h2>

        <!-- Industry Cards -->
        <div class="row justify-content-center align-items-center text-center mb-5">
            <!-- eCommerce -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="px-3">
                    <img src="{{ asset('images/analysis.png') }}" alt="eCommerce" class="mb-3" style="width: 60px;">
                    <h5>eCommerce</h5>
                    <p>We love nothing more than helping our clients add a touch of magic to their online presence.</p>
                </div>
            </div>

            <!-- FinTech -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="px-3">
                    <img src="{{ asset('images/development.png') }}" alt="FinTech" class="mb-3" style="width: 60px;">
                    <h5>FinTech</h5>
                    <p>We love nothing more than helping our clients add a touch of magic to their online presence.</p>
                </div>
            </div>

            <!-- EdTech -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="px-3">
                    <img src="{{ asset('images/testing.png') }}" alt="EdTech" class="mb-3" style="width: 60px;">
                    <h5>EdTech</h5>
                    <p>We love nothing more than helping our clients add a touch of magic to their online presence.</p>
                </div>
            </div>

            <!-- Logistics -->
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="px-3">
                    <img src="{{ asset('images/deployment.png') }}" alt="Logistics" class="mb-3" style="width: 60px;">
                    <h5>Logistics</h5>
                    <p>We love nothing more than helping our clients add a touch of magic to their online presence.</p>
                </div>
            </div>
        </div>

        <!-- Navigation Arrows -->
        
    </div>
</div>

<div class="container">
    <!-- Contact Sect  ion -->
    <section id="contact" class="container my-5">
        <h2 class="text-center">Connect with Us</h2>
        <form action="{{ route('contact.submit') }}" method="POST" class="row g-3">
            @csrf
            <div class="col-md-6">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="col-12">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="message" name="message" rows="4" required></textarea>
            </div>
            <div class="col-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </section>
</div>
@endsection
