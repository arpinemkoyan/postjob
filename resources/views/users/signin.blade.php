@extends('layout')
@section('content')
    <div class="row justify-content-center w-100">
        <div class="col-lg-5 col-md-6 col-xs-12">
            <div class="page-login-form box" id="login-form">
                <h3>Login</h3>
                <form class="login-form" method="POST" action="{{ route('login.user') }}">
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
                        <input type="password" class="form-control" name='password' placeholder="Password">
                        @if ($errors->has('password'))
                            <span class="text-danger">{{ $errors->first('password') }}</span>
                        @endif
                    </div>
                    <div class="col-12 form-group mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                            <label class="form-check-label" for="inlineFormCheck">
                                Keep Me Signed In
                            </label>
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark btn-block" id="log-btn">Submit</button>
                    </div>
                </form>
                <a href="{{route('register')}}">Don't have an account?</a>
            </div>
        </div>
    </div>
@endsection
