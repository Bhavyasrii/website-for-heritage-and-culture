@extends('pages.layouts.main')
@section('content')
    <x-pages.banner pageTitle="Gallery" bannerImage="assets/images/bg_2.jpg">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a
                    href="{{url('/home')}}">Home</a></span><span class="mr-2"><a
                    href="{{url('/gallery')}}">Gallery</a></span></p>
    </x-pages.banner>
    <section class="ftco-section ftco-gallery">
        <div class="container">
            <div class="d-md-flex">
                <a href="{{asset('assets/images/cause-2.jpg')}}"
                   class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                   style="background-image: url({{asset('assets/images/cause-2.jpg')}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
                <a href="{{asset('assets/images/cause-3.jpg')}}"
                   class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                   style="background-image: url({{asset('assets/images/cause-3.jpg')}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
                <a href="{{asset('assets/images/cause-4.jpg')}}"
                   class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                   style="background-image: url({{asset('assets/images/cause-4.jpg')}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
                <a href="{{asset('assets/images/cause-5.jpg')}}"
                   class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                   style="background-image: url({{asset('assets/images/cause-5.jpg')}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="d-md-flex">
                <a href="{{asset('assets/images/cause-6.jpg')}}"
                   class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                   style="background-image: url({{asset('assets/images/cause-6.jpg')}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
                <a href="{{asset('assets/images/image_3.jpg')}}"
                   class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                   style="background-image: url({{asset('assets/images/image_3.jpg')}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
                <a href="{{asset('assets/images/image_1.jpg')}}"
                   class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                   style="background-image: url({{asset('assets/images/image_1.jpg')}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
                <a href="{{asset('assets/images/image_2.jpg')}}"
                   class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                   style="background-image: url({{asset('assets/images/image_2.jpg')}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
            <div class="d-md-flex">
                <a href="{{asset('assets/images/event-1.jpg')}}"
                   class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                   style="background-image: url({{asset('assets/images/event-1.jpg')}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
                <a href="{{asset('assets/images/event-2.jpg')}}"
                   class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                   style="background-image: url({{asset('assets/images/event-2.jpg')}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
                <a href="{{asset('assets/images/image_1.jpg')}}"
                   class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                   style="background-image: url({{asset('assets/images/image_4.jpg')}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
                <a href="{{asset('assets/images/image_2.jpg')}}"
                   class="gallery image-popup d-flex justify-content-center align-items-center img ftco-animate"
                   style="background-image: url({{asset('assets/images/event-4.jpg')}});">
                    <div class="icon d-flex justify-content-center align-items-center">
                        <span class="icon-search"></span>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class="ftco-section-3 img" style="background-image: url({{asset('assets/images/bg_3.jpg')}});">
        <div class="overlay"></div>
        <div class="container">
            <div class="row d-md-flex">
                <div class="col-md-6 d-flex ftco-animate">
                    <div class="img img-2 align-self-stretch"
                         style="background-image: url({{asset('assets/images/bg_4.jpg')}});"></div>
                </div>
                <div class="col-md-6 volunteer pl-md-5 ftco-animate">
                    <h3 class="mb-3">Be a volunteer</h3>
                    <form action="#" class="volunter-form">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email">
                        </div>
                        <div class="form-group">
                            <textarea name="" id="" cols="30" rows="3" class="form-control"
                                      placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send Message" class="btn btn-white py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
