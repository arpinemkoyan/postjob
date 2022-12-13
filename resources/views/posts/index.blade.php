@extends('posts.layout')
@section('content1')
    <div class="main-card p-4">
        <p class="text-left fs-2 fw-bold">Manage Jobs</p>
        <table class="table">
        <thead class="table-borderless">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">Keywords</th>
                <th scope="col">Candidates</th>
                <th scope="col">Featured</th>
            </tr>
            </thead>
            <tbody>
            {{--            @foreach($posts as $post)--}}
            {{--                <tr>--}}
            {{--                    <td>--}}
            {{--                        {{$post->title}}--}}
            {{--                        {{$post->location}}--}}
            {{--                    </td>--}}
            {{--                    <td>Full-time</td>--}}
            {{--                    <td>{{$post->condidate}}</td>--}}
            {{--                    <td>Star</td>--}}
            {{--                </tr>--}}
            {{--            @endforeach--}}
            <tr>
                <td>
                    title
                    location
                </td>
                <td>Full-time</td>
                <td>condidate</td>
                <td>Star</td>
            </tr>
            </tbody>
        </table>
    </div>

@endsection
