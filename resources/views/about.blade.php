@extends('layout.app')

@section('content')
    <div class="bg-secondary py-5">
        <div class=" py-5" style="width: 80%; margin:0 10%">
            <div class="row align-items-center">
                <!-- Identity text on the left -->
                <div class="col-md-7 text-white">
                    <h4>Hello! I’m</h4>
                    <h2>MD Masum </h2>
                    <p>
                        I am a Php laravel Developer. Passionate PHP and Laravel artisan, dedicated to crafting robust and ingenious backend solutions. I thrive on logical challenges, sculpting the backbone of digital experiences with precision and innovation. Committed to delivering excellence, I bring the intricate art of code to life, shaping the unseen to empower seamless functionalities.
                    </p>
                </div>

                <!-- Photo and social icons on the right -->
                <div class="col-md-5 text-center p-0">
                    <div class="position-relative d-inline-block">
                        <div class="circle-background"></div>
                        <img src={{asset("assets/img/masum.jpg")}} alt="Your Photo" class=" profile-pic" height="300" width="300" >
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

