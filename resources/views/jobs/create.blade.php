@extends('layout')
@section('content')
    <div class="row justify-content-center w-100">
        <div class="row g-15" style="width: 72%">
            <div class="page-login-form box" id="login-form">
                <h3 class="text-left">Post a new Job</h3>
                <form class="post-form" method="post" action="{{ route('jobs.store') }}">
                    @csrf
                    <div class="form-group mb-3 col-12">
                        <div class="form-group">
                            <label for="title">Job Title</label>
                            <input type="text" class="form-control" id='title' name='title'
                                   placeholder="Write job title">
                            @if ($errors->has('title'))--}}
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="location">Location(optional)</label>
                            <input type="text" class="form-control" name='location' id="location"
                                   placeholder="Location e.g. London">
                            @if ($errors->has('location'))--}}
                            <span class="text-danger">{{ $errors->first('location') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="category">Category</label>
                            <div class="search-category-container">
                                <select class="form-select" aria-label="Default select example" name="category_id"
                                        id="category">
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="job_tag">Job Title</label>
                            <input type="text" class="form-control" name='job_tag' id="job_tag"
                                   placeholder="e.g.PHP,Social Media,Management">
                            <p class="text-left">Comma separate tags, such as required skills or technologies, for this
                                job.</p>
                            @if ($errors->has('job_tag'))--}}
                            <span class="text-danger">{{ $errors->first('job_tag ') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label class="control-label">Description</label>
                            <textarea name="description"></textarea>
                            <script>
                                CKEDITOR.replace( 'description' );
                            </script>
                        </div>

                        <div class="form-group">
                            <label for="url">Application email / URL</label>
                            <input type="text" class="form-control" name='email_url' id="url"
                                   placeholder="Enter an email address or website URL">
                            @if ($errors->has('email_url'))--}}
                            <span class="text-danger">{{ $errors->first('email_url') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="deadline">Closing date(optional)</label>
                            <input type="text" class="form-control" name='deadline' id="deadline"
                                   placeholder="yyyy-mm-dd">
                            @if ($errors->has('deadline'))--}}
                            <span class="text-danger">{{ $errors->first('deadline') }}</span>
                            @endif
                        </div>

                        <div class="col-12">
                            <button type="submit" class="btn btn-dark btn-block" id="job-btn">Submit Your Job</button>
                        </div>
                </form>
            </div>
        </div>
    </div>
    <script src="js/summernote.js"></script>

@endsection
