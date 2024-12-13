@extends('frontend.layout.app')
@section('content')

<div class="thank-you-page" style="text-align: center; margin-top:20px ">
    <img src="{{asset('frontend/assets/img/thankyou.jpg')}}"/>
    <p>Your submission was successful. You will be redirected shortly.</p>
    <a href="{{ url('/') }}" class="btn btn-primary" style="margin-top: 20px;">Back to Home</a>
</div>

<script>
    // Redirect to home after 5 seconds
    setTimeout(function() {
        window.location.href = "{{ url('/') }}";
    }, 5000);
</script>
@endsection