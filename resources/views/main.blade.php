@extends('layouts.app')

@section('content')
    <!-- Carousel -->
    <section>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <ol class="carousel-indicators">
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"></li>
                <li data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ asset('assets/img/Milky-Way.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Milky Way</h5>
                        <p>Our Home</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/Neowise.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Neowise</h5>
                        <p>Light of Hope</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ asset('assets/img/Moon-And-Andromeda.jpg') }}" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Moon and Andromeda</h5>
                        <p>Our Light in The Darkness of the Night and Our Neighborhood</p>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </section>

    <!-- Content -->
    <section class="container-fluid mt-0 text-center section-welcome bg-dark">
        <div class="py-4 text-white">
            <h1>Our Business</h1>
        </div>
    </section>

    <section class="container-fluid mt-0 text-center section-about">
        <div class="py-4 text-white">
            <div class="row mx-4">
                <div class ="col-md-4">
                    <div class="lesson-wrap mx-auto">
                        <a class="text-center" href="" id="lesson-btn">
                            <div class="lesson-wrap-1 my-3">
                                <img src="{{ asset('assets/img/logo2.png') }}" alt="" srcset="" width="100">
                                <h1>News And Blog</h1>
                                <p>Keep and stay update with us</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class ="col-md-4">
                    <div class="lesson-wrap">
                        <a class="text-center" href="" id="lesson-btn">
                            <div class="lesson-wrap-1 my-3">
                                <img src="{{ asset('assets/img/logo2.png') }}" alt="" srcset="" width="100">
                                <h1>Beauty</h1>
                                <p>Keep and stay beautiful with us</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class ="col-md-4">
                    <div class="lesson-wrap">
                        <a class="text-center" href="" id="lesson-btn">
                            <div class="lesson-wrap-1 my-3">
                                <img src="{{ asset('assets/img/logo2.png') }}" alt="" srcset="" width="100">
                                <h1>Music</h1>
                                <p>Listen our new music</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid section-welcome">
        <div class="row">
            <div class="col-md-3 d-sm-none d-md-block col-logo py-5 px-5 text-center">
                <img src="{{ asset('assets/img/logo2.png') }}" alt="" srcset="" width="250">
            </div>
            <div class="col-md-9 col-sm-12 col-text text-white py-5 px-5">
                <h3>Mineversal supports nature preservation</h3>
                <p>We come from nature, our lives depend on nature, and we will return to nature</p>
                <p>Save nature, save life, save the future</p>
            </div>
        </div>
    </section>

    <section class="section-about">
        <div class="container-fluid py-3">
            <div class="row my-2">
                <!-- ASK TITLE -->
                <div class="col-md-5 col-sm-12 col-ask-title py-3 px-5 text-white">
                    <h2 class="ask-title">Ask Us Anything.</h2>
                    <h2 class="ask-title">Anytime.</h2>
                    <p class="ask-title">For cooperation or collaboration, please contact us via email at admin@mineversal.com or fill in the form below.</p>
                </div>
                <!-- ASK FORM -->
                <div class="col-md-7 col-sm-12 col-ask-form py-3 px-5 mb-2">
                    <form action="" method="post">
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Name" name="name" required>
                            </div>
                            <div class="col">
                                <input type="email" class="form-control" placeholder="Email" name="email" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <input type="tel" class="form-control" placeholder="Phone Number" name="telp" required>
                            </div>
                            <div class="col">
                                <input type="text" class="form-control" placeholder="Subject" name="subject" required>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col">
                                <input type="text" class="form-control tell-us-form" placeholder="Tell us more" name="msg" required>
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" style="width: 10rem;" class="btn btn-dark" name="btn-send">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
