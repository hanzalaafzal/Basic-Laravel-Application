<html lang="en">
@include('layout.inc.header')

</body>

@include('layout.inc.navbar')


@if(Request::is('index'))

    @include('layout.pages.price')

@elseif(Request::is('contact'))

    @include('layout.pages.contact')

@elseif(Request::is('signin'))

  @include('layout.pages.login')

@elseif(Request::is('signup'))

  @include('layout.pages.register')

@elseif(Request::is('dashboard'))
  @include('layout.pages.dashboard')

@endif

@include('layout.inc.links')


</body>


</html>
