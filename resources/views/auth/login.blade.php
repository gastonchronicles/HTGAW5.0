@extends('layouts.app')

@section('content')
<div class="container">
        <div id="titleblock">
            <h1 id="title" style="margin-top: 0px;margin-bottom: 15px;font-size: 7em;">How to Get Away with 5.0</h1>
            <h2 id="subtitle" style="font-size: 2.5em;">work smarter, not harder</h2>
        </div>
        <form id="login" role="form" method="POST" action="{{ url('/login') }}">
            {{ csrf_field() }}

            <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                <label for="username" class="control-label">Username</label>

                <div class="col-md-6">
                    <input id="username" type="username" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                    @if ($errors->has('username'))
                        <span class="help-block">
                            <strong>{{ $errors->first('username') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                <label for="password" class="control-label">Password</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control" name="password" required>
                    @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div id="loginbtngroup">
                    <button type="submit" id="loginbtn" class="btn">
                        Login
                    </button>

                    <a id="forgotpass" class="btn" href="{{ url('/password/reset') }}">
                        Forgot Your Password?
                    </a>
                </div>
            </div>


            <div class="form-group">
                <div class="checkbox">
                    <label>
                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : ''}}> Remember Me
                    </label>
                </div>
            </div>
        </form>

</div>
@endsection
