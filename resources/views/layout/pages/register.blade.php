
<div class="container">
  <div class="row d-flex justify-content-center">
  <div class="login-form col-md-5">
    <form action="{{ route('register') }}" method="post">
    @csrf
        <h2 class="text-center">Registration Form</h2>
        <div class="form-group">
            <input name="name" class="form-control" placeholder="Name" required="required" type="text">
        </div>
        @error('name')
        <div class="alert alert-danger">
            <span>{{$message}}</span>
        </div>
        @enderror
        <div class="form-group">
            <input name="email" class="form-control" placeholder="Email" required="required" type="text" value="{{ old('email') }}">
        </div>
        @error('email')
        <div class="alert alert-danger">
            <span>{{$message}}</span>
        </div>
        @enderror
        <div class="form-group">
            <input name="password" class="form-control" placeholder="Password" required="required" type="password">
        </div>
        @error('password')
        <div class="alert alert-danger">
            <span>{{$message}}</span>
        </div>
        @enderror
        <div class="form-group">
            <input name="password_confirmation" class="form-control" placeholder="Confirm Password" required="required" type="password">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
        </div>
        <div class="clearfix">
            <a href="#" class="float-right">Forgot Password?</a>
        </div>
    </form>
    <p class="text-center"><a href="{{ route('customLogin') }}">Already have an account ?</a></p>
  </div>
</div>
