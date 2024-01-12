@extends('seller.layout.main')
@section('seller-templete')
    <!-- content start -->
    <section>
        <div class="content-wrapper wrapper-adjust">
            <div class="row mx-0">
                <div class="col-12 col-md-12 col-lg-12 py-3">
                    <form action="{{ Route('admin.approvedWebDb', $id) }}" method="post">
                        @csrf
                        <div class="container-fluid">
                            <h5 class="fw-bold" style="font-weight: bold;">Approved Website</h5>
                            @if (session('error'))
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ session('error') }}
                                </div>
                            @endif
                            @if (session('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                    {{ session('success') }}
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-3 mt-2">
                                    <label for="#">Medium</label>
                                    <input type="text" class="form-control" placeholder="Medium" value=""
                                        name="medium" required>
                                </div>
                                <div class="col-lg-3 mt-2">
                                    <label for="#">Language</label>
                                    <input type="text" class="form-control" placeholder="Language" value=""
                                        name="language" required>
                                </div>
                                <div class="col-lg-3 mt-2">
                                    <label for="#">Sponsorship</label>
                                    <select name="sponsorship" id="" class="form-control" required>
                                        <option value="Yes">Yes</option>
                                        <option value="No">No</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 mt-2">
                                    <label for="#">Ipaddress</label>
                                    <input type="text" class="form-control" placeholder="Ipaddress" value=""
                                        name="ipaddress" required>
                                </div>
                                <div class="col-lg-3 mt-2">
                                    <label for="#">DR</label>
                                    <input type="number" class="form-control" placeholder="DR" value="10"
                                        name="dr" required>
                                </div>
                                <div class="col-lg-3 mt-2">
                                    <label for="#">DA </label>
                                    <input type="number" class="form-control" placeholder="DA" value="230"
                                        name="da" required>
                                </div>
                                <div class="col-lg-3 mt-2">
                                    <label for="#">PA </label>
                                    <input type="number" class="form-control" placeholder="PA " value="246"
                                        name="pa" required>
                                </div>
                                <div class="col-lg-3 mt-2">
                                    <label for="#">CF</label>
                                    <input type="number" class="form-control" placeholder="CF" value="423534"
                                        name="cf" required>
                                </div>
                                <div class="col-lg-4 mt-2">
                                    <label for="#">TF </label>
                                    <input type="number" class="form-control" placeholder="DA" value="8346"
                                        name="tf" required>
                                </div>
                                <div class="col-lg-4 mt-2">
                                    <label for="#">Credit </label>
                                    <input type="text" class="form-control" placeholder="Credit" value="6543"
                                        name="credit" required>
                                </div>
                                <div class="col-lg-4 mt-2">
                                    <label for="#">Status </label>
                                    <select name="status" id="" class="form-control" required>
                                        <option value="1" selected>Approved</option>
                                        <option value="0">Reject</option>
                                    </select>
                                </div>
                                <div class="col-lg-3 mt-3 ml-auto">
                                    <input type="submit" placeholder="Approved" value="Approved"
                                        class="btn bg-success w-100">
                                </div>
                            </div>
                        </div>
                </div>
                </form>

            </div>
        </div>
        </div>
    </section>
@endsection
