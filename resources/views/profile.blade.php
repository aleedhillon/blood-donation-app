@extends('layouts.app')

@section('content')
<div class="header d-flex align-items-center"
    style="min-height: 500px; background-image: url(../assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
    <!-- Mask -->
    <span class="mask bg-gradient-default opacity-8"></span>
    <!-- Header container -->
    <div class="container-fluid d-flex align-items-center">
        <div class="row">
            <div class="col-lg-7 col-md-6">
                <h1 class="display-2 text-white">{{ $user->name }}</h1>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--200">
    <div class="row">
        <div class="col-xl-8 order-xl-1">
            <div class="card">
                <div class="card-header">
                    <div class="row align-items-center">
                        <div class="col-8">
                            <h3 class="mb-0">Edit profile </h3>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('profile.update') }}">
                        @csrf
                        <h6 class="heading-small text-muted mb-4">User information</h6>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="input-username">Name</label>
                                        <input type="text" id="name" name="name" class="form-control"
                                            placeholder="enter name here" value="{{ old('name', $user->name) }}">
                                        @error('name')
                                        <div class="text-danger text-sm mt-1">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control"
                                            placeholder="email" value="{{ old('email', $user->email) }}">
                                        @error('email')
                                        <div class="text-danger text-sm mt-1">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control"
                                            placeholder="password">
                                        @error('password')
                                        <div class="text-danger text-sm mt-1">
                                            {{ $message }}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label class="form-control-label" for="password_confirmation">Confirm
                                            Passowrd</label>
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            class="form-control" placeholder="password confirmation">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </div>
                        <hr class="my-4" />
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-muted">
                    &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1"
                        target="_blank">Creative
                        Tim</a>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="nav nav-footer justify-content-center justify-content-lg-end">
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About
                            Us</a>
                    </li>
                    <li class="nav-item">
                        <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md"
                            class="nav-link" target="_blank">MIT License</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
</div>
@endsection