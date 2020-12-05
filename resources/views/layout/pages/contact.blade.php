<div class="container">
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">


            {!! Form::open(['url'=> '/contact']) !!}

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">

                          {{Form::text('name','',['class'=>'form-control','placeholder'=>'Enter Your Name'])}}
                          {{Form::label('name','Name')}}
                          @error('name')
                          <div class="alert alert-danger">
                              <span>{{$message}}</span>
                          </div>
                          @enderror
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                          {{ Form::text('email','',['class'=>'form-control','placeholder'=>'test@test.com'])}}
                          {{ Form::label('email','Email-Address')}}
                          @error('email')
                          <div class="alert alert-danger">
                              <span>{{$message}}</span>
                          </div>
                          @enderror
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                          {{ Form::text('subject','',['class'=>'form-control','placeholder'=>'Your Subject here'])}}
                          {{ Form::label('subject','Subject')}}
                          @error('subject')
                          <div class="alert alert-danger">
                              <span>{{$message}}</span>
                          </div>
                          @enderror
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                          {{Form::textarea('message','',['class'=>'form-control md-textarea','placeholder'=>'Enter Your Message Here'])}}
                          {{Form::label('message','Message')}}
                          @error('message')
                          <div class="alert alert-danger">
                              <span>{{$message}}</span>
                          </div>
                          @enderror
                        </div>

                    </div>
                </div>
                <!--Grid row-->

                  {{Form::submit('Submit',['class'=>'btn btn-primary'])}}


            {!! Form::close() !!}


            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>San Francisco, CA 94126, USA</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>contact@mdbootstrap.com</p>
                </li>
            </ul>
        </div>

        @if(session('success'))

            <div class="col-md-12">

                <div class="alert alert-success">
                <span>  {{ session('success') }} </span>
                </div>

            </div>

        @elseif(session('fail'))
        <div class="col-md-12">

            <div class="alert alert-fail">
            <span>  {{ session('fail') }} </span>
            </div>

        </div>

        @endif

        <!--Grid column-->

    </div>

</section>
