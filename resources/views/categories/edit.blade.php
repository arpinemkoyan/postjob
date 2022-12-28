@extends('jobs.layout')
@section('content1')

    <div class="main-card p-4">
        <p class="text-left fs-2 fw-bold">Edit Category</p>
        <div>
            <form action="{{ route('categories.update',$category->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" value="{{ $category->name }}" class="form-control"
                                   placeholder="Name">
                        </div>

                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>
@endsection
