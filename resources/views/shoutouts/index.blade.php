@extends('layouts.app')

@section('content')
<div class="header bg-primary pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Shoutouts</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Card stats -->
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    @foreach ($shoutouts as $shoutout)
    <div class="row">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-md-6">
                            Blood Group: <span class="text-danger">{{ $shoutout->blood->name }}</span>
                        </div>
                        <div class="col-md-6 text-right">
                            City: {{ $shoutout->city->name }}
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Phone: {{ $shoutout->phone }}</h5>
                    <p class="card-text">{{ $shoutout->description }}</p>
                    <p class="card-text">Address: {{ $shoutout->specific_address }}</p>
                    <a href="tel:{{ $shoutout->phone }}" class="btn btn-primary">
                        Call <i class="fa fa-phone-square"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <!-- Footer -->
    <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
            <div class="col-lg-6">
                <div class="copyright text-center  text-lg-left  text-muted">
                    &copy; {{ now()->year }} <a href="/" class="font-weight-bold ml-1" target="_blank">Blood
                        Donation</a>
                </div>
            </div>
        </div>
    </footer>
</div>
@endsection