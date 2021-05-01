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
                            <li class="breadcrumb-item"><a href="#">About</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!-- Card stats -->
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>How Blood Type Is Determined And Why You Need To Know</h2>
            <p>Blood types are determined by the presence or absence of certain antigens – substances that can trigger
                an immune
                response if they are foreign to the body. Since some antigens can trigger a patient's immune system to
                attack the
                transfused blood, safe blood transfusions depend on careful blood typing and cross-matching. Do you know
                what blood type
                is safe for you if you need a transfusion?</p>
            <p>
                There are four major blood groups determined by the presence or absence of two antigens – A and B – on
                the surface of
                red blood cells. In addition to the A and B antigens, there is a protein called the Rh factor, which can
                be either
                present (+) or absent (–), creating the 8 most common blood types (A+, A-, B+, B-, O+, O-, AB+, AB-).
            </p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h2>Blood Types and Transfusion</h2>
            <h5>Each year 4.5 million lives are saved by blood transfusions.</h5>
            <p>
                There are very specific ways in which blood types must be matched for a safe transfusion. The right
                blood transfusion
                can mean the difference between life and death.
                Every 2 seconds someone in the US needs a blood transfusion.

                Use the interactive graphic below to learn more about matching blood types for transfusions.

                Also, Rh-negative blood is given to Rh-negative patients, and Rh-positive or Rh-negative blood may be
                given to
                Rh-positive patients. The rules for plasma are the reverse.
            </p>
            <ul class="list-group">
                <li class="list-group-item">The universal red cell donor has Type O negative blood.</li>
                <li class="list-group-item">The universal plasma donor has Type AB blood.</li>
            </ul>
            <p>
                There are more than 600 other known antigens, the presence or absence of which creates "rare blood
                types." Certain blood
                types are unique to specific ethnic or racial groups. That’s why an African-American blood donation may
                be the best hope
                for the needs of patients with sickle cell disease, many of whom are of African descent. Learn about
                blood and
                diversity.
            </p>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h2>What Is A Universal Blood Donor?</h2>
                <p>
                    Universal donors are those with an O negative blood type. Why? O negative blood can be used in
                    transfusions for any
                    blood type.

                    Type O is routinely in short supply and in high demand by hospitals – both because it is the most
                    common blood type and
                    because type O negative blood is the universal blood type needed for emergency transfusions and for
                    immune deficient
                    infants.

                    Approximately 45 percent of Caucasians are type O (positive or negative), but 51 percent of
                    African-Americans and 57
                    percent of Hispanics are type O. Minority and diverse populations, therefore, play a critical role
                    in meeting the
                    constant need for blood.

                    Types O negative and O positive are in high demand. Only 7% of the population are O negative.
                    However, the need for O
                    negative blood is the highest because it is used most often during emergencies. The need for O+ is
                    high because it is
                    the most frequently occurring blood type (37% of the population).

                    The universal red cell donor has Type O negative blood. The universal plasma donor has Type AB
                    blood. For more about
                    plasma donation, visit the plasma donation facts.
                </p>
            </div>
        </div>
        <div class="row mb-5">
            <div class="col-md-8 offset-md-2">
                <h2>How Is My Blood Type Determined?</h2>
                <p>
                    It’s inherited. Like eye color, blood type is passed genetically from your parents. Whether your
                    blood group is type A,
                    B, AB or O is based on the blood types of your mother and father.
                </p>
            </div>
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