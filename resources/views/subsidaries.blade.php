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
                        action="/subsidaries{{ optional($singleSubDaries)->id ? '/' . $singleSubDaries->id : '' }}{{ optional($singleSubDaries)->id ? '/' . Request::segment(3) : '' }}">
                        {!! optional($singleSubDaries)->id ? "<input type='hidden' name='_method' value='PUT' />" : '' !!}
                        @csrf

                        <!-- Category -->
                        <div class="mb-3 row">
                            <label for="category_id" class="col-sm-2 col-form-label">Category</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="category_id" name="category_id">
                                    <option selected disabled value="">Select Category</option>
                                    @foreach ($allCategories as $singleCategory)
                                        <option
                                            {{ !empty($singleSubDaries->category_id) && $singleSubDaries->category_id == $singleCategory->id ? 'selected' : '' }}
                                            value="{{ $singleCategory->id }}">{{ $singleCategory->category }}
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
                                            {{ !empty($singleSubDaries->business_id) && $singleSubDaries->business_id == $singleBusiness->id ? 'selected' : '' }}
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
                                            {{ !empty($singleSubDaries->type_id) && $singleSubDaries->type_id == $singleType->id ? 'selected' : '' }}
                                            value="{{ $singleType->id }}">{{ $singleType->type }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Group -->
                        <div class="mb-3 row">
                            <label for="group_id" class="col-sm-2 col-form-label">Group</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="group_id" name="group_id">
                                    <option selected disabled value="">Select Group</option>
                                    @foreach ($allGroups as $group)
                                        <option
                                            {{ !empty($singleSubDaries->group_id) && $singleSubDaries->group_id == $group->id ? 'selected' : '' }}
                                            value="{{ $group->id }}">{{ $group->groups }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Sub Category -->
                        <div class="mb-3 row">
                            <label for="sub_category_id" class="col-sm-2 col-form-label">Sub Category</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="sub_category_id" name="sub_category_id">
                                    <option selected disabled value="">Select Sub Category</option>
                                    @foreach ($allSubCategories as $subCategory)
                                        <option
                                            {{ !empty($singleSubDaries->sub_category_id) && $singleSubDaries->sub_category_id == $subCategory->id ? 'selected' : '' }}
                                            value="{{ $subCategory->id }}">{{ $subCategory->sub_category }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <!-- Code -->
                        <div class="mb-3 row">
                            <label for="code" class="col-sm-2 col-form-label">Code</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="code" id="code"
                                    value="{{ $singleSubDaries->code ?? '' }}" placeholder="Enter Code">
                            </div>
                        </div>

                        <!-- Description -->
                        <div class="mb-3 row">
                            <label for="description" class="col-sm-2 col-form-label">Description</label>
                            <div class="col-sm-10">
                                <textarea class="form-control" name="description" id="description" placeholder="Enter Description">{{ $singleSubDaries->description ?? '' }}</textarea>
                            </div>
                        </div>

                        <!-- Name -->
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name"
                                    value="{{ $singleSubDaries->name ?? '' }}" placeholder="Enter Name">
                            </div>
                        </div>

                        <!-- Address -->
                        <div class="mb-3 row">
                            <label for="address" class="col-sm-2 col-form-label">Address</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="address" id="address"
                                    value="{{ $singleSubDaries->address ?? '' }}" placeholder="Enter Address">
                            </div>
                        </div>

                        <!-- Phone Number -->
                        <div class="mb-3 row">
                            <label for="phone_no" class="col-sm-2 col-form-label">Phone Number</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone_no" id="phone_no"
                                    value="{{ $singleSubDaries->phone_no ?? '' }}" placeholder="Enter Phone Number">
                            </div>
                        </div>

                        <!-- OPU Balance -->
                        <div class="mb-3 row">
                            <label for="opu_balance" class="col-sm-2 col-form-label">OPU Balance</label>
                            <div class="col-sm-10">
                                <input type="number" step="0.01" class="form-control" name="opu_balance"
                                    id="opu_balance" value="{{ $singleSubDaries->opu_balance ?? '' }}"
                                    placeholder="Enter OPU Balance">
                            </div>
                        </div>

                        <!-- For Suppliers or Clients -->
                        <div class="mb-3 row">
                            <label for="for_suppliers_or_for_clients" class="col-sm-2 col-form-label">For
                                Suppliers/Clients</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="for_suppliers_or_for_clients"
                                    name="for_suppliers_or_for_clients">
                                    <option selected disabled value="">Select Option</option>
                                    <option value="suppliers"
                                        {{ !empty($singleSubDaries->for_suppliers_or_for_clients) && $singleSubDaries->for_suppliers_or_for_clients == 'suppliers' ? 'selected' : '' }}>
                                        Suppliers
                                    </option>
                                    <option value="clients"
                                        {{ !empty($singleSubDaries->for_suppliers_or_for_clients) && $singleSubDaries->for_suppliers_or_for_clients == 'clients' ? 'selected' : '' }}>
                                        Clients
                                    </option>
                                </select>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit"
                                    class="btn btn-primary">{{ optional($singleSubDaries)->id ? 'Update' : 'Add' }}</button>
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
                                                    <th>Category</th>
                                                    <th>Business</th>
                                                    <th>Type</th>
                                                    <th>Group</th>
                                                    <th>SubCategory</th>
                                                    <th>Code</th>
                                                    <th>Description</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>PhoneNo</th>
                                                    <th>OPUBalance</th>
                                                    <th>ForSuppliers/Clients</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allSubDaries as $index => $singleSubDaries)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            <a class="text-success"
                                                                href="/subsidaries/{{ $singleSubDaries->id }}/edit"><i
                                                                    class="fa fa-edit"></i></a>
                                                            ----
                                                            <a class="text-danger"
                                                                href="/subsidaries/{{ $singleSubDaries->id }}/delete"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                        <td>{{ $singleSubDaries->category->category ?? 'N/A' }}</td>
                                                        <td>{{ $singleSubDaries->business->title ?? 'N/A' }}</td>
                                                        <td>{{ $singleSubDaries->type->type ?? 'N/A' }}</td>
                                                        <td>{{ $singleSubDaries->group->groups ?? 'N/A' }}</td>
                                                        <td>{{ $singleSubDaries->sub_category->sub_category ?? 'N/A' }}
                                                        </td>
                                                        <td>{{ $singleSubDaries->code ?? 'N/A' }}</td>
                                                        <td>{{ $singleSubDaries->description ?? 'N/A' }}</td>
                                                        <td>{{ $singleSubDaries->name ?? 'N/A' }}</td>
                                                        <td>{{ $singleSubDaries->address ?? 'N/A' }}</td>
                                                        <td>{{ $singleSubDaries->phone_no ?? 'N/A' }}</td>
                                                        <td>{{ $singleSubDaries->opu_balance ?? 'N/A' }}</td>
                                                        <td>{{ $singleSubDaries->for_suppliers_or_for_clients ?? 'N/A' }}
                                                        </td>
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
                                                    <th>Group</th>
                                                    <th>SubCategory</th>
                                                    <th>Code</th>
                                                    <th>Description</th>
                                                    <th>Name</th>
                                                    <th>Address</th>
                                                    <th>PhoneNo</th>
                                                    <th>OPUBalance</th>
                                                    <th>ForSuppliers/Clients</th>
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
