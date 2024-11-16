@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <!-- Account Form -->
                    <form action="{{ route('register') }}"  method="POST">
                        @csrf
                        <div class="input-block mb-4">
                            <label class="col-form-label">{{ __('Name') }}<span class="mandatory">*</span></label>
                            <input  type="text" class="form-control   @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="input-block mb-4">
                            <label class="col-form-label">{{ __('Email Address') }}<span class="mandatory">*</span></label>
                            <input class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" type="email">
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>
                        <div class="input-block mb-4">
                            <label class="col-form-label">{{ __('Password') }}<span class="mandatory">*</span></label>
                            <input class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" type="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>


                        <div class="input-block mb-4">
                            <label class="col-form-label">{{ __('Confirm Password') }}<span class="mandatory">*</span></label>
                            <input class="form-control" name="password_confirmation" required autocomplete="new-password" type="password">
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        </div>

                        <div class="input-block mb-4 text-center">
                            <button class="btn btn-primary account-btn" type="submit"> {{ __('Register') }}</button>
                        </div>
                        <div class="account-footer">
                            <p>Already have an account? <a href="index.html">Login</a></p>
                        </div>
                    </form>
                    <!-- /Account Form -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


