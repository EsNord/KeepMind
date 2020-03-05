@extends('layouts.app')
@section('style')
    <link rel="stylesheet" href="{{asset('css/Complete Register.css')}}">
    <link rel="stylesheet" href="{{asset('css/Courses-Info.css')}}">
    <link rel="stylesheet" href="{{asset('css/Header-Blue.css')}}">
    <link rel="stylesheet" href="{{asset('css/video.css')}}">
    <link rel="stylesheet" href="{{asset('css/animated.css')}}">
    @endsection
@section('navbar')
    @include('include.nav')
    @endsection
@section('content')
    <section class="Header">
        <div class="header-blue">
            <div class="container hero">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-12 col-lg-5 col-xl-5 offset-lg-1 offset-xl-1 left-content-header">
                        <h1>Screencasts for the<br><strong>MODERN DEVELOPER</strong><br></h1>
                        <p>Mauris egestas tellus non ex condimentum, ac ullamcorper sapien dictum. Nam consequat neque quis sapien viverra convallis. In non tempus lorem. </p><button class="btn btn-light btn-lg reverse-effect-color" type="button">Browse Course</button>
                        <button
                                class="btn btn-light btn-lg btn-effect-hover" type="button">Browse Course</button>
                    </div>
                    <div class="col right-header-content"><img class="img-fluid" src="{{asset('img/home-banner-lary.svg')}}"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="text-center Courses">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="Icon-Box">
                        <div data-bs-hover-animate="pulse" class="info-icon"><i class="fas fa-brain"></i>
                            <p>150<br><br></p><span>Exercise</span></div>
                        <div data-bs-hover-animate="pulse" class="info-icon"><i class="fas fa-user-graduate"></i>
                            <p>150<br><br></p><span>Student</span></div>
                        <div data-bs-hover-animate="pulse" class="info-icon"><i class="fas fa-user-friends"></i>
                            <p>150<br><br></p><span>Visitor</span></div>
                    </div>
                    <div class="Categore">
                        <h1>The most Track Popular For the working developer.<br></h1>
                        <div class="Categore-Boxes mb-5">
                            <div class="row">
                                <div class=" item-backoverlay Pinot">
                                    <div class="Left-Content-Box">
                                        <img class="img-fluid" src="{{asset('img/testing-default.svg')}}">
                                        <h1>Mathmatical</h1>
                                    </div>
                                    <div class="Right-Content-Box" >
                                        <div class="contnet-text">
                                            <div class="item">
                                                <h4>38</h4><span>Video</span>
                                            </div>
                                            <div class="item">
                                                <h4>36</h4>
                                                <span>Serise</span>
                                            </div>
                                            <button class="btn box-button" type="button">Explorer <i class="fa fa-play-circle "></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class=" item-backoverlay Red">
                                    <div class="Left-Content-Box">
                                        <img class="img-fluid" src="{{asset('img/testing-default.svg')}}">
                                        <h1>Mathmatical</h1>
                                    </div>
                                    <div class="Right-Content-Box" >
                                        <div class="contnet-text">
                                            <div class="item">
                                                <h4>38</h4><span>Video</span>
                                            </div>
                                            <div class="item">
                                                <h4>36</h4>
                                                <span>Serise</span>
                                            </div>
                                            <button class="btn box-button" type="button">Explorer <i class="fa fa-play-circle "></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class=" item-backoverlay Yellow">
                                    <div class="Left-Content-Box">
                                        <img class="img-fluid" src="{{asset('img/testing-default.svg')}}">
                                        <h1>Mathmatical</h1>
                                    </div>
                                    <div class="Right-Content-Box" >
                                        <div class="contnet-text">
                                            <div class="item">
                                                <h4>38</h4><span>Video</span>
                                            </div>
                                            <div class="item">
                                                <h4>36</h4>
                                                <span>Serise</span>
                                            </div>
                                            <button class="btn box-button" type="button">Explorer <i class="fa fa-play-circle "></i></button>
                                        </div>
                                    </div>
                                </div>
                                <div class=" item-backoverlay Pinot">
                                    <div class="Left-Content-Box">
                                        <img class="img-fluid" src="{{asset('img/testing-default.svg')}}">
                                        <h1>Mathmatical</h1>
                                    </div>
                                    <div class="Right-Content-Box" >
                                        <div class="contnet-text">
                                            <div class="item">
                                                <h4>38</h4><span>Video</span>
                                            </div>
                                            <div class="item">
                                                <h4>36</h4>
                                                <span>Serise</span>
                                            </div>
                                            <button class="btn box-button" type="button">Explorer <i class="fa fa-play-circle "></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <button class="Br-btn btn btn-lg reverse-effect-color w-50">Browse All Courses</button>
    </section>
    <section class="video">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="Content-Video">
                        <h1>Watch Our Trainers in Live Action</h1>
                        <p class="">In the history of modern astronomy, there is probably no one greater leap
                            forward than the building and launch of the space telescope known as the Hubble.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="Video-Box">
                        <iframe width="100%" height="500px" src=""></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('include.footer')
@endsection
@section('scriptJs')
    <script src="{{asset('js/animate-navbar.js')}}"></script>
    <script src="{{asset('js/bs-animation.js')}}"></script>
    <script src="{{asset('js/script.js')}}"></script>
    @endsection
