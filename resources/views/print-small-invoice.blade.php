<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thermal Invoice</title>
    <style>
      

        /* General Settings */
        body {
            width: 80mm;
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            font-size: 12px;
            color: #333;
            background: #f7f7f7;
        }

        @font-face {
            font-family: 'Arenski';
            src: url('/assets/fonts/arenskiregular.ttf') format('truetype');
            font-weight: normal;
            /* Adjust the weight accordingly */
            font-style: normal;
            /* Set to normal or italic if desired */
        }

        .arenski {
            font-family: 'Arenski';
            font-weight: bold;
            font-size: 25px !important
                /* Example: Apply bold if needed */
        }

        .invoice {
            background: #fff;
            padding: 15px;
            margin: 10px auto;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);

        }

        /* Header Section */
        .header {
            text-align: center;
            margin-bottom: 15px;
        }

        .header img {
            max-width: 60px;
            margin-bottom: 8px;
        }

        .header h1 {
            margin: 0;
            font-size: 18px;
            color: #444;
            font-weight: bolder;
            /* Increased weight */
        }

        .header p {
            margin: 2px 0;
            font-size: 10px;
            color: #555;
        }

        /* Invoice Details */
        .details {
            margin-bottom: 15px;
        }

        .details table {
            width: 100%;
            border-collapse: collapse;
        }

        .details td {
            font-size: 12px;
            padding: 4px 0;
        }

        .details .label {
            font-weight: bolder;
            /* Increased weight */
            color: #444;
        }

        /* Itemized Section */
        .items table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
            border: 1px solid black;
        }

        .items th {
            font-weight: bolder;
            /* Increased weight */
            text-align: left;
            font-size: 12px;
            padding: 6px 0;
            color: #444;
        }

        .items td {
            text-align: left;
            font-size: 12px;
            padding: 6px 0;
        }

        /* Summary Section */
        .summary {
            font-size: 12px;
        }

        .summary table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid black;
        }

        .summary td {
            padding: 6px 0;
            font-size: 12px;
        }

        .summary .total {
            font-weight: bolder;
            /* Increased weight */
            color: #000;
            font-size: 14px;
        }

        /* Footer Section */
        .footer {
            text-align: center;
            font-size: 10px;
            margin-top: 15px;
            padding: 3px;
            color: #555;
            border: 1px solid black;
        }

        .footer p {
            margin: 2px 0;
        }

        @media print {
            body {
                margin: 0;
                padding: 0;
            }

            .invoice {
                page-break-after: always;
            }

            /* Hide anything after the content */
            .footer {
                page-break-before: always;
            }

            .ignore {
                display: none
            }

            /* Ensure the page ends after the last content */
            html,
            body {
                height: 100%;
                overflow: hidden;
            }

            /* Set page size explicitly for thermal printer */
            @page {
                size: 80mm auto;
                margin: 0;
            }
        }
    </style>
</head>

<body>
    <button class="ignore" id="downloadPdfButton">Download PDF</button>
    <button class="ignore" id="printButton">Print</button>

    <div class="invoice">
        <!-- Header -->
        <div class="header">
            {{-- <img src="{{ asset('assets/images/logo-2.png') }}" alt="Logo" style="width: 500px; height: auto;"> --}}
            <h1 class="arenski">The Grooming Lounge</h1>
            <p>Suite 1 & 2, Al-Abraj Plaza, Al Abraj Center, Islamabad, Pakistan</p>
            <p>Tel: +92 51 8377338</p>
            <br>
            <p>url: www.thegroominglounge.pk, Email: info@thegroominglounge.pk</p>
            <h2>Cash Memo</h2>
            <h2 style="text-decoration: underline">{{ $allSales2->customer_name }}</h2>
        </div>

        <!-- Invoice Details -->
        <div class="details">
            <table>
                <tr>
                    <td class="label">Inv No:</td>
                    <td>{{ $allSales2->service_inv }}</td>
                    <td class="label">Date:</td>
                    <td>{{ $allSales2->date }}</td>
                </tr>
                <tr>

                    <td class="label">Cashier:</td>
                    <td>{{ $allSales2->cashier }}</td>
                </tr>
            </table>
        </div>

        <!-- Itemized Section -->
        <div class="items">
            <table>
                <thead>
                    <tr style="border-bottom: 1px solid black">
                        <th>Code</th>
                        <th>Service Name</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($allSales1 as $singleSales1)
                        <tr>
                            <td>{{ $singleSales1->service_barcode }}</td>
                            <td>{{ $singleSales1->service_description }}</td>
                            <td style="font-weight: bolder">{{ $singleSales1->service_sale_price }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Summary -->
        <div class="summary">
            <table>
                <tr>
                    <td>Bill Amount:</td>
                    <td>{{ $allSales2->total_amount_before_tax }}</td>
                </tr>
                <tr>
                    <td>5% Tax Value:</td>
                    <td>{{ $allSales2->total_amount_before_tax * 0.05 }}</td>
                </tr>
                <tr>
                    <td>Discount Amount (%):</td>
                    <td>{{ $allSales2->discount_in_percentage }}</td>
                </tr>
                <tr>
                    <td>POS FEE:</td>
                    <td>{{ $allSales2->pos_fee_tax }}</td>
                </tr>
                <tr>
                    <td class="total">Total Payable Amount:</td>
                    <td class="total">{{ $allSales2->discounted_final_amount }}</td>
                </tr>
                <tr>
                    <td>Payment:</td>
                    <td>{{ $allSales2->discounted_final_amount }}</td>
                </tr>
                <tr>
                    <td>Return:</td>
                    <td>{{ $allSales2->change_return }}</td>
                </tr>
            </table>
        </div>
        <br>
        <div>
            <b>Tax # : {{ $allSales2->fbr_inv_number }}</b>
            {{-- <p>All Prices inclusive of GST</p> --}}
        </div>

        <!-- Footer -->
        <h2 style="text-align: center">Sales</h2>
        <h3 style="text-align: center">Integrated with FBR</h3>
        <div style="display: flex;flex-direction: row;justify-content: center">
            <img width="100px" src="{{ asset('assets/images/fbr/pos.png') }}" alt="">
            <img width="100px" src="{{ $allSales2->qr_code_image }}" alt="">
        </div>

        <div class="footer">
            <p>Software Dev By ShahForge IT</p>
            <b>PH/WA: +92 - 349 - 5676761 / +92 - 312 - 5571283</b>
        </div>
        <h6 style="text-align: center">Thanks for Coming</h6>
    </div>
    <script src="{{ asset('assets/src/js/pdf.js') }}"></script>
    <script>
        document.getElementById("downloadPdfButton").addEventListener("click", () => {
            const thermalOptions = {
                filename: 'thermal-print.pdf',
                image: {
                    type: 'jpeg',
                    quality: 0.98
                },
                html2canvas: {
                    scale: 2,
                    useCORS: true,
                    letterRendering: true
                },
                jsPDF: {
                    unit: 'mm',
                    orientation: 'portrait'
                },
                pagebreak: {
                    mode: ['avoid-all', 'css', 'legacy']
                }
            };

            html2pdf()
                .set(thermalOptions)
                .from(document.body)
                .save()
                .then(() => {
                    // Cleanup
                    console.log('PDF generated successfully');
                })
                .catch(error => {
                    console.error('Error generating PDF:', error);
                });


        });
        document.getElementById("printButton").addEventListener("click", function() {
            // Trigger the print dialog
            window.print();
        });
    </script>
</body>

</html>
