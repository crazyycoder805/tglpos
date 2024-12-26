<!DOCTYPE html>
<html lang="en">
@include('includes.head')
@php
    $user = Auth::user();

@endphp
<style>
    @keyframes popup {
        0% {
            transform: scale(1);
            background-color: inherit;
            /* Start with the original color */
        }

        25% {
            background-color: red;
            /* Change to red */
        }

        50% {
            transform: scale(1.1);
            background-color: inherit;
            /* Return to the original color */
        }

        100% {
            transform: scale(1);
            background-color: inherit;
            /* Back to the original */
        }
    }

    .popup-animation {
        animation: popup 1s infinite;
        transition: background-color 1s ease;
        /* Smooth background transition */
    }



    input {
        background-color: white !important;
        color: black !important;
        border: 1px solid black !important
            /* Sets the text color to black */

    }

    label {
        font-weight: bolder
    }

    .select2-container--default .select2-selection--single {
        background-color: white;
        color: black
    }

    .select2-container--default .select2-selection--single .select2-selection__rendered {
        background-color: white;
        color: black
    }

    .select2-container--default .select2-dropdown {
        background-color: white;
        color: black
    }

    .dark-skin .select2-container--default .select2-selection--single {
        background-color: white;

    }

    .border-red {
        border: 5px solid red !important
    }

    .border-black {
        border: 1px solid black !important
    }
