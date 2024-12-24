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
                        action="/services{{ optional($singleServices)->id ? '/' . $singleServices->id : '' }}{{ optional($singleServices)->id ? '/' . Request::segment(3) : '' }}">
                        {!! optional($singleServices)->id ? "<input type='hidden' name='_method' value='PUT' />" : '' !!}
                        @csrf
                        <!-- Barcode -->
                        <div class="mb-3 row">
                            <label for="barcode" class="col-sm-2 col-form-label">Barcode</label>
                            <div class="col-sm-10">
                                <input value="{{ optional($singleServices)->barcode ? $singleServices->barcode : '' }}"
                                    type="text" class="form-control" name="barcode" id="barcode"
                                    placeholder="Enter Barcode">
                            </div>
                        </div>



                        <!-- Sale Rate -->
                        <div class="mb-3 row">
                            <label for="sale_rate" class="col-sm-2 col-form-label">Sale Rate</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleServices)->sale_rate ? $singleServices->sale_rate : '' }}"
                                    type="number" step="0.01" class="form-control" name="sale_rate" id="sale_rate"
                                    placeholder="Enter Sale Rate">
                            </div>
                        </div>
                        <!-- Department -->
                        <div class="mb-3 row">
                            <label for="department" class="col-sm-2 col-form-label">Department</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="department" name="department">
                                    <option selected disabled value="">Select Department</option>
                                    <option value="Gents Section"
                                        {{ !empty($singleServices->department) && $singleServices->department == 'Gents Section' ? 'selected' : '' }}>
                                        Gents Section
                                    </option>
                                    <option value="Women Section"
                                        {{ !empty($singleServices->department) && $singleServices->department == 'Women Section' ? 'selected' : '' }}>
                                        Women Section
                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- Name -->
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input value="{{ optional($singleServices)->name ? $singleServices->name : '' }}"
                                    type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter Name">
                            </div>
                        </div>

                        <!-- Cost Without Tax -->
                        <div class="mb-3 row">
                            <label for="cost_without_tax" class="col-sm-2 col-form-label">Cost Without Tax</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleServices)->cost_without_tax ? $singleServices->cost_without_tax : '' }}"
                                    type="number" step="0.01" class="form-control" name="cost_without_tax"
                                    id="cost_without_tax" placeholder="Enter Cost Without Tax">
                            </div>
                        </div>
                        <!-- Description -->
                        <div class="mb-3 row">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleServices)->description ? $singleServices->description : '' }}"
                                    type="text" class="form-control" name="description" id="description"
                                    placeholder="Enter Description">
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit"
                                    class="btn btn-primary">{{ optional($singleServices)->id ? 'Update' : 'Add' }}</button>
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
                                                    <th>Barcode</th>
                                                    <th>Description</th>
                                                    <th>SaleRate</th>
                                                    <th>Department</th>
                                                    <th>Name</th>
                                                    <th>CostWithoutTax</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allServices as $index => $singleServices)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            <a class="text-success"
                                                                href="/services/{{ $singleServices->id }}/edit"><i
                                                                    class="fa fa-edit"></i></a>
                                                            ----
                                                            <a class="text-danger"
                                                                href="/services/{{ $singleServices->id }}/delete"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                        <td>{{ $singleServices->barcode ?? 'N/A' }}</td>
                                                        <td>{{ $singleServices->description ?? 'N/A' }}</td>
                                                        <td>{{ $singleServices->sale_rate ?? 'N/A' }}</td>
                                                        <td>{{ $singleServices->department ?? 'N/A' }}</td>
                                                        <td>{{ $singleServices->name ?? 'N/A' }}</td>
                                                        <td>{{ $singleServices->cost_without_tax ?? 'N/A' }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Actions</th>
                                                    <th>Barcode</th>
                                                    <th>Description</th>
                                                    <th>SaleRate</th>
                                                    <th>Department</th>
                                                    <th>Name</th>
                                                    <th>CostWithoutTax</th>
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
