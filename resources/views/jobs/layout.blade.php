@extends('layout')
@section('content')


    <div class="list-group" style="width: 31%;">
        <a href="#" class="list-group-item list-group-item-action disabled" aria-current="true">
            Manage Account
        </a>
        <a href="#" class="list-group-item list-group-item-action">My Resume</a>
        <a href="#" class="list-group-item list-group-item-action">Bookmarked Jobs</a>
        <a href="#" class="list-group-item list-group-item-action">Notifacation</a>
        <a href="{{route('jobs.create')}}" class="list-group-item list-group-item-action">Manage Jobs</a>
        <a href="#" class="list-group-item list-group-item-action">Manage Application</a>
        <a href="#" class="list-group-item list-group-item-action">Change Password</a>
        @if(auth()->user()->role === \App\Models\User::EMPLOYER_ROLE)
            <a href="{{route('companyDetails.index')}}" class="list-group-item list-group-item-action">Company
                Details</a>
        @endif
        @if(auth()->user()->role === \App\Models\User::ADMIN_ROLE)
            <a href="{{route('categories.index')}}" class="list-group-item list-group-item-action">Category</a>
        @endif
        <a href="#" class="list-group-item list-group-item-action">Sign out</a>
    </div>

    @yield('content1')

@endsection
