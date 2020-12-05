<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
@extends('layout.inc.footer')
@section('links')
<script
			  src="https://code.jquery.com/jquery-3.5.1.min.js"
			  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
			  crossorigin="anonymous"></script>
<script src="{{ asset('templateAssets/js/popper.min.js') }}"></script>
<script src="{{ asset('templateAssets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('templateAssets/js/holder.min.js') }}"></script>
<script src="{{ asset('templateAssets/js/customJS.js') }}"></script>
<script>
      Holder.addTheme('thumb', {
        bg: '#55595c',
        fg: '#eceeef',
        text: 'Thumbnail'
      });
</script>
@endsection('links')
