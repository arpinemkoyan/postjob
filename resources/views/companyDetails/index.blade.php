@extends('jobs.layout')
@section('content1')
    <div class="row justify-content-center w-100">
        <div class="" style="width: 72%">
            <div class="formm">
                <form class="post-form" method="get" action="@if(!$companyDetails){{ route('companyDetails.create') }}
                @else {{route('companyDetails.edit', $companyDetails)}}
                @endif">
                    <h3 class="text-left">Company details</h3>
                    <table class="details-table">
                        <tr>
                            <td>Company Name</td>
                            <td>{{$companyDetails->name}}</td>
                        </tr>
                        <tr>
                            <td>Website</td>
                            <td><a href="{{$companyDetails->website}}">{{$companyDetails->website}}</a></td>
                        </tr>
                        <tr>
                            <td>Tagline</td>
                            <td>
                                @foreach($companyDetails->tagline as $tagline)
                                    {{$tagline->tagline}}
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <td>File</td>
                            <td>{{$companyDetails->file}}</td>
                        </tr>
                        <tr>
                            <td>Logo</td>
                            <td>{{$companyDetails->logo}}</td>
                        </tr>
                    </table>

                    <div class="col-12">
                        <button type="submit" class="btn btn-dark btn-block" id="job-btn">
                            @if($companyDetails)
                                Edit
                            @else
                                Create
                            @endif
                        </button>
                    </div>
                </form>
            </div>
        </div>

@endsection
