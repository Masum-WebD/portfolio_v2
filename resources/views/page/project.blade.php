@extends('layout.app')


@section('content')
    <section class="bg-secondary">
        <div class="py-5" style="width: 80%; margin:0 10%">
            {{-- <p class="border-left"></p> --}}
            <h4 class="  project-title text-white pl-2"> Project</h4>
            <div class="row mt-4">
                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12 pb-3 shadow-md shadow-gray-600">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/Booksop.png') }}" class="card-img-top my-element">
                        <div class="card-body">
                            <h5 class="card-title">Bookshop</h5>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="">Code</a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="">Live site</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12 pb-3 shadow-md shadow-gray-600">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ asset('assets/img/hardware.png') }}" class="card-img-top my-element">
                        <div class="card-body">
                            <h5 class="card-title">Bookshop</h5>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="">Code</a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="">Live site</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-md-6 col-sm-12 pb-3 shadow-md shadow-gray-600">
                    <div class="card" style="width: 18rem;">
                        <img  src="{{ asset('assets/img/telecom.png') }}" class="card-img-top my-element ">
                        <div class="card-body">
                            <h5 class="card-title">Bookshop</h5>
                            <div class="row">
                                <div class="col-6">
                                    <a href="#" class="">Code</a>
                                </div>
                                <div class="col-6">
                                    <a href="#" class="">Live site</a>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
