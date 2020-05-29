@extends('layouts/frontEnd/layoutFrontEnd')
@section('titleWeb',"Eliah")
@section('content')
    <div class="wp-container container">
        <div class="row">
            <div class="t_ctt col-md-5" >
                <h2>Contact info</h2>
                <div class="cti">
                    <div class="iconct">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="textct">
                        <h5><b>Address</b></h5>
                        <p>2168 S Archer Ave, Chicago, IL 60616, US</p>
                    </div>
                </div>
                <div class="cti">
                    <div class="iconct">
                        <i class="fas fa-headphones"></i>
                    </div>
                    <div class="textct">
                        <h5>Phone</h5>
                        <p>+1 312-080-1990 | +1 233-688-8999</p>
                    </div>
                </div>
                <div class="cti">
                    <div class="iconct">
                        <i class="far fa-envelope"></i>
                    </div>
                    <div class="textct">
                        <h5>Email</h5>
                        <p>Beatycosmetics@gmail.com</p>
                    </div>
                </div>
                <div class="cti">
                    <div class="iconct">
                        <i class="far fa-clock"></i>
                    </div>
                    <div class="textct">
                        <h5>Opentime</h5>
                        <p>Sun-Sat: 8.00am - 9.00.pm</p>
                    </div>
                </div>
            </div>
            <div class="t_git col-md-7">
                <h2>Get in touch</h2>
                <br>
                <input type="text" name="" id="" placeholder=" Name">
                <br>
                <input type="text" name="" id="" placeholder=" Email">
                <br>
                <textarea name="" id="" cols="20" rows="5" placeholder=" Message"></textarea>
                <br>
                <button>SEND MESSAGE</button>
            </div>
        </div>
    </div>
    <div class="wp-container container">
        <div class="t_ctmap col-md-12">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d19599.105408321975!2d-74.20331987243637!3d40.794462329133104!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2556c1f09d441%3A0xc34400ebfb0706a1!2sBloomfield%2C%20New%20Jersey%2C%20Hoa%20K%E1%BB%B3!5e0!3m2!1svi!2s!4v1590575099800!5m2!1svi!2s" width="100%" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
        </div>
    </div>
@endsection