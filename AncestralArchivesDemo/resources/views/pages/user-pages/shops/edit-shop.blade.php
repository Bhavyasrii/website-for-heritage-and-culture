@extends('pages.layouts.user-template')
@section('content')
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div>
                <ol class="breadcrumb pl-5">
                    <li class="breadcrumb-item"><a href="{{ route('pages.user.my-shops') }}">My Shops</a></li>
                    <li class="breadcrumb-item active"><a href="#">Edit Info </a></li>

                </ol>
            </div>
            <div class="row block-9">
                <div class="col-md-10 pr-md-5">
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
                    <h4 class="mb-4">Edit Your Details</h4>
                    <form action="{{ route('pages.user.update-shop', ['id' => $shop->id]) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label> Name</label>
                            <input type="text" class="form-control" name="name" value="{{ $shop->name }}">
                        </div>
                        <div class="form-group">
                            <label>Owner Name</label>
                            <input type="text" class="form-control" name="owner_name" value="{{ $shop->owner_name }}"">
                        </div>
                        <div class="form-group">
                            <label>Email Address</label>
                            <input type="email" class="form-control" name="email" value="{{ $shop->email }}">
                        </div>
                        <div class="form-group">
                            <label>Mobile Number</label>
                            <input type="tel" class="form-control" name="mobile_number"
                                value="{{ $shop->mobile_number }}">
                        </div>
                        <div class="form-group">
                            <label> address</label>
                            <textarea name="address" id="" cols="30" rows="4" maxlength="50" minlength="20"
                                class="form-control">{{ $shop->address }}</textarea>
                        </div>
                        <div class="form-group">
                            <label> Description</label>
                            <textarea name="description" id="" cols="30" rows="7" maxlength="250" minlength="20"
                                class="form-control">{{ $shop->description }}</textarea>
                        </div>
                        <div class="form-group">
                            @if ($shop->shop_image !== null)
                                <div class="form-group">
                                    <label> license</label>
                                    <input type="text" class="form-control" name="license_number"
                                        value="{{ $shop->license_number }}">
                                </div>
                            @else
                                <div class="form-group">
                                    <label> License</label>
                                    <input type="text" class="form-control" name="license_number"
                                        placeholder=" Licenece">
                                </div>
                            @endif
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="type" class="form-control" value="shop">
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="user_id" class="form-control" value="{{ auth()->user()->id }}">
                        </div>
                        <div class="form-group">
                            @if ($shop->shop_image !== null)
                                <label> Image</label><br>
                                <img src="{{ asset($shop->shop_image) }}" alt="Shop image"
                                    style="height: 200px;width:auto"> <br>
                            @endif
                            <label for="image" class="p-2">Choose Your Banner</label>
                            <input type="file" name="shop_image" id="image" class="form-control" />
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Save " class="btn btn-primary py-3 px-5">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
