@extends('pages.layouts.user-template')
@section('content')
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div>
                <ol class="breadcrumb pl-5">
                    <li class="breadcrumb-item"><a href="{{ route('pages.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('pages.user.my-shops') }}">My Shops</a></li>
                    <li class="breadcrumb-item active"><a href="#">Add Shop</a></li>
                </ol>
            </div>
            <div class="row block-9">
                <div class="col-md-10 pr-md-5">
                    <h4 class="mb-4">Fill the Shop Details Below</h4>
                    <form action="{{ route('pages.user.store-shop') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder=" Name (required)">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="owner_name"
                                placeholder="Owner Name (required) ">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder=" Email (required)">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" name="mobile_number"
                                placeholder=" Mobile Number (required)">
                        </div>
                        <div class="form-group">
                            <textarea name="address" id="" cols="30" rows="4" maxlength="50" minlength="20" class="form-control"
                                placeholder="Address (required)"></textarea>
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="" cols="30" rows="7" maxlength="250" minlength="20"
                                class="form-control" placeholder="Short description  (required)"></textarea>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="license_number"
                                placeholder="  Licence Number">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="type" class="form-control" value="{{$type}}">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="user_id" class="form-control" value="{{ auth()->user()->id }}">
                        </div>
                        <div class="form-group">
                            <input type="file" name="shop_image" class="form-control "
                                placeholder=" upload your  banner image">
                        </div>
                        <p> Add Your product (You can add more products after shop creation)</p>
                        <div class="form-group">
                            <input type="text" name="items[0]" class="form-control"
                                placeholder=" Product Name (required)">
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Add " class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                    <div>
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
