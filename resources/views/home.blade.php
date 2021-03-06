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
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
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
    @if (session()->has('msg'))
    <div class="row" id="alert">
        <div class="col-md-6 offset-3">
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        </div>
    </div>
    @endif
    <div class="row mt-5 mb-5">
        <div class="col-md-8 offset-md-2">
            <form method="GET" action="{{ route('home') }}">
                <div class="form-row">
                    <div class="col">
                        <select class="form-control" id="city" name="city" required>
                            <option disabled selected>Please select a city</option>
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}" @if($city->id == $city_id) selected @endif>{{ $city->name }}
                            </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <select class="form-control" id="blood" name="blood" required>
                            <option disabled selected>Please select a blood group</option>
                            @foreach ($bloods as $blood)
                            <option value="{{ $blood->id }}" @if($blood->id == $blood_id) selected
                                @endif>{{ $blood->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col">
                        <input type="submit" class="btn btn-success" value="Search">
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="row">
        @forelse ($donors as $donor)
        {{-- Card Start --}}
        <div class="col-xl-4 order-xl-2">
            <div class="card card-profile">
                <img src="../assets/img/theme/img-1-1000x600.jpg" alt="Image placeholder" class="card-img-top">
                <div class="row justify-content-center">
                    <div class="col-lg-3 order-lg-2">
                        <div class="card-profile-image">
                            <a href="#">
                                <img src="{{ asset('assets/img/theme/team-4.jpg') }}" class="rounded-circle">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
                    <div class="d-flex justify-content-between">
                        <a href="tel:{{ $donor->phone }}" class="btn btn-sm btn-info  mr-4 ">
                            Call <i class="fa fa-phone-square"></i>
                        </a>
                        <a href="https://wa.me/{{ $donor->phone }}" class="btn btn-sm btn-primary float-right">
                            Whatsapp <i class="ni ni-badge"></i>
                        </a>
                    </div>
                </div>
                <div class="card-body pt-0">
                    <div class="row">
                        <div class="col">
                            <div class="card-profile-stats d-flex justify-content-center">
                                <div>
                                    <span class="heading">{{ $donor->blood->name }}</span>
                                    <span class="description">Blood Type</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <h5 class="h3">
                            {{ $donor->name }}<span class="font-weight-light">, {{ $donor->age }}</span>
                        </h5>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{ $donor->email }}
                        </div>
                        <div>
                            <i class="ni education_hat mr-2"></i>{{ $donor->phone }}
                        </div>
                        <div class="h5 font-weight-300">
                            <i class="ni location_pin mr-2"></i>{{ $donor->city->name }}
                        </div>
                        <div class="h5 mt-4">
                            <i class="ni business_briefcase-24 mr-2"></i>{{ $donor->bio }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @empty
        <div class="col-xl-12">
            <p class="text-center">No donors yet.</p>
        </div>
        {{-- Card End --}}
        @endforelse
    </div>
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