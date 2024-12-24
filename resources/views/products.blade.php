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
                        action="/products{{ optional($singleProducts)->id ? '/' . $singleProducts->id : '' }}{{ optional($singleProducts)->id ? '/' . Request::segment(3) : '' }}">
                        {!! optional($singleProducts)->id ? "<input type='hidden' name='_method' value='PUT' />" : '' !!}
                        @csrf

                        <!-- Batch No -->
                        <div class="mb-3 row">
                            <label for="batch_no" class="col-sm-2 col-form-label">Batch No</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleProducts)->batch_no ? $singleProducts->batch_no : '' }}"
                                    type="text" class="form-control" name="batch_no" id="batch_no"
                                    placeholder="Enter Batch No">
                            </div>
                        </div>

                        <!-- Product Name -->
                        <div class="mb-3 row">
                            <label for="product_name" class="col-sm-2 col-form-label">Product Name</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleProducts)->product_name ? $singleProducts->product_name : '' }}"
                                    type="text" class="form-control" name="product_name" id="product_name"
                                    placeholder="Enter Product Name">
                            </div>
                        </div>

                        <!-- Cost Price -->
                        <div class="mb-3 row">
                            <label for="cost_price" class="col-sm-2 col-form-label">Cost Price</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleProducts)->cost_price ? $singleProducts->cost_price : '' }}"
                                    type="number" step="0.01" class="form-control" name="cost_price" id="cost_price"
                                    placeholder="Enter Cost Price">
                            </div>
                        </div>

                        <!-- Sale Price -->
                        <div class="mb-3 row">
                            <label for="sale_price" class="col-sm-2 col-form-label">Sale Price</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleProducts)->sale_price ? $singleProducts->sale_price : '' }}"
                                    type="number" step="0.01" class="form-control" name="sale_price" id="sale_price"
                                    placeholder="Enter Sale Price">
                            </div>
                        </div>

                        <!-- Quantity -->
                        <div class="mb-3 row">
                            <label for="quantity" class="col-sm-2 col-form-label">Quantity</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleProducts)->quantity ? $singleProducts->quantity : '' }}"
                                    type="number" class="form-control" name="quantity" id="quantity"
                                    placeholder="Enter Quantity">
                            </div>
                        </div>

                        <!-- Packing Size -->
                        <div class="mb-3 row">
                            <label for="packing_size" class="col-sm-2 col-form-label">Packing Size</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleProducts)->packing_size ? $singleProducts->packing_size : '' }}"
                                    type="text" class="form-control" name="packing_size" id="packing_size"
                                    placeholder="Enter Packing Size">
                            </div>
                        </div>

                        <!-- Reorder Level -->
                        <div class="mb-3 row">
                            <label for="reorder_level" class="col-sm-2 col-form-label">Reorder Level</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleProducts)->reorder_level ? $singleProducts->reorder_level : '' }}"
                                    type="number" class="form-control" name="reorder_level" id="reorder_level"
                                    placeholder="Enter Reorder Level">
                            </div>
                        </div>

                        <!-- Section -->
                        <div class="mb-3 row">
                            <label for="section_id" class="col-sm-2 col-form-label">Section</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="section_id" name="section_id">
                                    <option selected disabled value="">Select Section</option>
                                    @foreach ($allSections as $singleSection)
                                        <option
                                            {{ !empty($singleProducts->section->id) && $singleProducts->section->id == $singleSection->id ? 'selected' : '' }}
                                            value="{{ $singleSection->id }}">{{ $singleSection->section_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Expiry Date -->
                        <div class="mb-3 row">
                            <label for="expiry_date" class="col-sm-2 col-form-label">Expiry Date</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleProducts)->expiry_date ? $singleProducts->expiry_date : '' }}"
                                    type="date" class="form-control" name="expiry_date" id="expiry_date"
                                    placeholder="Enter Expiry Date">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit"
                                    class="btn btn-primary">{{ optional($singleProducts)->id ? 'Update' : 'Add' }}</button>
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
                                                    <th>BatchNo</th>
                                                    <th>ProductName</th>
                                                    <th>CostPrice</th>
                                                    <th>SalePrice</th>
                                                    <th>Quantity</th>
                                                    <th>PackingSize</th>
                                                    <th>ReorderLevel</th>
                                                    <th>Section</th>
                                                    <th>ExpiryDate</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allProducts as $index => $singleProducts)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            <a class="text-success"
                                                                href="/products/{{ $singleProducts->id }}/edit"><i
                                                                    class="fa fa-edit"></i></a>
                                                            ----
                                                            <a class="text-danger"
                                                                href="/products/{{ $singleProducts->id }}/delete"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                        <td>{{ $singleProducts->batch_no ?? 'N/A' }}</td>
                                                        <td>{{ $singleProducts->product_name ?? 'N/A' }}</td>
                                                        <td>{{ $singleProducts->cost_price ?? 'N/A' }}</td>
                                                        <td>{{ $singleProducts->sale_price ?? 'N/A' }}</td>
                                                        <td>{{ $singleProducts->quantity ?? 'N/A' }}</td>
                                                        <td>{{ $singleProducts->packing_size ?? 'N/A' }}</td>
                                                        <td>{{ $singleProducts->reorder_level ?? 'N/A' }}</td>
                                                        <td>{{ $singleProducts->section->section_name ?? 'N/A' }}</td>
                                                        <td>{{ $singleProducts->expiry_date ?? 'N/A' }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Actions</th>
                                                    <th>BatchNo</th>
                                                    <th>ProductName</th>
                                                    <th>CostPrice</th>
                                                    <th>SalePrice</th>
                                                    <th>Quantity</th>
                                                    <th>PackingSize</th>
                                                    <th>ReorderLevel</th>
                                                    <th>Section</th>
                                                    <th>ExpiryDate</th>
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
