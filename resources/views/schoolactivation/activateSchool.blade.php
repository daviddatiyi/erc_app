@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Update School Profile</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        
                        <div class="form-group row">
                            <lable class="col-md-4">Year: <b>2022</b> </lable>
                            <lable class="col-md-4">Area Name: <b>Jos South</b></lable>
                            <lable class="col-md-4">School Name: <b>GSS Vwang</b></lable>
                        </div>
                        

                        @csrf   
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="location" class="col-md-4 col-form-label text-md-right">{{ __('School Location') }}</label>

                            <div class="col-md-6">
                                <input id="location" type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}"  autocomplete="location" autofocus>

                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="proprietor" class="col-md-4 col-form-label text-md-right">{{ __('Proprietor') }}</label>

                            <div class="col-md-6">
                                <input id="proprietor" type="text" class="form-control @error('proprietor') is-invalid @enderror" name="proprietor" value="{{ old('proprietor') }}"  autocomplete="proprietor" autofocus>

                                @error('proprietor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="SchoolNumber" class="col-md-4 col-form-label text-md-right">{{ __('School Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="SchoolNumber" type="text" class="form-control @error('SchoolNumber') is-invalid @enderror" name="SchoolNumber" value="{{ old('SchoolNumber') }}"  autocomplete="SchoolNumber" autofocus>

                                @error('SchoolNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="principalName" class="col-md-4 col-form-label text-md-right">{{ __('Principal Name') }}</label>

                            <div class="col-md-6">
                                <input id="principalName" type="text" class="form-control @error('principalName') is-invalid @enderror" name="principalName" value="{{ old('principalName') }}"  autocomplete="principalName" autofocus>

                                @error('principalName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="principalNumber" class="col-md-4 col-form-label text-md-right">{{ __('Principal Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="principalNumber" type="text" class="form-control @error('principalNumber') is-invalid @enderror" name="principalNumber" value="{{ old('principalNumber') }}"  autocomplete="principalNumber" autofocus>

                                @error('principalNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="examOfficerName" class="col-md-4 col-form-label text-md-right">{{ __('Exam Officer Name') }}</label>

                            <div class="col-md-6">
                                <input id="examOfficerName" type="text" class="form-control @error('examOfficerName') is-invalid @enderror" name="examOfficerName" value="{{ old('examOfficerName') }}"  autocomplete="examOfficerName" autofocus>

                                @error('examOfficerName')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="examOfficerNumber" class="col-md-4 col-form-label text-md-right">{{ __('Exam Officer Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="examOfficerNumber" type="text" class="form-control @error('examOfficerNumber') is-invalid @enderror" name="examOfficerNumber" value="{{ old('examOfficerNumber') }}"  autocomplete="examOfficerNumber" autofocus>

                                @error('examOfficerNumber')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  autocomplete="new-password">

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
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"  autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Save Profile') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
