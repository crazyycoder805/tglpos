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
                        action="/sub-categories{{ optional($singleSubCategories)->id ? '/' . $singleSubCategories->id : '' }}{{ optional($singleSubCategories)->id ? '/' . Request::segment(3) : '' }}">
                        {!! optional($singleSubCategories)->id ? "<input type='hidden' name='_method' value='PUT' />" : '' !!}
                        @csrf

                        <!-- Sub Category -->
                        <div class="mb-3 row">
                            <label for="category_id" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="category_id" name="category_id">
                                    <option selected disabled value="">Select Category</option>
                                    @foreach ($allCategories as $singleCategories)
                                        <option
                                            {{ !empty($singleSubCategories->category->id) && $singleSubCategories->category->id == $singleCategories->id ? 'selected' : '' }}
                                            value="{{ $singleCategories->id }}">{{ $singleCategories->category }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <!-- Business -->
                        <div class="mb-3 row">
                            <label for="business_id" class="col-sm-2 col-form-label">Business</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="business_id" name="business_id">
                                    <option selected disabled value="">Select Business</option>
                                    @foreach ($allBusinesses as $singleBusiness)
                                        <option
                                            {{ !empty($singleSubCategories->business->id) && $singleSubCategories->business->id == $singleBusiness->id ? 'selected' : '' }}
                                            value="{{ $singleBusiness->id }}">{{ $singleBusiness->title }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Type -->
                        <div class="mb-3 row">
                            <label for="type_id" class="col-sm-2 col-form-label">Type</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="type_id" name="type_id">
                                    <option selected disabled value="">Select Type</option>
                                    @foreach ($allTypes as $singleType)
                                        <option
                                            {{ !empty($singleSubCategories->type->id) && $singleSubCategories->type->id == $singleType->id ? 'selected' : '' }}
                                            value="{{ $singleType->id }}">{{ $singleType->type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- sub_category -->
                        <div class="mb-3 row">
                            <label for="sub_category" class="col-sm-2 col-form-label">Sub Category</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleSubCategories)->sub_category ? $singleSubCategories->sub_category : '' }}"
                                    type="text" class="form-control" name="sub_category" id="sub_category"
                                    placeholder="Enter Sub Category">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit"
                                    class="btn btn-primary">{{ optional($singleSubCategories)->id ? 'Update' : 'Add' }}</button>
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
                                                    <th>SubCategory</th>
                                                    <th>Business</th>
                                                    <th>Type</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allSubCategories as $index => $singleSubCategories)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            <a class="text-success"
                                                                href="/sub-categories/{{ $singleSubCategories->id }}/edit"><i
                                                                    class="fa fa-edit"></i></a>
                                                            ----
                                                            <a class="text-danger"
                                                                href="/sub-categories/{{ $singleSubCategories->id }}/delete"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                        <td>{{ $singleSubCategories->sub_category ?? 'N/A' }}
                                                        </td>
                                                        <td>{{ $singleSubCategories->business->title ?? 'N/A' }}</td>
                                                        <td>{{ $singleSubCategories->type->type ?? 'N/A' }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Actions</th>
                                                    <th>SubCategory</th>
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
