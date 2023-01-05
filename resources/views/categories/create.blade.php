@extends('jobs.layout')
@section('content1')

    <div class="main-card p-4">
        <p class="text-left fs-2 fw-bold">Category</p>
        <div class="col-lg-12 margin-tb">
            <div class="float-end">
                <a class="btn btn-primary" href="{{ route('categories.index') }}"> Back</a>
            </div>
        </div>

        <div>
            <form action="{{ route('categories.store') }}" method="POST">
                @csrf

                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-12">
                        <div class="form-group">
                            <strong>Name:</strong>
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="form-group">
                            <label class="input-group-text" for="inputGroupFile02">
                                Choose file...
                                <input type="file" class="form-control" id="inputGroupFile02" name="file"
                                       accept="image/png, image/jpeg">
                            </label>
                            @if ($errors->has('file'))
                                <span class="text-danger">{{ $errors->first('file') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>

            </form>
        </div>

@endsection
