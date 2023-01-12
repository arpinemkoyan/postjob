@extends('layout')
@section('content')
    <div class="row justify-content-center w-100">
        <div class="row g-15" style="width: 72%">
            <div class="page-login-form box" id="login-form">
                <h3 class="text-left">Company details</h3>
                <form class="post-form" method="post" action="{{ route('companyDetails.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="company-name">Company name</label>
                        <input type="text" class="form-control" name='name' id="company-name"
                               placeholder="Enter the name of company">
                        @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="website">Website(optional)</label>
                        <input type="url" class="form-control" name='website' id="website"
                               placeholder="http://">
                        @if ($errors->has('website'))
                            <span class="text-danger">{{ $errors->first('website') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="tags">Tagline(optional)</label>
                        <input type="text" class="form-control" name='tagline1' id="tags"
                               placeholder="Briefly describe your company">
                        @if ($errors->has('tagline1'))
                            <span class="text-danger">{{ $errors->first('tagline1') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="tags2">Tagline(optional)</label>
                        <input type="text" class="form-control" name='tagline2' id="tags2"
                               placeholder="Briefly describe your company">
                        @if ($errors->has('tagline2'))
                            <span class="text-danger">{{ $errors->first('tagline2') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="input-group-text" for="inputGroupFile02">
                            Choose file...
                            <input type="file" class="form-control" id="inputGroupFile02" name="file">
                        </label>
                        @if ($errors->has('file'))
                            <span class="text-danger">{{ $errors->first('file') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label class="input-group-text" for="inputGroupFile02">
                            Logo
                            <input type="logo" class="form-control" id="inputGroupFile02" name="logo">
                        </label>
                        @if ($errors->has('logo'))
                            <span class="text-danger">{{ $errors->first('logo') }}</span>
                        @endif
                    </div>
            </div>
            <div class="col-12">
                <button type="submit" class="btn btn-dark btn-block" id="job-btn">Submit</button>
            </div>
            </form>
        </div>
    </div>
    </div>
    <script src="js/summernote.js"></script>

@endsection
