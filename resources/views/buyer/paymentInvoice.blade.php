@extends('buyer.layout.main')
@section('buyer-template')
    <style>
        #invoice {
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 80%;
            max-width: 800px;
            border-radius: 8px;
            margin: 20px;
        }

        #invoice header {
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        #invoice h1 {
            margin: 0;
        }

        #invoice .details {
            padding: 20px;
        }

        #invoice table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        #invoice table th,
        #invoice table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        #invoice table th {
            background-color: #f2f2f2;
        }

        #invoice table tr:hover {
            background-color: #f9f9f9;
        }

        #invoice .additional-details {
            margin-top: 20px;
            display: flex;
            justify-content: flex-end;
        }

        #invoice .additional-details div {
            margin-left: 20px;
        }

        #invoice .total {
            margin-top: 20px;
            text-align: right;
            font-size: 18px;
        }
    </style>

    <div class="content-wrapper wrapper-adjust">
        <div class="container-fluid mt-2">
            <div class="card">
                <div class="card-header border-0">
                    <h3 class="card-title"><i class="fa-solid fa-wallet"></i> Transactions</h3>
                </div>
                <div class="card-body table-responsive p-0">

                    <div id="invoice" class="mx-auto">
                        <header class="bg-blue">
                            <h1>Invoice</h1>
                        </header>

                        <div class="details">
                            <strong>Invoice Number:</strong> INV-2024001<br>
                            <strong>Date:</strong> January 1, 2024
                        </div>

                        <div class="p-3">
                            <strong>Bill To:</strong>
                            <p>Buyer Name<br>
                                Street Address<br>
                                City, State, Zip Code<br>
                                Email: buyer@example.com<br>
                                Phone: (555) 555-5555
                            </p>
                        </div>

                        <table>
                            <thead>
                                <tr>
                                    <th>Item</th>
                                    <th>Description</th>
                                    <th>Quantity</th>
                                    <th>Unit Price</th>
                                    <th>Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Item 1</td>
                                    <td>Description for Item 1</td>
                                    <td>2</td>
                                    <td>$50.00</td>
                                    <td>$100.00</td>
                                </tr>
                                <tr>
                                    <td>Item 2</td>
                                    <td>Description for Item 2</td>
                                    <td>3</td>
                                    <td>$250.00</td>
                                    <td>$140.00</td>
                                </tr>
                                <!-- Add more rows for additional items if needed -->
                            </tbody>
                        </table>

                        <div class="additional-details">
                            <div>
                                <strong>Subtotal:</strong> $100.00
                            </div>
                            <div>
                                <strong>GST (18%):</strong> $18.00
                            </div>
                        </div>

                        <div class="total">
                            <strong>Total:</strong> $118.00
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php include 'footer-2.php'; ?>
    </div>
@endsection
