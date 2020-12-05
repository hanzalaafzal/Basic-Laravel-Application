<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom box-shadow">
  <h5 class="my-0 mr-md-auto font-weight-normal">Company name</h5>
  <nav class="my-2 my-md-0 mr-md-3">

    <a class="p-2 text-dark" href="{{route('contact.index')}}">Contact</a>
    <a class="p-2 text-dark" href="{{route('index.index')}}">Pricing</a>
  </nav>
  @auth

  @else
  <a class="btn btn-outline-primary" href="{{route('customRegister')}}">Sign up</a>

  @endif

  @auth
    <a class="p-2 text-dark" href="{{route('customLogout')}}">Logout</a>
  @endauth
</div>
