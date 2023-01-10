@extends('layout')
@section('content')
    <div class="categories-cards">
        <div class="row row-cols-2 row-cols-lg-4 justify-content-md-center" id="cards">
            @foreach($categories as $category)
                <div class="card">
                    <a href="{{route('jobSearch.index', $category->id)}}" class="stretched-link">
                        <img src="{{$category->file}}" {{--class="card-img-top"--}} {{--alt="..."--}}>
                        <div class="card-body">
                            <h5 class="card-title">{{$category->name}}</h5>
                            <p class="card-text">{{$category->jobs->count()}}</p>
                        </div>
                    </a>

                </div>
            @endforeach
        </div>

@endsection

