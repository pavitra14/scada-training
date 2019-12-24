@extends('layouts.auth')
@section('title')
{{config('app.name')}} - Register
@endsection
@section('content')
<div class="register-box">
    <div class="register-logo">
        <a href="{{route('home')}}"><b>Engineer's</b>CAD Solutions</a>
    </div>

    <div class="register-box-body">
        <p class="login-box-msg">Register a new student</p>

        <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group has-feedback{{ $errors->has('name') ? ' has-error' : '' }}">
                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" placeholder="Full Name"
                    required autofocus>
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
                @if ($errors->has('name'))
                <span class="help-block">
                    <strong>{{ $errors->first('name') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group row has-feedback{{ $errors->has('father_name') ? ' has-error' : '' }}">
                <div class="col-md-3">
                    <select name="title" id="title" class="form-control">
                        <option value="Mr.">Mr.</option>
                    </select>
                </div>
                <div class="col-md-9">
                    <input id="father_name" type="text" class="form-control" name="father_name" value="{{ old('father_name') }}" placeholder="Father's Name"
                    required>
                </div>
                @if ($errors->has('father_name'))
                <span class="help-block">
                    <strong>{{ $errors->first('father_name') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback{{ $errors->has('email') ? ' has-error' : '' }}">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" placeholder="Email" required>
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                @if ($errors->has('email'))
                <span class="help-block" role="alert">
                    <strong>{{ $errors->first('email') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback{{ $errors->has('password') ? ' has-error' : '' }}">
                <input id="password" type="password" class="form-control" name="password" placeholder="Password"
                    required>
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                @if ($errors->has('password'))
                <span class="help-block" role="alert">
                    <strong>{{ $errors->first('password') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input id="password-confirm" type="password" class="form-control" placeholder="Confirm password" name="password_confirmation" required>
                <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <div class="input-group date">
                  <input type="text" name="dob" class="form-control pull-left" id="datepicker" placeholder="Date of birth">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                </div>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
              <div class="form-group has-feedback">
                    <select class="form-control select2" style="width: 100%;" name="course_id" >
                            <option selected="selected" disabled>Select a course</option>
                            <optgroup label="Certificate">
                                @foreach (App\Course::where('category', '1')->get() as $c)
                                <option value="{{$c->id}}">{{$c->title}}</option>
                                @endforeach
                            </optgroup>
                            <optgroup label="Diploma">
                                @foreach (App\Course::where('category', '2')->get() as $c)
                                <option value="{{$c->id}}">{{$c->title}}</option>
                                @endforeach
                            </optgroup>
                            <optgroup label="Professional Diploma">
                                @foreach (App\Course::where('category', '3')->get() as $c)
                                <option value="{{$c->id}}">{{$c->title}}</option>
                                @endforeach
                            </optgroup>
                            <optgroup label="Master Diploma">
                                @foreach (App\Course::where('category', '4')->get() as $c)
                                <option value="{{$c->id}}">{{$c->title}}</option>
                                @endforeach
                            </optgroup>

                    </select>

                </div>
                <div class="form-group has-feedback">
                    <select class="form-control select2" style="width: 100%;" name="branch" required>
                            <option selected="selected" disabled>Select a branch</option>
                            <option value="1">Mechanical Engineering</option>
                            <option value="2">Civil Engineering</option>
                            <option value="3">Electrical/Electronics</option>
                    </select>

                </div>
                <!-- /.form group -->
              <div class="form-group has-feedback">
                    <textarea name="qualification" id="qualification" cols="30" rows="3" class="form-control" placeholder="Qualifications"></textarea>
                    @if ($errors->has('qualification'))
                    <span class="help-block" role="alert">
                        <strong>{{ $errors->first('qualification') }}</strong>
                    </span>
                    @endif
            </div>
            <div class="form-group has-feedback">
                    <textarea name="college_workplace" id="college_workplace" cols="30" rows="3" class="form-control" placeholder="College/Workplace"></textarea>
                    @if ($errors->has('college_workplace'))
                    <span class="help-block" role="alert">
                        <strong>{{ $errors->first('college_workplace') }}</strong>
                    </span>
                    @endif
            </div>
            <div class="form-group has-feedback">
                <input type="tel" pattern="[0-9]{10}"  name="phone" id="phone" class="form-control" placeholder="Phone no." required>
                <span class="glyphicon glyphicon-phone form-control-feedback"></span>
                @if ($errors->has('phone'))
                <span class="help-block" role="alert">
                    <strong>{{ $errors->first('phone') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="number" name="age" id="age" class="form-control" placeholder="Age" required>
                @if ($errors->has('age'))
                <span class="help-block" role="alert">
                    <strong>{{ $errors->first('age') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <select name="gender" id="gender" class="form-control" required>
                    <option value="" selected disabled>---Gender---</option>
                    <option value="M">Male</option>
                    <option value="F">Female</option>
                </select>
                @if ($errors->has('gender'))
                <span class="help-block" role="alert">
                    <strong>{{ $errors->first('gender') }}</strong>
                </span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <textarea name="address" id="address" cols="30" rows="3" class="form-control" placeholder="Address" required></textarea>
                <span class="glyphicon glyphicon-home form-control-feedback"></span>
                @if ($errors->has('address'))
                <span class="help-block" role="alert">
                    <strong>{{ $errors->first('address') }}</strong>
                </span>
                @endif
            </div>
            <div class="row">
                <!-- /.col -->
                <div class="col-xs-12">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
        <a href="{{route('home')}}" class="text-center">Go Back to dashboard</a>
    </div>
    <!-- /.form-box -->
</div>
<!-- /.register-box -->
@endsection
@section('script')
<script>
    //Initialize Select2 Elements
    $('.select2').select2();
    //Date picker
    $('#datepicker').datepicker({
      autoclose: true
    });
</script>
@stop
