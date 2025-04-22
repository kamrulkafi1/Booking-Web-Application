{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')



    {{-- map --}}
    <div class="ms-2 map-position" style="margin-top: -25px;">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.06396725783!2d90.25487754014735!3d23.780753031632905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1745178718121!5m2!1sen!2sbd" 
      width="1500" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
    </iframe>

    </div>

    {{-- Email contact form --}}
    <div class="d-flex justify-content-end pe-5" style="margin-right: 60px">
      <div class="contac-form p-3">
        <form action="{{route('user.contactUs.store')}}" method="post">
          @csrf

          <div class="message-overlay">
            {{-- To display validation errors or success messages --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="fw-medium">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    <li class="fw-light">try again</li>
                </ul>
            </div>
            @endif
      
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
          </div>

            <div class="form-floating mb-3">
              <input type="text" name="user_name" class="form-control" id="floatingInput" placeholder="Full Name">
              <label for="floatingInput">Full Name</label>
            </div>
            <div class="form-floating mb-3">
              <input type="email" name="email" class="form-control" id="floatingInput" placeholder="name@example.com">
              <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating mb-3">
              <input type="text" name="subject" class="form-control" id="floatingInput" placeholder="Full Name">
              <label for="floatingInput">Subject</label>
            </div>
            <div class="form-floating">
              <textarea class="form-control" name="discription" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 200px"></textarea>
              <label for="floatingTextarea2">Your Massage</label>
            </div>
      
            {{-- search button --}}
            <div class="d-grid gap-2 mt-3">
              <button type="submit" class="btn btn-primary fw-bold fs-5">Send a Massage</button>
            </div>
          </form>
      </div>
    </div>
    

    {{-- details section --}}
    <div style="margin-top: 95px; margin-bottom: 100px;">
      {{-- <h2 class="mt-5">Contac Us</h2> --}}
      <div class="d-flex justify-content-start gap-5">
        <ul>
          <li><h5>Address</h5></li>
          <li><address>Dhaka, Bangladesh</address></li>
        </ul>
    
        <ul>
          <li><h5>Customer Care</h5></li>
          <li>+088 12345678</li>
        </ul>
    
        <ul>
          <li><h5>Follow Us On Social MEadia</h5></li>
          <li>
            <img src="{{ asset('image/help-tools/socialMeadia icons.svg') }}" alt="socialMeadia icon">
          </li>
        </ul>

      </div>
    </div>
    
@endsection