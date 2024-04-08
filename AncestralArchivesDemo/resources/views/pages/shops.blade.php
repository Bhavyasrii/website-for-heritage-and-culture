@extends('pages.layouts.main')
@section('content')
    <x-pages.banner pageTitle="Shops" bannerImage="assets/images/bg_6.jpg">
        <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a
                    href="{{ url('/home') }}">Home</a></span><span class="mr-2"><a
                    href="{{ url('/blog') }}">shops</a></span></p>
    </x-pages.banner>
    <section class="ftco-section bg-light">
        <div class="container">
            <div class="input-group w-50 ml-5">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search"
                    aria-describedby="search-addon" />
                <button type="button" class="btn btn-primary" style="border-radius:0px 15px 15px 0px;">search<span
                        class="p-2 mt-2 icon icon-search"></span></button>
            </div>
            @foreach ($allShops as $item)
                <div class="card m-3">
                    @if ($item->shop_image != null)
                        <img src="{{ asset($item->shop_image) }}" style="max-height:250px; width: auto" class="card-img-top"
                            alt="shop banner">
                    @else
                        <img src="{{ asset('storage/shop-images/general_shops.jpg') }}"
                            style="max-height:250px; width: auto" class="card-img-top" alt="shop banner">
                    @endif


                    <div class="card-body">
                        <h5 class="card-title">{{ $item->name }}</h5>
                        <p class="card-text">{{ $item->description }}</p>
                        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
