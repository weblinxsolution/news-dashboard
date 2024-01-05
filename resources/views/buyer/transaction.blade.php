@extends('buyer.layout.main')
@section('buyer-template')
    <div class="content-wrapper wrapper-adjust">
        <div class="container-fluid mt-2">
            <div class="card">
                <div class="card-header border-0">
                    <h3 class="card-title"><i class="fa-solid fa-wallet"></i> Transactions</h3>
                </div>
                <div class="card-body table-responsive p-0">
                    <table class="table table-valign-middle">
                        <thead>
                            <tr>
                                <th class="text-uppercase">Name</th>
                                <th class="text-uppercase">Country</th>
                                <th class="text-uppercase">Price</th>
                                <th class="text-uppercase">category</th>
                                <th class="text-uppercase">status</th>
                                <th class="text-uppercase">date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-black">
                                    The village
                                </td>
                                <td>Pakistan</td>
                                <td>$ 1500</td>
                                <td>Home</td>
                                <td>Paid</td>
                                <td>13 Dec 2023</td>
                            </tr>
                            <tr>
                                <td class="text-black">
                                    The village
                                </td>
                                <td>Pakistan</td>
                                <td>$ 1500</td>
                                <td>Individual</td>
                                <td>Unpaid</td>
                                <td>23 Nov 2023</td>
                            </tr>
                            <tr>
                                <td class="text-black">
                                    The village
                                </td>
                                <td>Pakistan</td>
                                <td>$ 1500</td>
                                <td>Goup</td>
                                <td>Unpaid</td>
                                <td>11 Jan 2023</td>
                            </tr>
                            <tr>
                                <td class="text-black">
                                    The village
                                </td>
                                <td>Pakistan</td>
                                <td>$ 1500</td>
                                <td>Home</td>
                                <td>Paid</td>
                                <td>02 Dec 2023</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <?php include 'footer-2.php'; ?>
    </div>
@endsection
