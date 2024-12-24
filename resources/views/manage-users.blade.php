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
                        action="/manage-users{{ optional($singleManageUser)->id ? '/' . $singleManageUser->id : '' }}{{ optional($singleManageUser)->id ? '/' . Request::segment(3) : '' }}">
                        {!! optional($singleManageUser)->id ? "<input type='hidden' name='_method' value='PUT' />" : '' !!}
                        @csrf
                        <!-- Name -->
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input value="{{ optional($singleManageUser)->name ? $singleManageUser->name : '' }}"
                                    type="text" class="form-control" name="name" id="name"
                                    placeholder="Enter name">
                            </div>
                        </div>

                        <!-- username -->
                        <div class="mb-3 row">
                            <label for="username" class="col-sm-2 col-form-label">username</label>
                            <div class="col-sm-10">
                                <input
                                    value="{{ optional($singleManageUser)->username ? $singleManageUser->username : '' }}"
                                    type="username" class="form-control" name="username" id="username"
                                    placeholder="Enter username">
                            </div>
                        </div>

                        <!-- Password -->
                        <div class="mb-3 row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" name="password" id="password"
                                    placeholder="Enter password">
                            </div>
                        </div>

                        <!-- Role -->
                        <div class="mb-3 row">
                            <label for="role" class="col-sm-2 col-form-label">Role</label>
                            <div class="col-sm-10">
                                <select class="form-select" id="role" name="role">
                                    <option selected disabled value="">Select Role</option>
                                    <option {{ optional($singleManageUser)->role == 'Admin' ? 'selected' : '' }}
                                        value="Admin">Admin</option>
                                    <option {{ optional($singleManageUser)->role == 'Cashier' ? 'selected' : '' }}
                                        value="Cashier">Cashier</option>

                                </select>
                            </div>
                        </div>

                        <!-- Submit Button -->
                        <div class="row mb-3">
                            <div class="col-sm-10 offset-sm-2">
                                <button type="submit"
                                    class="btn btn-primary">{{ optional($singleManageUser)->id ? 'Update' : 'Add' }}</button>
                            </div>
                        </div>
                    </form>

                    <div class="row">
                        <div class="col-12">
                            <div class="box">
                                <div class="box-header with-border">
                                    <h4 class="box-title">User List</h4>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table id="example5" class="text-fade table table-bordered" style="width:100%">
                                            <thead>
                                                <tr class="text-dark">
                                                    <th>#</th>
                                                    <th>Actions</th>
                                                    <th>Name</th>
                                                    <th>Username</th>
                                                    <th>Role</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($allManageUsers as $index => $singleManageUser)
                                                    <tr>
                                                        <td>{{ $index + 1 }}</td>
                                                        <td>
                                                            @if (auth()->check() && auth()->id() == $singleManageUser->id)
                                                                #
                                                            @elseif (auth()->check())
                                                                <a class="text-success"
                                                                    href="/manage-users/{{ $singleManageUser->id }}/edit"><i
                                                                        class="fa fa-edit"></i></a>
                                                                ----
                                                                <a class="text-danger"
                                                                    href="/manage-users/{{ $singleManageUser->id }}/delete"><i
                                                                        class="fa fa-trash"></i></a>
                                                            @endif

                                                        </td>
                                                        <td>{{ $singleManageUser->name ?? 'N/A' }}</td>
                                                        <td>{{ $singleManageUser->username ?? 'N/A' }}</td>
                                                        <td>{{ $singleManageUser->role ?? 'N/A' }}</td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Actions</th>
                                                    <th>Name</th>
                                                    <th>Username</th>
                                                    <th>Role</th>
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
