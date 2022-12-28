@extends('jobs.layout')
@section('content1')
    <div class="main-card p-4">
        <p class="text-left fs-2 fw-bold">Category</p>
        <div class="col-lg-12 margin-tb">
            <div class="float-end">
                <a class="btn btn-success" href="{{ route('categories.create') }}"> Create New Category</a>
            </div>
        </div>
            <div>
                <table class="w-100" id="categories-table">
                    <thead>
                    <tr>
                        <th>NAME</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($categories as $category)
                        <tr>
                            <td>{{$category->name}}</td>
                            <td>
                                <form {{--action="{{ route('books.destroy',$book->id) }}"--}} method="POST">
                                    <a class="btn btn-primary" href="{{ route('categories.edit',$category->id) }}">Edit</a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>

                </table>

            </div>

    </div>

@endsection
