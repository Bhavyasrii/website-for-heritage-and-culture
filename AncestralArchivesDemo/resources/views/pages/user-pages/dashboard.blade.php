@extends('pages.layouts.main')
@section('content')
    <x-pages.banner pageTitle="Dashboard" bannerImage="assets/images/bg_7.jpg">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a
                    href="{{ url('/home') }}">Home</a></span><span class="mr-2"><a
                    href="{{ url('/user/dashboard') }}">Dashboard</a></span></p>
    </x-pages.banner>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="d-flex flex-row-reverse">
                <a href="{{ route('profile.edit') }}" class="btn btn-white px-3 py-2 mt-2">Edit Profile<span
                        class="p-2 hover-change icon icon-pencil"></span></a></p>

            </div>
            <div>

                @if (auth()->user()->is_shop_approved)
                    <a href="{{ route('pages.user.my-shops') }}">My Shops</a>
                @endif


            </div>
        </div>


    </section>
@endsection
