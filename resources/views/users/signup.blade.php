@extends('layout')
@section('content')
    <div class="row justify-content-center w-100">
        <div class="col-lg-5 col-md-6 col-xs-12">
            <div class="page-login-form box" id="login-form">
                <h3>Create your account</h3>
                <form class="login-form" method="post" action="{{route('register.user')}}">
                    @csrf
                    <div class="col-12 form-group mb-3">
                        <div class="input-group">
                            <input type="text" class="form-control" name='name' placeholder="Username">
                            @if ($errors->has('name'))--}}
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 form-group mb-3">
                        <div class="input-group">
                            <input type="email" class="form-control" name='email' placeholder="Email Address">
                            @if ($errors->has('email'))--}}
                            <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="col-12 form-group mb-3">
                        <input type="password" class="form-control" name='password' placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
{{--                    <div class="col-12 form-group mb-3">--}}
{{--                        <input type="password" class="form-control" name='password' placeholder="Retype password">--}}
{{--                        @if ($errors->has('password'))--}}
{{--                            <span class="text-danger">{{ $errors->first('password') }}</span>--}}
{{--                        @endif--}}
{{--                    </div>--}}
                    <div class="col-12 form-group mb-3">
                        <select class="form-select" aria-label="Default select example" name="role">
                            <option value="0">Employer</option>
                            <option value="1">Candidante</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark btn-block" id="log-btn">Register</button>
                    </div>
                </form>
                <div>
                <p id='signin-bottom'>Already have an account?
                <a href="{{route('login')}}" id="signin-href">Sign In</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
