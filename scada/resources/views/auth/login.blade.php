@extends('layouts.auth')
@section('title')
    {{config('app.name')}} - Login
@endsection
@section('content')
<div class="login-box">
    <div class="login-logo">
      <a href="{{ route('home') }}"><b>Engineer's</b>CAD Solutions</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="{{ route('login') }}" method="post">
        @csrf
        <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
            <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
            <input id="password" type="password" placeholder="Password" class="form-control" name="password" required>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8">
            <div class="checkbox icheck">
              <label>
                <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="{{ route('password.request') }}">I forgot my password</a><br>
    </div>
    <!-- /.login-box-body -->
  </div>
  <!-- /.login-box -->
@endsection
