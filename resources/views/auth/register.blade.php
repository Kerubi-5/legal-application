@extends('templates.main')

@section('content')

<form method="POST" action="{{ route('register') }}">
    @csrf

    <div class="form-group">
        <label for="name">Name</label>
        <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
            aria-describedby="name" placeholder="Name" value="{{ old('name') }}">
        @error('name')
        <span class="invalid-feedback is-invalid" role="alert">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" id="email"
            aria-describedby="email" placeholder="Enter email" value="{{ old('email') }}">
        @error('email')
        <span class="invalid-feedback is-invalid" role="alert">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
            id="password" placeholder="Password">
        @error('password')
        <span class="invalid-feedback is-invalid" role="alert">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="password_confirmation">Password Confirmation</label>
        <input name="password_confirmation" type="password" class="form-control" id="password_confirmation"
            placeholder="Password">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection