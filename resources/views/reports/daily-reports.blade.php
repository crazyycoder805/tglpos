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
                    <form id="dateFilterForm" method="post" action="/daily-reports/getData">
                        @csrf
                        <!-- From Date -->
                        <div class="mb-3 row">
                            <div class="col-md">


                                <label for="from_date" class="col-form-label">From Date</label>
                                <input type="date" class="form-control" name="from_date" id="from_date">
                            </div>
                            <div class="col-md">
                                <label for="to_date" class="col-form-label">To Date</label>
                                <input type="date" class="form-control" name="to_date" id="to_date">
                            </div>
                        </div>


                        <!-- Submit Button -->
                        <div class="row mb-3">
                            <div class="col-md">
                                <button type="button" id="submitFilter" class="btn btn-primary">Filter</button>
                                <button type="button" id="printData" class="btn btn-success">Print</button>

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
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>InvoiceNo.</th>
                                                    <th>CustomerName</th>
                                                    <th>AmountBeforeTax</th>
                                                    <th>AmountAfterTax</th>
                                                    <th>Discount%</th>
                                                    <th>FinalAmount</th>
                                                    <th>Cashier</th>
                                                </tr>
                                            </thead>
                                            <tbody id="productTableBody">
                                                <!-- Data will be inserted here by jQuery -->
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Date</th>
                                                    <th>Time</th>
                                                    <th>InvoiceNo.</th>
                                                    <th>CustomerName</th>
                                                    <th>AmountBeforeTax</th>
                                                    <th>AmountAfterTax</th>
                                                    <th>Discount%</th>
                                                    <th>FinalAmount</th>
                                                    <th>Cashier</th>
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

    <script>
        $(document).ready(function() {

            var totals = {
                total_before_tax: 0,
                total_after_tax: 0,
                total_discounted: 0
            };

            $('#submitFilter').click(function() {
                var fromDate = $('#from_date').val();
                var toDate = $('#to_date').val();

                if (!fromDate || !toDate) {
                    alert('Please select both dates');
                    return;
                }

                // Send AJAX request to backend
                $.ajax({
                    url: '/daily-reports/getData',
                    method: 'POST',
                    data: {
                        _token: $('input[name="_token"]').val(),
                        from_date: fromDate,
                        to_date: toDate
                    },
                    success: function(response) {
                        // Clear the table body and reset totals
                        $('#productTableBody').empty();
                        totals.total_before_tax = 0;
                        totals.total_after_tax = 0;
                        totals.total_discounted = 0;

                        // Populate table with fetched data
                        if (response.data.length > 0) {
                            response.data.forEach(function(product, index) {
                                $('#productTableBody').append(`
                        <tr>
                            <td>${index + 1}</td>
                            <td>${product.date || 'N/A'}</td>
                            <td>${product.time || 'N/A'}</td>
                            
                            <td>${product.service_inv || 'N/A'}</td>
                            <td>${product.customer_name || 'N/A'}</td>
                            <td>${product.total_amount_before_tax || '0'}</td>
                            <td>${product.total_amount_after_tax || '0'}</td>
                            <td>${product.discount_in_percentage || '0'}%</td>
                            <td>${product.discounted_final_amount || '0'}</td>
                            <td>${product.cashier || 'N/A'}</td>
                        </tr>
                    `);

                                // Accumulate totals
                                totals.total_before_tax += parseFloat(product
                                    .total_amount_before_tax) || 0;
                                totals.total_after_tax += parseFloat(product
                                    .total_amount_after_tax) || 0;
                                totals.total_discounted += parseFloat(product
                                    .discounted_final_amount) || 0;
                            });
                        } else {
                            $('#productTableBody').append(
                                '<tr><td colspan="11">No products found</td></tr>');
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('An error occurred while fetching data: ', xhr);
                    }
                });
            });

            // Add event for Print button
            $('#printData').click(function() {
                var fromDate = $('#from_date').val();
                var toDate = $('#to_date').val();

                var printWindow = window.open('', '_blank', 'width=800,height=600');
                var tableContent = '<table border="1" cellpadding="5" cellspacing="0" style="width:100%;">';

                // Get table headers
                tableContent += '<thead><tr>';
                $('#example5 thead tr th').each(function() {
                    tableContent += '<th>' + $(this).text() + '</th>';
                });
                tableContent += '</tr></thead>';

                // Get table rows
                tableContent += '<tbody>';
                $('#example5 tbody tr').each(function() {
                    tableContent += '<tr>';
                    $(this).find('td').each(function() {
                        tableContent += '<td>' + $(this).text() + '</td>';
                    });
                    tableContent += '</tr>';
                });
                tableContent += '</tbody></table>';

                // Write content to the new window
                printWindow.document.write('<html><head><title>Print Data</title></head><body>');
                printWindow.document.write('<h1>Fetched Data</h1>');

                // Display From & To Dates and Totals
                printWindow.document.write('<p><strong>From Date:</strong> ' + fromDate + '</p>');
                printWindow.document.write('<p><strong>To Date:</strong> ' + toDate + '</p>');
                printWindow.document.write('<p><strong>Total Before Tax:</strong> ' + totals
                    .total_before_tax.toFixed(2) + '</p>');
                printWindow.document.write('<p><strong>Total After Tax:</strong> ' + totals.total_after_tax
                    .toFixed(2) + '</p>');
                printWindow.document.write('<p><strong>Total Discounted Final Amount:</strong> ' + totals
                    .total_discounted.toFixed(2) + '</p>');

                // Append the table content
                printWindow.document.write(tableContent);
                printWindow.document.write('</body></html>');

                // Print the new window
                printWindow.document.close();
                printWindow.print();
            });

        });
    </script>
</body>


</html>
