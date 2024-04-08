@extends('pages.layouts.user-template')
@section('content')
    <section class="ftco-section contact-section ftco-degree-bg">
        <div class="container">
            <div>
                <ol class="breadcrumb pl-5">
                    <li class="breadcrumb-item "><a href="{{ route('pages.index') }}">Home</a></li>
                    <li class="breadcrumb-item active"><a href="{{ route('pages.admin.users') }}">Admin Panel</a></li>
                </ol>
            </div>
            @if (Session::has('shopActivityDeleted'))
            <x-pages.alert alertType="danger" message="{{ Session::get('shopActivityDeleted') }}"></x-pages.alert>
        @endif
        @if (Session::has('shopStatus'))
        <x-pages.alert alertType="warning" message="{{ Session::get('shopStatus') }}"></x-pages.alert>
    @endif
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th> S.No </th>
                        <th>User Name</th>
                        <th>Email</th>
                        <th>Shops</th>
                        <th>Blog</th>
                        <th>Events</th>
                        <th>Shop Approval </th>
                    </tr>
                </thead>
                @php
                    $i = 1;
                @endphp
                @foreach ($users as $item)
                    @if ($item->name != 'admin')
                        <tr>
                            <td> {{ $i++ }} </td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td><a href="{{ route('pages.admin.shop-activity', ['id' => $item->id]) }}"
                                    class="btn btn-primary">View Shops</a></td>
                            <td><a href="#" class="btn btn-primary">View Blogs</a></td>
                            <td><a href="#" class="btn btn-primary">View Events</a></td>
                            <td>
                                @if (!$item->is_shop_approved)
                                    <a href="{{route('pages.admin.shop-approval',['status'=>true,'id'=>$item->id])}}" type="button" class="btn btn-primary" data-mdb-ripple-init>Approve
                                        Shop</a>
                                @else
                                    <a href="{{route('pages.admin.shop-approval',['status'=>0,'id'=>$item->id])}}"  type="button" class="btn btn-danger" data-mdb-ripple-init>Cancel
                                        Shop</a>
                                @endif
                                
                            </td>
                        </tr>
                    @endif
                @endforeach
                </tbody>
            </table>
        </div>
    </section>
@endsection
{{-- 
    --}}
