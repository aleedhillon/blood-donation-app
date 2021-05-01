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
                            <li class="breadcrumb-item"><a href="#">Shoutouts/create</a></li>
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
    <div class="row">
        <div class="col-md-6 offset-3">
            <form method="POST" action="{{ route('shoutouts.store') }}">
                @csrf
                <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone" name="phone" placeholder="Enter your phone here."
                        required>
                    @error('phone')
                    <div class="text-danger text-sm mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" class="form-control" id="address" name="address"
                        placeholder="Enter your address here." required>
                    @error('address')
                    <div class="text-danger text-sm mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="description">Description</label>
                    <input type="text" class="form-control" id="description" name="description"
                        placeholder="Enter your description here." required>
                    @error('description')
                    <div class="text-danger text-sm mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="city">City</label>
                    <select class="form-control" id="city" name="city" required>
                        <option disabled selected>Please select a city</option>
                        @foreach ($cities as $city)
                        <option value="{{ $city->id }}">{{ $city->name }}</option>
                        @endforeach
                    </select>
                    @error('city')
                    <div class="text-danger text-sm mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="blood">Blood</label>
                    <select class="form-control" id="blood" name="blood" required>
                        <option disabled selected>Please select a blood group</option>
                        @foreach ($bloods as $blood)
                        <option value="{{ $blood->id }}">{{ $blood->name }}</option>
                        @endforeach
                    </select>
                    @error('blood')
                    <div class="text-danger text-sm mt-1">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
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