@extends('include.master')
@section('title','Edit User')
@section('body')

<h2>Edit User Details</h2><br />
    <form method="post" action="{{action ('UserController@update', $id) }}">
      @csrf
      <input name="_method" type="hidden" value="PATCH">
      <div class="row mb-3">
            <label for="firstName" class="col-md-4 col-form-label text-md-end">{{ __('First Name') }}</label>

            <div class="col-md-6">
                <input id="firstName" type="text" class="form-control @error('firstName') is-invalid @enderror" name="firstName" value="{{ $users->firstName }}" required autocomplete="firstName">

                @error('firstName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="lastName" class="col-md-4 col-form-label text-md-end">{{ __('Last Name') }}</label>

            <div class="col-md-6">
                <input id="lastName" type="text" class="form-control @error('lastName') is-invalid @enderror" name="lastName" value="{{ $users->lastName }}" required autocomplete="lastName">

                @error('lastName')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="contactNo" class="col-md-4 col-form-label text-md-end">{{ __('Contact No') }}</label>

            <div class="col-md-6">
                <input id="contactNo" type="text" class="form-control @error('contactNo') is-invalid @enderror" name="contactNo" value="{{ $users->contactNo }}" required autocomplete="contactNo">

                @error('contactNo')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <div class="row mb-3">
            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email') }}</label>

            <div class="col-md-6">
                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $users->email }}" required autocomplete="email">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>      
      <div class="row mb-0">
            <div class="col-md-6 offset-md-4">
                <button type="submit" class="btn btn-primary">
                    {{ __('Update') }}
                </button>
            </div>
        </div>
    </form>

@endsection