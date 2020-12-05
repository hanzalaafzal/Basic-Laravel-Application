
<div class="container">
  <div class="row d-flex justify-content-center">
  <div class="login-form col-md-5">
    @if(session('registered'))
    <div class="alert alert-success text-center">
      <span>{{session('registered')}}</span>
    </div>
    @endif
    <form action="{{ route('login') }}" method="post">
    @csrf
        <h2 class="text-center">Log in</h2>
        <div class="form-group">
            <input name="email" class="form-control" placeholder="Email" required="required" type="text" value="{{ old('email') }}">
        </div>
        @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="form-group">
            <input name="password" class="form-control" placeholder="Password" required="required" type="password">
        </div>
        @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
        @enderror
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Log in</button>
        </div>
        <div class="clearfix">
            <label class="float-left form-check-label"><input type="checkbox"> Remember me</label>
            <a href="#" class="float-right">Forgot Password?</a>
        </div>
    </form>
    <p class="text-center"><a href="{{ route('customRegister') }}">Create an Account</a></p>
  </div>
</div>
