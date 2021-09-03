@extends('templates.main')

@section('content')
<div class="container mt-5">
    <ul class="nav nav-tabs">
        <li class="nav-item"><a data-bs-toggle="tab" href="#client" class="nav-link">Client</a></li>
        <li class="nav-item"><a data-bs-toggle="tab" href="#lawyer" class="nav-link">Lawyer</a></li>
    </ul>
    <div class="tab-content">
        <!-- User -->
        <div class="tab-pane active" id="client">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        aria-describedby="name">
                    @error('name')
                    <span class="invalid-feedback is-invalid" role="alert">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" aria-describedby="email">
                    @error('email')
                    <span class="invalid-feedback is-invalid" role="alert">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        id="password">
                    @error('password')
                    <span class="invalid-feedback is-invalid" role="alert">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                </div>

                <input name="individual_type" type="text" value="client" hidden>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        <!-- Lawyer -->
        <div class="tab-pane" id="lawyer">
            <form action="POST">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input name="name" type="text" class="form-control @error('name') is-invalid @enderror" id="name"
                        aria-describedby="name">
                    @error('name')
                    <span class="invalid-feedback is-invalid" role="alert">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input name="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        id="email" aria-describedby="email">
                    @error('email')
                    <span class="invalid-feedback is-invalid" role="alert">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input name="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        id="password">
                    @error('password')
                    <span class="invalid-feedback is-invalid" role="alert">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm Password</label>
                    <input name="password_confirmation" type="password" class="form-control" id="password_confirmation">
                </div>
                <div class="mb-3">
                    <label for="formFileMultiple" class="form-label">Input the following files for verification</label>
                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                </div>

                <input name="individual_type" type="text" value="lawyer" hidden>

                <button type="submit" class="btn btn-primary">Register</button>
            </form>

            </form>
        </div>
    </div>
</div>



@endsection