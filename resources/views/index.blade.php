<!DOCTYPE html>
<html lang="en">

@include('includes.head')
@php
    $user = Auth::user();

    // Check if the user role is 'Cashier'
    if ($user && $user->role === 'Cashier') {
        // Redirect to the "/cashiers" route
        header('Location: /cashiers');
        exit();
    }
@endphp

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">


        @include('includes.navbar')

        @include('includes.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md">
                            <div class="box"
                                style="background: url(/assets/images/svg-icon/banner.svg); background-size: cover; background-position: center;">
                                <div class="box-body p-20">
                                    <h2 class="mt-0 text-white fw-600">Welcome Back, {{ auth()->user()->name }}!</h2>
                                    {{-- <p class="m-0 text-white">Here are your important task, Updates and alerts.</p>
                                    <p class="text-white" style="margin-bottom: 0.5px;">You can set your in app
                                        preferences here.</p> --}}
                                </div>
                            </div>
                        </div>

                    </div>
                    {{-- <div class="row">
                        <div class="col-xxl-3 col-lg-6">
                            <div class="box pull-up">
                                <div class="box-header b-0 pb-0 d-flex justify-content-between align-items-center">
                                    <h6 class="box-title">Patients</h6>
                                </div>
                                <div class="box-body py-10">
                                    <div class="d-flex align-items-center">
                                        <div class="d-flex align-items-center">
                                            <p class="text-fade mb-5"></p>
                                            <h2 class="my-0 fw-600">{{ $patients }}</h2>
                                        </div>
                                    </div>

                                    <div class="progress my-20" role="progressbar" aria-label="Patients Progress"
                                        aria-valuenow="{{ $progressPercentage }}" aria-valuemin="0" aria-valuemax="100">
                                        <div class="progress-bar bg-primary" style="width: {{ $progressPercentage }}%;">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </section>
                <!-- /.content -->
            </div>
        </div>
        <!-- /.content-wrapper -->

        @include('includes.footer')

    </div>
    <!-- ./wrapper -->




    @include('includes.javascript')





</body>


</html>
