@extends('layout')
@section('content')
    <div class="jobs-cards w-100">
        <form class="row" id="form-id"{{-- method="post" action="{{route('candidates.filter', $jobs[0])}}"--}}>
            @csrf
            <div class="col">
                <input type="text" class="form-control" id="keyword" name="title" placeholder="Keyword: Name, Tag">
            </div>
            <div class="col">
                <input type="text" class="form-control" name="location" id="location"
                       placeholder="Location: City, State, Zip">
            </div>
            <div class="col">
                <button type="submit" class="btn" id="filetr-btn">Filter</button>
            </div>
        </form>
        <div class="col" id="jobs-cards">
            <table class="table">
                @foreach($jobs as $job)
                    <tr>
                        <td>
                            <img src="{{$job->logo}}" class="flex-shrink-0 me-3" alt="...">
                            <div class="job-card-body align-items-start" id="job-card-body">
                                <h5 class="">{{$job->title}}</h5>
                                <p>{{$job->company->name}}</p>
                            </div>
                        </td>
                        <td><p id="active-job">{{$countData[$job->company_id]}} Open
                                @if($countData[$job->company_id] > 1)
                                    Jobs
                                @else
                                    Job
                                @endif
                            </p>
                        </td>
                        <td><i class="bi bi-geo-alt"></i> {{$job->location}}</td>
                        <td style="color: #26ae61">FULL-TIME</td>
                        <td><a class="btn stretched-link" href="{{route('jobs.show', $job->id)}}" role="button"
                               id="apply-btn">Apply Now</a>
                        </td>
                    </tr>
                @endforeach
            </table>
            {!! $jobs->appends(\Request::except('page'))->render() !!}

        </div>

    </div>

@endsection

