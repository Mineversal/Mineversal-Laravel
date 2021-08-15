@extends('layouts.app')

@section('content')
    <!-- About Content -->
    <section id="aboutp" class="section-pad">
        <div class="container">
            <div class="row text-white">
                <div class="col-md-6 col-sm-12 text-center align-self-center">
                    <img id="asset-1-about" data-aos="fade-right"  data-aos-delay="200" data-aos-duration="800" src="{{ asset('assets/img/logo2.png') }}" alt="logo Mineversal">
                </div>
                <div class="col-md-6 col-sm-12 align-self-center p-4" data-aos="fade-left"  data-aos-delay="200" >
                    <h3>About Mineversal</h3>
                    <p><b>Mineversal</b>, which can be interpreted as "common property", is a new technology company founded by Joe Hawk. <b>Mineversal</b> has a mission that is to advance technological developments and create new innovations in the world of technology to support the rapidly developing times.</p>
                </div>
            </div>
        </div>
    </section>
@endsection
