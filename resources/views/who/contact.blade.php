@extends('layouts.app')

@section('content')
    <!-- Contact Content -->
    <section class="section-pad contact">
        <div class="container">
            <!-- Heading -->
            <div class="row mb-4">
                <div class="col-md-4"></div>
                <div class="col-md-4 text-center text-white">
                    <h1 data-aos-delay="400" data-aos-duration="800" data-aos="fade-down">Contact Us</h1>
                </div>
                <div class="col-md-4"> </div>
            </div>
            <!-- Content -->
            <div class="row">
                <div class="col-md-1"></div>
                <div class="col-md-10">
                    <div data-aos-delay="400" data-aos-duration="800" data-aos="fade-up" class="card bg-dark p-4">
                        <div class="row text-white">
                            <div class="col-md-6 p-3 text-center">
                                <i class="fa fa-envelope mb-3"></i>
                                <h3>For Business Inquiry:</h3>
                                <a href="mailto:%3CAdmin%3Eadmin@mineversal.com?%20subject=Hello%20Admin%20Mineversal">
                                    <p>admin@mineversal.com</p>
                                </a>
                            </div>
                            <div class="col-md-6 p-3 text-center">
                                <i class="fa fa-comment mb-3"></i>
                                <h3>Feedback and Help Center:</h3>
                                <a href="mailto:%3CJoe%3Ejoe@mineversal.com?%20subject=Hello%20Joe">
                                    <p>joe@mineversal.com</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            </div>
        </div>
    </section>
@endsection
