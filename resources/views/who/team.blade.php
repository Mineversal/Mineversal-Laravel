@extends('layouts.app')

@section('content')
    <!-- Team Content -->
    <section class="section-pad contact">
        <div class="container">
            <!-- Heading -->
            <div class="row mb-4">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center text-white">
                    <h1 data-aos-delay="400" data-aos-duration="800" data-aos="fade-down">Our Team</h1>
                </div>
                <div class="col-md-4"> </div>
            </div>
            <!-- Content -->
            <div class="row text-white text-center team">
                <div class="col-md-3">
                    <div class="card bg-dark p-4">
                        <img src="{{ asset('assets/img/Azhar.jpg') }}" class="card-img-top" alt="Joe">
                        <div class="card-body">
                            <h5 class="card-title">Azhar Rizki Zulma</h5>
                            <p class="card-text">Founder of Mineversal</p>
                        </div>
                        <div class="row">
                            <a href="mailto:%3CJoe%3Ejoe@mineversal.com?%20subject=Hello%20Joe"><p>joe@mineversal.com</p></a>
                        </div>
                        <div class="row" id="contact">
                            <div class="text-center">
                                <a href="https://facebook.com/azharrizkyz" class="fa fa-facebook"></a>
                                <a href="https://twitter.com/azharrizkyz" class="fa fa-twitter"></a>
                                <a href="https://instagram.com/azharrizkyz" class="fa fa-instagram"></a>
                                <a href="https://wa.me/+6281317441991" class="fa fa-whatsapp"></a>
                            </div>
                            <div class="text-center mt-2">
                                <a href="https://github.com/AzharRizky" class="fa fa-github"></a>
                                <a href="https://www.linkedin.com/in/azharrizki" class="fa fa-linkedin"></a>
                                <a href="https://open.spotify.com/artist/7mG43AWgnlQIYNbQXsBFfy?si=D4tcTrCrSPSrhljhtCn1_Q" class="fa fa-spotify"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-dark p-4">
                        <img src="{{ asset('assets/img/Nay.jpg') }}" class="card-img-top" alt="Nay">
                        <div class="card-body">
                            <h5 class="card-title">Nadiya Amanda Rizkania</h5>
                            <p class="card-text">Co-Founder of Mineversal</p>
                        </div>
                        <div class="row">
                            <a href="mailto:%3CNadiya%20Amanda%3Ebeauty@mineversal.com?%20subject=Hello%20Nadya"><p>beauty@mineversal.com</p></a>
                        </div>
                        <div class="row text-center" id="contact">
                            <div class="text-center">
                                <a href="https://instagram.com/amnndya" class="fa fa-instagram"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-dark p-4">
                        <img src="{{ asset('assets/img/Zidan.jpeg') }}" class="card-img-top" alt="Nay">
                        <div class="card-body">
                            <h5 class="card-title">Muhamad Zidan</h5>
                            <p class="card-text">Head of Developer Team</p>
                        </div>
                        <div class="row">
                            <a href="mailto:%3CJoe%3Ezidan@mineversal.com?%20subject=Hello%20Zidan"><p>zidan@mineversal.com</p></a>
                        </div>
                        <div class="row" id="contact">
                            <div class="text-center">
                                <a href="https://facebook.com/LordBejad68tambah1" class="fa fa-facebook"></a>
                                <a href="https://instagram.com/zida_n02" class="fa fa-instagram"></a>
                                <a href="https://wa.me/+6281906852062" class="fa fa-whatsapp"></a>
                                <a href="https://github.com/thellost" class="fa fa-github"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card bg-dark p-4">
                        <img src="{{ asset('assets/img/Naz.jpg') }}" class="card-img-top" alt="Sin">
                        <div class="card-body">
                            <h5 class="card-title">Muhammad Nazmudin</h5>
                            <p class="card-text">Head of Design Division</p>
                        </div>
                        <div class="row">
                            <a href="mailto:%3CSinyoa%3Esin@mineversal.com?%20subject=Hello%20Sinyoa"><p>sin@mineversal.com</p></a>
                        </div>
                        <div class="row text-center" id="contact">
                            <div class="text-center">
                                <a href="https://facebook.com/muhammadnazmudin.almaruf" class="fa fa-facebook"></a>
                                <a href="https://instagram.com/sinyoa_" class="fa fa-instagram"></a>
                                <a href="https://wa.me/+6288213884397" class="fa fa-whatsapp"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
