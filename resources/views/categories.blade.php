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
                        action="/categories{{ optional($singleCategories)->id ? '/' . $singleCategories->id : '' }}{{ optional($singleCategories)->id ? '/' . Request::segment(3) : '' }}">
                        {!! optional($singleCategories)->id ? "<input type='hidden' name='_method' value='PUT' />" : '' !!}
                        @csrf
                        <!-- Patient Selection -->


                        <!-- Hydroxy Progesterone -->
                        <div class="mb-3 row">
                            <label for="category" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <input value="{{ optional($singleCategories)->category ? $singleCategories->category : '' }}"
                                    type="text" class="form-control" name="category" id="category"
                                    placeholder="Enter Category">
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="type_id" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="type_id" name="type_id">
                                    <option selected disabled value="">Select Type</option>
                                    @foreach ($allTypes as $singleType)
                                        <option
                                            {{ !empty($singleCategories->type->id) && $singleCategories->type->id == $singleType->id ? 'selected' : '' }}
                                            value="{{ $singleType->id }}">{{ $singleType->type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label for="business_id" class="col-sm-2 col-form-label">Business</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="business_id" name="business_id">
                                    <option selected disabled value="">Select Business</option>
                                    @foreach ($allBusinesses as $singleBusiness)
                                        <option
                                            {{ !empty($singleCategories->business->id) && $singleCategories->business->id == $singleBusiness->id ? 'selected' : '' }}
                                            value="{{ $singleBusiness->id }}">{{ $singleBusiness->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!-- Submit Button -->
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit"
                                    class="btn btn-primary">{{ optional($singleCategories)->id ? 'Update' : 'Add' }}</button>
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
                                        <table id="example5" class="text-fade table table-bordered" style="width:100%">
                                            <thead>
                                                <tr class="text-dark">
                                                    <th>#</th>
                                                    <th>Actions</th>
                                                    <th>Category</th>
                                                    <th>Business</th>
                                                    <th>Type</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allCategories as $index => $singleCategories)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            <a class="text-success"
                                                                href="/categories/{{ $singleCategories->id }}/edit"><i
                                                                    class="fa fa-edit"></i></a>
                                                            ----
                                                            <a class="text-danger"
                                                                href="/categories/{{ $singleCategories->id }}/delete"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                        <td> {{ $singleCategories->category ?? 'N/A' }}
                                                        </td>
                                                        <td> {{ $singleCategories->business->title ?? 'N/A' }} </td>

                                                        <td> {{ $singleCategories->type->type ?? 'N/A' }} </td>


                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Actions</th>
                                                    <th>Category</th>
                                                    <th>Business</th>
                                                    <th>Type</th>

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
