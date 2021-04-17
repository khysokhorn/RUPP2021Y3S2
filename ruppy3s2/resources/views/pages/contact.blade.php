@extends('layouts.app')

@section('content')
  <div class="col-lg-8 col-md-10 mx-auto">
    <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>

    @if(empty($success))
      <form action="{{ route('forms.contact_submit') }}" method="POST">
        @csrf
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Name</label>
            <input type="text" class="form-con trol" placeholder="Name" name="name" required value="{{ old('name') }}">
            @if($errors->has('name'))
              <p class="help-block text-danger">Name is required!</p>
            @endif
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Email Address" name="email" required value="{{ old('email') }}">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Phone Number</label>
            <input type="tel" class="form-control" placeholder="Phone Number" name="phone" value="{{ old('phone') }}">
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <div class="control-group">
          <div class="form-group floating-label-form-group controls">
            <label>Message</label>
            <textarea rows="5" class="form-control" placeholder="Message" name="message" required>{{ old('message') }}</textarea>
            <p class="help-block text-danger"></p>
          </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Send</button>
      </form>
    @else
      <p>Thanks for your submission. We will contact you soon !!!</p>
    @endif
  </div>
@endsection