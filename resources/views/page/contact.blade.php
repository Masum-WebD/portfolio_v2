@extends('layout.app')

@section('content')
    <section class="bg-secondary">
        <div name="Contact" class="w-full bg-gradient bg-black text-white">
            <div class="container-fluid p-4">
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-8 text-center">
                        <p class="text-4xl font-weight-bold border-bottom border-4 border-gray-500">
                            Contact
                        </p>
                        <p class="py-4">Submit the form below to get in touch with me</p>
                        <form action="https://getform.io/f/59662137-5af0-4c21-b837-b2aed25536f7" method="POST">
                            <div class="mb-3">
                                <input type="text" name="name" placeholder="Enter your name" class="form-control">
                            </div>
                            <div class="mb-3">
                                <input type="text" name="email" placeholder="Enter your email" class="form-control">
                            </div>
                            <div class="mb-3">
                                <textarea name="message" placeholder="Enter your message" rows="5" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg">Let's Talk</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>
@endsection
