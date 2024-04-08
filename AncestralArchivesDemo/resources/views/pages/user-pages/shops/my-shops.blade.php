@extends('pages.layouts.user-template')
@section('content')
    <div class="container">
        <div>
            <ol class="breadcrumb pl-5">
                <li class="breadcrumb-item"><a href="{{ route('pages.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active"><a href="#">My Shops</a></li>

            </ol>
        </div>
        <div class="d-flex flex-row-reverse p-4 ">
            <a class="btn btn-primary m-2" href="{{ route('pages.user.add-training') }}">Add Training Center</a>
            <a class="btn btn-primary m-2" href="{{ route('pages.user.add-shop') }}">Add Shops </a>
        </div>
        @if (Session::has('shopAdded'))
            <x-pages.alert alertType="success" message="{{ Session::get('shopAdded') }}"></x-pages.alert>
        @endif
        @if (Session::has('shopEdited'))
            <x-pages.alert alertType="warning" message="{{ Session::get('shopEdited') }}"></x-pages.alert>
        @endif
        @if (Session::has('shopDeleted'))
            <x-pages.alert alertType="danger" message="{{ Session::get('shopDeleted') }}"></x-pages.alert>
        @endif
        @if (!$shops->count())
            <h1 class="text-center m-5 text-danger"> No shops were created</h1>
        @endif
        @foreach ($shops as $item)
            <div class="card text-center m-4 ">
                <div class="card-header  ">
                    @if ($item->type == 'training_center')
                        <div> Training Center</div>
                    @else
                        <div> {{ $item->type }}</div>
                    @endif
                </div>
                <div>

                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <p class="card-text">{{ $item->description }}</p>
                </div>
                <div class="card-footer text-muted">
                    <a href="{{ route('pages.user.edit-shop', ['id' => $item->id]) }}" class="btn btn-primary m-3">Edit
                        Info</a>
                    <a href="{{ route('pages.user.edit-items', ['id' => $item->id]) }}" class="btn btn-light">
                        @if ($item->type == 'training_center')
                        <div> Edit Course</div>
                    @else
                        <div> Edit Item</div>
                    @endif
                    </a>
                    <a href="{{ route('pages.user.destroy-shop', ['id' => $item->id]) }}" class="btn btn-danger m-3"
                        style="font-size: 25px;"><span style="color: white" class=" icon icon-delete "></span></a>
                </div>
            </div>
        @endforeach
    </div>
@endsection
