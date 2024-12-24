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
                        action="/expenses{{ optional($singleExpenses)->id ? '/' . $singleExpenses->id : '' }}{{ optional($singleExpenses)->id ? '/' . Request::segment(3) : '' }}">
                        {!! optional($singleExpenses)->id ? "<input type='hidden' name='_method' value='PUT' />" : '' !!}
                        @csrf

                        <!-- Name -->
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input value="{{ optional($singleExpenses)->name ? $singleExpenses->name : '' }}"
                                    type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter Name">
                            </div>
                        </div>

                        <!-- Opening Balance -->
                        <div class="mb-3 row">
                            <label for="opening_balance" class="col-sm-2 col-form-label">Opening Balance</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleExpenses)->opening_balance ? $singleExpenses->opening_balance : '' }}"
                                    type="number" step="0.01" class="form-control" name="opening_balance"
                                    id="opening_balance" placeholder="Enter Opening Balance">
                            </div>
                        </div>

                        <!-- Info 1 -->
                        <div class="mb-3 row">
                            <label for="info_1" class="col-sm-2 col-form-label">Info 1</label>
                            <div class="col-sm-10">
                                <input value="{{ optional($singleExpenses)->info_1 ? $singleExpenses->info_1 : '' }}"
                                    type="text" class="form-control" name="info_1" id="info_1"
                                    placeholder="Enter Info 1">
                            </div>
                        </div>

                        <!-- Info 2 -->
                        <div class="mb-3 row">
                            <label for="info_2" class="col-sm-2 col-form-label">Info 2</label>
                            <div class="col-sm-10">
                                <input value="{{ optional($singleExpenses)->info_2 ? $singleExpenses->info_2 : '' }}"
                                    type="text" class="form-control" name="info_2" id="info_2"
                                    placeholder="Enter Info 2">
                            </div>
                        </div>

                        <!-- Info 3 -->
                        <div class="mb-3 row">
                            <label for="info_3" class="col-sm-2 col-form-label">Info 3</label>
                            <div class="col-sm-10">
                                <input value="{{ optional($singleExpenses)->info_3 ? $singleExpenses->info_3 : '' }}"
                                    type="text" class="form-control" name="info_3" id="info_3"
                                    placeholder="Enter Info 3">
                            </div>
                        </div>

                        <!-- Expense Limit -->
                        <div class="mb-3 row">
                            <label for="expense_limit" class="col-sm-2 col-form-label">Expense Limit</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleExpenses)->expense_limit ? $singleExpenses->expense_limit : '' }}"
                                    type="number" step="0.01" class="form-control" name="expense_limit"
                                    id="expense_limit" placeholder="Enter Expense Limit">
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit"
                                    class="btn btn-primary">{{ optional($singleExpenses)->id ? 'Update' : 'Add' }}</button>
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
                                                    <th>Opening Balance</th>
                                                    <th>Info 1</th>
                                                    <th>Info 2</th>
                                                    <th>Info 3</th>
                                                    <th>Expense Limit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allExpenses as $index => $singleExpenses)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            <a class="text-success"
                                                                href="/expenses/{{ $singleExpenses->id }}/edit"><i
                                                                    class="fa fa-edit"></i></a>
                                                            ----
                                                            <a class="text-danger"
                                                                href="/expenses/{{ $singleExpenses->id }}/delete"><i
                                                                    class="fa fa-trash"></i></a>
                                                        </td>
                                                        <td>{{ $singleExpenses->name ?? 'N/A' }}</td>
                                                        <td>{{ $singleExpenses->opening_balance ?? 'N/A' }}</td>
                                                        <td>{{ $singleExpenses->info_1 ?? 'N/A' }}</td>
                                                        <td>{{ $singleExpenses->info_2 ?? 'N/A' }}</td>
                                                        <td>{{ $singleExpenses->info_3 ?? 'N/A' }}</td>
                                                        <td>{{ $singleExpenses->expense_limit ?? 'N/A' }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Actions</th>
                                                    <th>Name</th>
                                                    <th>Opening Balance</th>
                                                    <th>Info 1</th>
                                                    <th>Info 2</th>
                                                    <th>Info 3</th>
                                                    <th>Expense Limit</th>
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
