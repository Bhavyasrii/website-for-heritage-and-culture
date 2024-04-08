@extends('pages.layouts.user-template')
@section('content')
    <div class="container">
        <div>
            <ol class="breadcrumb pl-5 mt-5">
                <li class="breadcrumb-item "><a href="{{ route('pages.admin.users') }}">Admin Panel</a></li>
                <li class="breadcrumb-item active"><a href="#">User Shop</a></li>
            </ol>
        </div>
       
        @if (!$shop->count())
            <h1 class="text-center m-5 text-danger"> No shops were created</h1>
        @else
           
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th> S.No </th>
                        <th>Shop Name</th>
                        <th>Info</th>
                        <th>Delete</th>
                        
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                @foreach ($shop as $item)
                    <tr>
                        <td> {{ $i++ }} </td>
                        <td>{{ $item->name }}</td>
                        <td><a href="#" class="btn btn-primary">Info</a></td>
                        <td><a href="{{ route('pages.admin.destroy-shop-activity', ['id' => $item->id]) }}"
                                class="btn btn-primary">Delete</a></td>
                                
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
