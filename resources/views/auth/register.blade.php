@extends('layouts.app')

@section('content')
    <div class="text-box-2">

    <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-header">
                <div class="card-header" ><h1>{{ __('Register') }}</h1></div>
                <br>

                <div  >
                    <form  method="POST" action="{{ route('register') }}" autocomplete="on">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" placeholder = "Full Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder = "E-Mail Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" placeholder = "Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" placeholder = "Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">

                        <label for="phone_num" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number ') }}</label>

                            <div class="col-md-6">


                                <input type="tel" name = "phone_num" placeholder = "07*********"  class="form-control"  pattern="[0-9]{10}"   required >


                            </div>

                        </div>
                        <div class="form-group row">
                            <label for="n_id" class="col-md-4 col-form-label text-md-right"   >{{ __('NID') }}</label>

                            <div class="col-md-6">
                                <input name="n_id" type="text" name = "n_id" placeholder="National ID" pattern="[0-9]{10}"    class="form-control"  required >

                            </div>
                        </div>
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="hero-btn">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection
