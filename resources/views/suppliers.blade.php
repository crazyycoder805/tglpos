<!DOCTYPE html>
<html lang="en">
@include('includes.head')


<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">



        @include('includes.navbar')

        @include('includes.sidebar')
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="container-full">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="d-flex align-items-center">
                        <div class="me-auto">
                            <h4 class="page-title">Dashboard</h4>
                            <div class="d-inline-block align-items-center">
                                <nav>
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#"><i
                                                    class="mdi mdi-home-outline"></i></a></li>

                                        @if (session()->has('previous_route'))
                                            <li class="breadcrumb-item" aria-current="page">
                                                {{ session('previous_route') }}
                                            </li>
                                        @endif

                                        <li class="breadcrumb-item active" aria-current="page">
                                            {{ session('current_route') }}
                                        </li>

                                    </ol>
                                </nav>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Main content -->
                <section class="content">
                    <div class="row">
                        <div class="col-md">
                            <!-- Display success message -->
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible fade show text-dark" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif

                            <!-- Display error message -->
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible fade show text-dark" role="alert">
                                    {{ session('error') }}
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                            <!-- Display validation errors -->
                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible fade show text-dark" role="alert">
                                    <ul class="mb-0">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                            @endif
                        </div>
                    </div>
                    <form method="post"
                        action="/suppliers{{ optional($singleSuppliers)->id ? '/' . $singleSuppliers->id : '' }}{{ optional($singleSuppliers)->id ? '/' . Request::segment(3) : '' }}">
                        {!! optional($singleSuppliers)->id ? "<input type='hidden' name='_method' value='PUT' />" : '' !!}
                        @csrf

                        <!-- Name -->
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input value="{{ optional($singleSuppliers)->name ? $singleSuppliers->name : '' }}"
                                    type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter Name">
                            </div>
                        </div>

                        <!-- Opening Balance -->
                        <div class="mb-3 row">
                            <label for="opening_balance" class="col-sm-2 col-form-label">Opening Balance</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleSuppliers)->opening_balance ? $singleSuppliers->opening_balance : '' }}"
                                    type="number" step="0.01" class="form-control" name="opening_balance"
                                    id="opening_balance" placeholder="Enter Opening Balance">
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="mb-3 row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleSuppliers)->address ? $singleSuppliers->address : '' }}"
                                    type="text" class="form-control" name="address" id="address"
                                    placeholder="Enter Address">
                            </div>
                        </div>

                        <!-- Phone Office -->
                        <div class="mb-3 row">
                            <label for="phone_office" class="col-sm-2 col-form-label">Phone Office</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleSuppliers)->phone_office ? $singleSuppliers->phone_office : '' }}"
                                    type="text" class="form-control" name="phone_office" id="phone_office"
                                    placeholder="Enter Phone Office">
                            </div>
                        </div>

                        <!-- City -->
                        <div class="mb-3 row">
                            <label for="city" class="col-sm-2 col-form-label">City</label>
                            <div class="col-sm-10">
                                <input value="{{ optional($singleSuppliers)->city ? $singleSuppliers->city : '' }}"
                                    type="text" class="form-control" name="city" id="city"
                                    placeholder="Enter City">
                            </div>
                        </div>

                        <!-- Tax No -->
                        <div class="mb-3 row">
                            <label for="tax_no" class="col-sm-2 col-form-label">Tax No</label>
                            <div class="col-sm-10">
                                <input value="{{ optional($singleSuppliers)->tax_no ? $singleSuppliers->tax_no : '' }}"
                                    type="text" class="form-control" name="tax_no" id="tax_no"
                                    placeholder="Enter Tax No">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit"
                                    class="btn btn-primary">{{ optional($singleSuppliers)->id ? 'Update' : 'Add' }}</button>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">Individual column searching</h4>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example5" class="text-fade table table-bordered"
                                            style="width:100%">
                                            <thead>
                                                <tr class="text-dark">
                                                    <th>#</th>
                                                    <th>Actions</th>
                                                    <th>Name</th>
                                                    <th>OpeningBalance</th>
                                                    <th>Address</th>
                                                    <th>PhoneOffice</th>
                                                    <th>City</th>
                                                    <th>TaxNo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allSuppliers as $index => $singleSuppliers)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            <a class="text-success"
                                                                href="/suppliers/{{ $singleSuppliers->id }}/edit"><i
                                                                    class="fa fa-edit"></i></a>
                                                            ----
                                                            <a class="text-danger"
                                                                href="/suppliers/{{ $singleSuppliers->id }}/delete"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                        <td>{{ $singleSuppliers->name ?? 'N/A' }}</td>
                                                        <td>{{ $singleSuppliers->opening_balance ?? 'N/A' }}</td>
                                                        <td>{{ $singleSuppliers->address ?? 'N/A' }}</td>
                                                        <td>{{ $singleSuppliers->phone_office ?? 'N/A' }}</td>
                                                        <td>{{ $singleSuppliers->city ?? 'N/A' }}</td>
                                                        <td>{{ $singleSuppliers->tax_no ?? 'N/A' }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Actions</th>
                                                    <th>Name</th>
                                                    <th>OpeningBalance</th>
                                                    <th>Address</th>
                                                    <th>PhoneOffice</th>
                                                    <th>City</th>
                                                    <th>TaxNo</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <!-- /.row -->
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