</style>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">

    <div class="wrapper">
        <div class="row">
            <div class="col-md">
                <!-- Display success message -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show text-dark" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <!-- Display error message -->
                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible fade show text-dark" role="alert">
                        {{ session('error') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-md">
                <div class="card" style="background-color: #FAECD2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="date" class="col-form-label">Date</label>
                                <input type="date" class="form-control" name="date" id="date"
                                    placeholder="Enter Date">
                            </div>
                            <div class="col-md-2">
                                <label for="time" class="col-form-label">Time</label>

                                <input type="time" class="form-control" name="time" id="time"
                                    placeholder="Enter Time">
                            </div>
                            <div class="col-md-2">
                                <label for="service_inv" class="col-form-label">Invoice Number</label>
                                <input value="{{ $nextInvoiceNumber }}" readonly type="number" class="form-control"
                                    name="service_inv" id="service_inv" placeholder="Enter Invoice Number">
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                <label for="service_barcode" class="col-sm-2 col-form-label">Service</label>

                                <select style="background-color: white !important" class="form-select"
                                    id="service_barcode" name="service_barcode">
                                    <option selected disabled value="">Select
                                        Service</option>
                                    @foreach ($allServices as $singleService)
                                        <option data-description="{{ $singleService->description }}"
                                            data-sale-rate="{{ sprintf('%.2f', $singleService->cost_without_tax) }}"
                                            value="{{ $singleService->barcode }}">
                                            {{ $singleService->barcode }}, {{ $singleService->name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <label for="service_description" class="col-form-label">Description</label>
                                <input readonly type="text" class="form-control" name="service_description"
                                    id="service_description" placeholder="Enter Description">
                            </div>
                            <div class="col-md-2">
                                <label for="service_sale_price" class="col-form-label">Sale Rate</label>
                                <input readonly type="text" class="form-control" name="service_sale_price"
                                    id="service_sale_price" placeholder="Enter Sale Price">
                            </div>
                            <div class="col-md-1">
                                <label for="service_qty" class="col-form-label">Qty</label>
                                <input type="number" class="form-control" name="service_qty" id="service_qty"
                                    placeholder="Enter Qty">
                            </div>
                            <div class="col-md-2">
                                <label for="service_tax" class="col-form-label">Tax (%)</label>
                                <input readonly type="number" class="form-control" name="service_tax" id="service_tax"
                                    placeholder="Enter Total After Tax">
                            </div>
                            <div class="col-md-2">
                                <label for="service_after_tax_total" class="col-form-label">Total</label>
                                <input type="number" class="form-control" name="service_after_tax_total"
                                    id="service_after_tax_total" placeholder="Enter Total After Tax">
                            </div>

                            {{-- Hidden Fields --}}
                            <input type="number" hidden class="form-control" name="service_total"
                                id="service_total">
                            <input hidden type="text" value="{{ $user->name }}" class="form-control"
                                name="cashier" id="cashier">
                        </div>
                        <div class="row mt-3" style="height: 200px;overflow: scroll">
                            <div class="col-md">
                                <div class="card" style="background-color: white !important">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md">
                                                <div class="table-responsive">
                                                    <table style="background-color: white !important" id="tableSales1"
                                                        class="text-fade table table-bordered" style="width:100%">
                                                        <thead>
                                                            <tr class="text-dark">
                                                                <th>#</th>
                                                                <th>Actions</th>
                                                                <th>Date</th>
                                                                <th>Barcode</th>
                                                                <th>Name</th>
                                                                <th>Qty</th>
                                                                <th>Sale</th>
                                                                <th>Total</th>
                                                                <th>Tax (%)</th>
                                                                <th>AfterTax-Amount</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <!-- Rows will be dynamically added here -->
                                                        </tbody>

                                                    </table>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7">
                <div class="card" style="background-color: #FAECD2">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md">
                                <label for="customer_name" class="col-form-label">Customer Name</label>
                                <input type="text" class="form-control" name="customer_name" id="customer_name"
                                    placeholder="Enter Customer Name">


                            </div>
                            <div class="col-md">
                                <label for="total_amount_before_tax" class="col-form-label">Total Amount</label>
                                <input readonly type="number" class="form-control" name="total_amount_before_tax"
                                    id="total_amount_before_tax" placeholder="Enter Total Amount Before Tax">

                            </div>
                            <div class="col-md">
                                <label for="total_amount_after_tax" class="col-form-label">Add Tax</label>
                                <input readonly type="number" class="form-control" name="total_amount_after_tax"
                                    id="total_amount_after_tax" placeholder="Enter Total Amount After Tax">

                            </div>
                            <div class="col-md">
                                <label for="discount_in_percentage" class="col-form-label">Discount (%)</label>
                                <input type="number" class="form-control" name="discount_in_percentage"
                                    id="discount_in_percentage" placeholder="Enter Discount">

                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <label for="discounted_final_amount" class="col-form-label">Discount Amount</label>
                                <input readonly type="number" class="form-control" name="discounted_final_amount"
                                    id="discounted_final_amount" placeholder="Enter Discount Amount">

                            </div>
                            <div class="col-md">
                                <label for="amount_received" class="col-form-label">Amount Received</label>
                                <input type="number" class="form-control" name="amount_received"
                                    id="amount_received" placeholder="Enter Amount Received">

                            </div>
                            <div class="col-md">
                                <label for="change_return" class="col-form-label">Change Return</label>
                                <input readonly type="number" class="form-control" name="change_return"
                                    id="change_return" placeholder="Enter Amount To Return">

                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card" style="background-color: #FAECD2">
                    <div class="card-body">
                        <div style="display: none" class="row">
                            <div class="col-md">
                                <label for="total_qty" class="col-form-label">Total Quantity</label>
                                <input readonly type="number" class="form-control" name="total_qty" id="total_qty"
                                    placeholder="Enter Total Quantity">

                            </div>


                        </div>

                        <div class="row">
                            <div class="col-md">
                                <button id="bill_close_button" class="btn mt-3 btn-lg btn-info">Print</button>
                                <button id="bill_clear_button" class="btn mt-3 btn-lg btn-danger">Clear Bill</button>
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf


                                    <button type="submit" class="btn mt-3 btn-lg btn-dark">Exit</button>
                                    @if ($user->role == 'Admin')
                                        <a href="/" class="btn mt-3 btn-lg  btn-flat">Back</a>
                                    @endif
                                </form>


                            </div>
                        </div>



                    </div>
                </div>
            </div>


            <div class="col-md">
                <div class="card" style="background-color: #FAECD2">
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md">
                                <label for="re_print_inv" class="col-form-label">Re-Print Old Invoice</label>
                                <input type="number" class="form-control" name="re_print_inv" id="re_print_inv"
                                    placeholder="Enter Invoice Number">
                                <button id="bill_reprint_button" class="btn btn-lg mt-3 btn-success">Print</button>


                            </div>

                        </div>

                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- ./wrapper -->


    @include('includes.javascript')
    <script>
        $(document).ready(function() {

            // All inputs in variables
            const date_input = $('#date');
            const time_input = $('#time');
            const service_barcode_input = $('#service_barcode');
            const service_description_input = $('#service_description');
            const service_sale_price_input = $('#service_sale_price');
            const service_qty_input = $('#service_qty');
            const service_total_input = $('#service_total');
            const service_after_tax_total_input = $('#service_after_tax_total');
            const service_inv_input = $('#service_inv');
            const service_tax_input = $('#service_tax');
            const total_amount_before_tax_input = $('#total_amount_before_tax');
            const total_amount_after_tax_input = $('#total_amount_after_tax');
            const discount_in_percentage_input = $('#discount_in_percentage');
            const discounted_final_amount_input = $('#discounted_final_amount');
            const amount_received_input = $('#amount_received');
            const change_return_input = $('#change_return');
            const total_qty_input = $('#total_qty');
            const customer_name_input = $('#customer_name');
            const cashier_input = $('#cashier');
            const re_print_inv_input = $('#re_print_inv');

            // All buttons in variables
            const bill_close_button = $("#bill_close_button");
            const bill_clear_button = $("#bill_clear_button");
            const bill_reprint_button = $("#bill_reprint_button");


            // Global variables to track
            let totalBeforeTaxAmount = 0;
            let totalAfterTaxAmount = 0;
            let totalQuantity = 0;
            let uniqueString = "";
            let serviceTaxValue = "";
            let totalServiceTaxValue = "";
            let tax = {{ $allSettings->tax }};

            // All Functions
            function generateUniqueString(length = 8) {
                const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
                let result = '';

                for (let i = 0; i < length; i++) {
                    const randomIndex = Math.floor(Math.random() * characters.length);
                    result += characters[randomIndex];
                }

                return result;
            }

            function calculateTotal() {
                var qty = parseFloat(service_qty_input.val()) || 0; // Default to 0 if empty
                var rate = parseFloat(service_sale_price_input.val()) || 0; // Default to 0 if empty
                var subtotal = qty * rate; // Calculate subtotal

                // Check if the user has manually entered a tax value
                var userTaxInput = parseFloat(service_tax_input.val());
                var userTax = 0;

                if (!isNaN(userTaxInput) && service_tax_input.val() !== '') {
                    userTax = userTaxInput / 100 * subtotal; // Convert percentage to decimal tax
                } else {
                    userTax = subtotal * 0.05; // Default to 5% tax if empty or invalid
                }
                serviceTaxValue = userTax;
                totalServiceTaxValue += userTax;

                var total = subtotal + userTax; // Add tax to subtotal

                // Update the inputs with recalculated values
                service_total_input.val(subtotal.toFixed(2)); // Show total with 2 decimal places
                service_after_tax_total_input.val(total.toFixed(2)); // Show total with 2 decimal places


            }

            function resetFields() {

                service_barcode_input.val("");
                service_description_input.val("");
                service_sale_price_input.val("");
                service_qty_input.val("");
                service_total_input.val("");
                service_after_tax_total_input.val("");
                service_tax_input.val("");
                service_barcode_input.val(null).trigger('change'); // Reset select2 field
                focusServicesSelect();
            }

            function focusServicesSelect() {
                service_barcode_input.select2('open');
                setTimeout(() => {
                    const searchField = $(
                        '.select2-container--open .select2-search__field'); // Get the search input field
                    if (searchField.length > 0) {
                        searchField.focus(); // Focus on the search field
                    }
                }, 100); // Delay of 100 milliseconds
            }



            // Function to update totals display
            function updateTotalsDisplay() {
                total_amount_after_tax_input.val(totalAfterTaxAmount.toFixed(2)); // Ensure proper formatting
                total_qty_input.val(totalQuantity); // Assuming totalQuantity is calculated elsewhere
                total_amount_before_tax_input.val(totalBeforeTaxAmount.toFixed(2)); // Ensure proper formatting
            }

            // Function to update Total After Tax based on Total Before Tax and Tax
            function updateTotalAfterTax() {
                var taxAmount = totalBeforeTaxAmount * 0.05; // Assuming tax is 5%
                totalAfterTaxAmount = totalBeforeTaxAmount + taxAmount;
                service_after_tax_total_input.val(totalAfterTaxAmount.toFixed(2)); // Ensure proper formatting
                updateDiscountedFinalAmount(); // Update discount calculation after tax change
            }

            // Function to update Discounted Final Amount after applying discount
            function updateDiscountedFinalAmount() {
                var discountPercentage = parseFloat(discount_in_percentage_input.val()) || 0;
                discountedFinalAmount = (totalAfterTaxAmount * (1 - discountPercentage / 100)) + 1;
                discounted_final_amount_input.val(discountedFinalAmount.toFixed(2)); // Ensure proper formatting
                updateChangeReturn(); // Update change return after discount
            }

            // Function to calculate and display the Change Return
            function updateChangeReturn() {
                var amountReceived = parseFloat(amount_received_input.val()) || 0; // Correctly retrieve input value
                var changeReturn = amountReceived - discountedFinalAmount;

                // Display negative value if full amount is not received
                change_return_input.val(changeReturn.toFixed(2));

            }






            function invoiceOpen(customerInv = null) {
                // URL to open in the popup
                var pdfUrl = customerInv != null ? `/print-small-invoice/${customerInv}?format=pdf` :
                    `/print-small-invoice/${service_inv_input.val()}`; // Append a query parameter for PDF format
                // Set dimensions for thermal printers (e.g., 80mm paper width and proportional height)
                var popupWidth = 400; // Approx. 80mm in pixels
                var popupHeight = 600; // Adjust height as needed

                // Open the popup
                window.open(
                    pdfUrl,
                    '_blank', // Opens in a new tab or window
                    `width=${popupWidth},height=${popupHeight},resizable=yes,scrollbars=yes`
                );
            }

            function clearBill() {

                service_barcode_input.val("");
                service_description_input.val("");
                service_sale_price_input.val("");
                service_qty_input.val("");
                service_total_input.val("");
                service_after_tax_total_input.val("");
                service_tax_input.val("");
                service_barcode_input.val(null).trigger('change'); // Reset select2 field
                totalBeforeTaxAmount = 0;
                totalAfterTaxAmount = 0;
                totalQuantity = 0;
                customer_name_input.val("");
                total_qty_input.val("");
                total_amount_before_tax_input.val("");
                total_amount_after_tax_input.val("");
                discount_in_percentage_input.val("");
                discounted_final_amount_input.val("");
                amount_received_input.val("");
                change_return_input.val("");
                $('table#tableSales1 tbody').html("");
                focusServicesSelect();
            }
            // Date variable
            const today = new Date().toISOString().split('T')[0];


            // Time variables
            const now = new Date();
            const hours = now.getHours().toString().padStart(2, '0');
            const minutes = now.getMinutes().toString().padStart(2, '0');
            const currentTime = `${hours}:${minutes}`;


            // Current Date & Time set
            date_input.val(today);
            time_input.val(currentTime);

            // Select input to show the data in input field of specific service
            service_barcode_input.select2({
                placeholder: "Select Service Barcode",
                allowClear: true
            });
            service_barcode_input.on('change', function() {
                // Get selected option
                var selectedOption = $(this).find(':selected');
                // Retrieve data attributes
                var sale_price = selectedOption.data('sale-rate');
                var description = selectedOption.data('description');

                // Populate the inputs
                service_sale_price_input.val(sale_price);
                service_description_input.val(description);
                service_tax_input.val({{ $allSettings[0]->tax }});

                service_qty_input.focus();

                // Double-check focus after a slight delay (useful for modal or dynamically added inputs)
                setTimeout(function() {
                    service_qty_input.focus();
                }, 100);
                calculateTotal();

            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Event listeners for quantity and rate changes
            service_qty_input.on('input', calculateTotal); // Listen for input events on quantity
            service_sale_price_input.on('input', calculateTotal); // Listen for input events on rate
            service_tax_input.on('input', calculateTotal); // Listen for input events on tax (user input)

            // Next Qty input focus to tax input focus
            // Event handler for service quantity input keypress
            service_qty_input.on('keypress', function(event) {

                if (event.which === 13) { // Enter key
                    event.preventDefault(); // Prevent default action

                    // Ensure a unique batch ID is generated
                    if (!uniqueString) {
                        uniqueString = generateUniqueString(10);
                    }

                    // Collect the form data
                    const data = {
                        date: date_input.val(),
                        time: time_input.val(),
                        service_barcode: service_barcode_input.val(),
                        service_description: service_description_input.val(),
                        service_sale_price: parseFloat(service_sale_price_input.val()) || 0,
                        service_qty: parseInt(service_qty_input.val()) || 0,
                        service_total: parseFloat(service_total_input.val()) || 0,
                        service_after_tax_total: parseFloat(service_after_tax_total_input.val()) || 0,
                        service_tax: parseFloat(service_tax_input.val()) || 0,
                        service_inv_input: service_inv_input.val(),
                        batch_id: uniqueString,
                        service_tax_value: serviceTaxValue
                    };

                    // Validate required fields
                    if (!data.service_barcode || !data.service_description || !data.service_qty || !data
                        .service_sale_price) {
                        alert("Please fill out all required fields before submitting.");
                        return;
                    }

                    // Update the global totals
                    totalAfterTaxAmount += data.service_after_tax_total;
                    totalBeforeTaxAmount += data.service_total;
                    totalQuantity += data.service_qty;

                    // Show a loading indicator while processing
                    const loadingIndicator = $('<div class="loading">Processing, please wait...</div>');
                    $('body').append(loadingIndicator);
                    service_qty_input.prop("disabled", true);

                    // Send the AJAX POST request
                    $.ajax({
                        url: '/cashiers/addDataSales1', // Backend route
                        type: 'POST',
                        data: data,
                        success: function(response) {
                            // Remove the loading indicator
                            loadingIndicator.remove();
                            service_qty_input.prop("disabled", false);

                            // Notify the user of success
                            // alert("Data saved successfully.");

                            // Create a new row and append it to the table body
                            const newRow = `
                                        <tr data-id="${response.lastInsertedRowSales1.id}">
                                            <td style="color: black !important">#</td>
                                            <td style="color: black !important">
                                                <button id="deleteSales1" data-id="${response.lastInsertedRowSales1.id}" class="btn delete-row btn-sm btn-danger">Delete</button>
                                            </td>
                                            <td style="color: black !important">${data.date}</td>
                                            <td style="color: black !important">${data.service_barcode}</td>
                                            <td style="color: black !important">${data.service_description}</td>
                                            <td style="color: black !important">${data.service_qty}</td>
                                            <td style="color: black !important">${data.service_sale_price.toFixed(2)}</td>
                                            <td style="color: black !important">${data.service_total.toFixed(2)}</td>
                                            <td style="color: black !important">${data.service_tax.toFixed(2)}</td>
                                            <td style="color: black !important">${data.service_after_tax_total.toFixed(2)}</td>
                                        </tr>`;

                            // Append the new row to the table body
                            $('table#tableSales1 tbody').append(newRow);

                            // Update the displayed totals
                            updateTotalsDisplay();

                            // Reset the input fields
                            resetFields();
                        },
                        error: function(xhr, status, error) {
                            // Remove the loading indicator
                            loadingIndicator.remove();
                            service_qty_input.prop("disabled", false);

                            // Log the error for debugging
                            console.error("Error occurred:", xhr);

                            // Notify the user of the error
                            alert("An error occurred while saving the data. Please try again.");
                        },
                        complete: function() {
                            console.log("Request completed.");
                        }
                    });
                }
            });








            // When deleting a row
            // Event handler for deleting a row
            $(document).on('click', '.delete-row', function() {
                const rowId = $(this).data('id'); // Get the row ID from the button's data-id attribute

                // Get the row and its values
                const row = $(this).closest('tr');
                const qty = parseInt(row.find('td').eq(5).text()) || 0;
                const total = parseFloat(row.find('td').eq(9).text()) || 0;
                const totalBeforeTax = parseFloat(row.find('td').eq(7).text()) || 0;

                // Confirm deletion with the user
                if (!confirm("Are you sure you want to delete this row?")) {
                    return; // Stop execution if user cancels
                }

                // Show a loading indicator while processing
                const loadingIndicator = $(
                    '<div class="loading">Processing deletion, please wait...</div>');
                $('body').append(loadingIndicator);

                // Update the global totals
                totalAfterTaxAmount -= total;
                totalBeforeTaxAmount -= totalBeforeTax;
                totalQuantity -= qty;

                // Send AJAX request to delete the row from the backend
                $.ajax({
                    url: '/cashiers/deleteDataSales1', // Backend route
                    type: 'POST',
                    data: {
                        id: rowId
                    },
                    success: function(response) {
                        // On success, remove the row from the table
                        $('tr[data-id="' + rowId + '"]').remove();

                        // Update the displayed totals
                        updateTotalsDisplay();

                        // Notify the user of successful deletion
                        alert("Row deleted successfully.");
                    },
                    error: function(xhr, status, error) {
                        // Log the error details for debugging
                        console.error("Error occurred:", xhr);

                        // Show a user-friendly error message
                        alert("An error occurred while deleting the row. Please try again.");
                    },
                    complete: function() {
                        // Remove the loading indicator after request completes
                        loadingIndicator.remove();
                        console.log("Row deletion request completed");
                    }
                });
            });


            // Event listener for Total Amount Before Tax input
            total_amount_before_tax_input.on('input', function() {
                totalBeforeTaxAmount = parseFloat($(this).val()) || 0;
                updateTotalAfterTax();
            });

            // Event listener for Tax amount input
            total_amount_after_tax_input.on('input', function() {
                totalAfterTaxAmount = parseFloat($(this).val()) || 0;
                updateDiscountedFinalAmount();
            });

            // Event listener for Discount input
            discount_in_percentage_input.on('input', function() {
                updateDiscountedFinalAmount();
            });

            // Event listener for Amount Received input
            amount_received_input.on('input', function() {
                updateChangeReturn();
            });




            $(document).on('keydown', function(event) {
                if (event.key === 'Escape' || event.keyCode === 27) { // Check for 'Escape' key
                    customer_name_input.focus(); // Focus on the customer_name input field
                }
            });

            $(document).on('keydown', function(event) {
                // Check if the F12 key (keyCode 123) is pressed
                if (event.keyCode === 123) {
                    event.preventDefault(); // Prevent default behavior (e.g., opening dev tools)
                    focusServicesSelect();
                }
            });



            customer_name_input.on('keypress', function(event) {
                if (event.which === 13) { // 13 is the Enter key

                    discount_in_percentage_input.focus(); // Focus on the tax input
                    discount_in_percentage_input.val(0); // Focus on the tax input
                    updateDiscountedFinalAmount();


                }
            });

            discount_in_percentage_input.on('keypress', function(event) {
                if (event.which === 13) { // 13 is the Enter key

                    amount_received_input.focus(); // Focus on the tax input
                }
            });

            // Add animation on focus
            bill_close_button.on("focus", function() {
                $(this).addClass("popup-animation");
                $(this).removeClass("btn-info");

            });

            // Remove animation on blur (unfocus)
            bill_close_button.on("blur", function() {
                $(this).removeClass("popup-animation");
                $(this).addClass("btn-info");

            });
            amount_received_input.on('keypress', function(event) {
                if (event.which === 13) { // 13 is the Enter key

                    bill_close_button.focus(); // Focus on the tax input
                }
            });

            // Event handler for the close button
            bill_close_button.on('click', function(event) {
                event.preventDefault(); // Prevent default form submission

                // Input validation: Check if the amount received is sufficient
                const amountReceived = parseFloat(amount_received_input.val());
                const discountedFinalAmount = parseFloat(discounted_final_amount_input.val());

                if (amountReceived < discountedFinalAmount) {
                    alert(
                        "Insufficient payment. Please ensure the received amount covers the discounted total."
                    );
                    return; // Stop further execution if validation fails
                }

                // Show a loading indicator while processing
                const loadingIndicator = $('<div class="loading">Processing, please wait...</div>');
                $('body').append(loadingIndicator);
                bill_close_button.prop("disabled", true);

                // Prepare data for the request
                const requestData = {
                    service_inv: service_inv_input.val(),
                    customer_name: customer_name_input.val(),
                    total_qty: total_qty_input.val(),
                    total_amount_before_tax: total_amount_before_tax_input.val(),
                    total_amount_after_tax: total_amount_after_tax_input.val(),
                    discount_in_percentage: discount_in_percentage_input.val(),
                    discounted_final_amount: discounted_final_amount_input.val(),
                    amount_received: amountReceived,
                    change_return: change_return_input.val(),
                    date: date_input.val(),
                    time: time_input.val(),
                    batch_id: uniqueString,
                    cashier: cashier_input.val(),
                    total_service_tax_value: totalServiceTaxValue,
                    pos_fee_tax: 1
                };

                // Send the AJAX POST request
                $.ajax({
                    url: '/cashiers/addDataSales2',
                    type: 'POST',
                    data: requestData,
                    success: function(response) {
                        // Hide the loading indicator
                        loadingIndicator.remove();
                        bill_close_button.prop("disabled", false);
                        console.log(response);
                        // Notify the user of successful submission
                        // alert("Data saved successfully. Redirecting to the invoice...");
                        //location.href = "/cashiers";
                        // Open the invoice or perform the desired action
                        invoiceOpen();
                    },
                    error: function(xhr, status, error) {
                        // Hide the loading indicator
                        loadingIndicator.remove();
                        bill_close_button.prop("disabled", false);

                        // Log the error details for debugging
                        console.error("Error occurred:", xhr);

                        // Provide a user-friendly error message
                        alert(
                            "An error occurred while saving the data. Please try again later."
                        );
                    },
                    complete: function() {
                        // Optional: Additional cleanup after request completes
                        console.log("Request completed");
                    }
                });
            });


            bill_clear_button.on('click', function(event) {
                clearBill();

            });

            service_qty_input.on('focus', function() {
                $(this).addClass("border-red");
                $(this).removeClass("border-black");
            });

            // Remove the redness when the field loses focus
            service_qty_input.on('blur', function() {
                $(this).removeClass("border-red");
                $(this).addClass("border-black");
            });
            customer_name_input.on('focus', function() {
                $(this).addClass("border-red");
                $(this).removeClass("border-black");
            });

            // Remove the redness when the field loses focus
            customer_name_input.on('blur', function() {
                $(this).removeClass("border-red");
                $(this).addClass("border-black");
            });

            discount_in_percentage_input.on('focus', function() {
                $(this).addClass("border-red");
                $(this).removeClass("border-black");
            });

            // Remove the redness when the field loses focus
            discount_in_percentage_input.on('blur', function() {
                $(this).removeClass("border-red");
                $(this).addClass("border-black");
            });

            amount_received_input.on('focus', function() {
                $(this).addClass("border-red");
                $(this).removeClass("border-black");
            });

            // Remove the redness when the field loses focus
            amount_received_input.on('blur', function() {
                $(this).removeClass("border-red");
                $(this).addClass("border-black");
            });
            bill_reprint_button.on("click", function(e) {
                e.preventDefault();
                invoiceOpen(re_print_inv_input.val());

            });
        });
    </script>
</body>


</html>
