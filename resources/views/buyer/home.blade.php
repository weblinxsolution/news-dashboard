@extends('buyer.layout.main')
@section('buyer-template')
<style>
  .steps {
    display: none;
  }

  .steps[step="1"] {
    display: block;
  }

  .steps-com {
    display: none;
  }

  .steps-com[step="1"] {
    display: block;
  }

  .select2-container .select2-selection--multiple .select2-selection__rendered {
    display: flex;
    width: max-content;
  }

  .select2-selection {
    display: flex !important;
    overflow: hidden;
  }

  .select2-container--default .select2-selection--multiple .select2-selection__choice {
    margin: 0px;
  }

  .select2-container--default .select2-selection--multiple {
    padding: 5px !important;
  }

  .select2-container--default .select2-selection--multiple .select2-selection__choice {
    margin: 0px !important;
    margin-right: 5px !important;
    height: max-content;
  }

  .select2-container--default .select2-selection--multiple .select2-selection__choice__display {
    cursor: default;
    padding-left: 7px;
    color: #000000;
  }

  .filter_rd {
    align-self: stretch;
  }
</style>

<!-- Content Header (Page header) -->
<div class="content-wrapper wrapper-adjust">
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <!-- <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item text-black"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active">Dashboard v1</li>
                        </ol>
                    </div> -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>

  <div class="container-fluid">
    <div class="bg-white rounded p-3 mb-3">
      <div class="row">
        <div class="col-6 col-lg-12">
          <div class="row">
            <div class="col-lg">
              <div class="input-group mb-3 flex-nowrap">
                <span class="input-group-text filter_rd" id="basic-addon1"><i
                    class="fa-solid fa-magnifying-glass"></i></span>
                <input type="text" class="form-control" placeholder="Name or Domain" aria-label="Username">
              </div>
              <div class="input-group mb-3 flex-nowrap">
                <span class="input-group-text filter_rd" id="basic-addon1"><i class="fa-regular fa-bookmark"></i></span>
                <select class="js-example-basic-hide-search-multi js-states select2Tage form-control"
                  multiple="multiple">
                  <option>Follow</option>
                  <option>No Follow</option>
                  <option>Sponsored</option>
                </select>
              </div>

            </div>

            <div class="col-lg">
              <div class="input-group mb-3 flex-nowrap">
                <span class="input-group-text filter_rd" id="basic-addon1"><i class="fa-solid fa-newspaper"></i></span>
                <select class="form-control">
                  <option> Choose One</option>
                  <option> Choose One</option>
                  <option> Choose One</option>
                  <option> Choose One</option>
                </select>
              </div>
              <div class="input-group mb-3 flex-nowrap">
                <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-newspaper"></i></span>
                <select class="form-control">
                  <option> Choose One</option>
                  <option> Choose One</option>
                  <option> Choose One</option>
                  <option> Choose One</option>
                </select>
              </div>
            </div>

            <div class="col-lg">
              <div class="input-group mb-3 flex-nowrap d-flex align-items-center flex-nowrap">
                <span class="input-group-text filter_rd" id="basic-addon1"><i class="fa-regular fa-flag"></i></span>
                <select class="js-example-basic-hide-search-multi js-states select2Tage form-control"
                  id="js-example-basic-hide-search-multi" multiple="multiple">
                  <option>Follow</option>
                  <option>No Follow</option>
                  <option>Sponsored</option>
                </select>
              </div>
              <div class="input-group mb-3 flex-nowrap">
                <span class="input-group-text filter_rd" id="basic-addon1"><i class="fa-solid fa-bars"></i></span>
                <select class="form-control">
                  <option> Choose One</option>
                  <option> Choose One</option>
                  <option> Choose One</option>
                  <option> Choose One</option>
                </select>
              </div>
            </div>

            <div class="col-lg">
              <div class="input-group mb-3 flex-nowrap">
                <span class="input-group-text filter_rd" id="basic-addon1"><i
                    class="fa-solid fa-location-dot"></i></span>
                <select class="js-example-basic-hide-search-multi js-states select2Tage form-control"
                  multiple="multiple">
                  <option>Follow</option>
                  <option>No Follow</option>
                  <option>Sponsored</option>
                </select>
              </div>
              <div class="input-group mb-3 flex-nowrap">
                <span class="input-group-text filter_rd" id="basic-addon1"><i
                    class="fa-solid fa-briefcase-medical"></i></span>
                <select class="js-example-basic-hide-search-multi js-states select2Tage form-control"
                  multiple="multiple">
                  <option>Follow</option>
                  <option>No Follow</option>
                  <option>Sponsored</option>
                </select>
              </div>
            </div>

            <div class="col-lg">
              <div class="input-group mb-3 flex-nowrap">
                <span class="input-group-text filter_rd" id="basic-addon1"><i class="fa-regular fa-building"></i></span>
                <select class="js-example-basic-hide-search-multi js-states select2Tage form-control"
                  multiple="multiple">
                  <option>Follow</option>
                  <option>No Follow</option>
                  <option>Sponsored</option>
                </select>
              </div>
              <div class="input-group mb-3 flex-nowrap">
                <span class="input-group-text filter_rd"><i class="fa-solid fa-wallet"></i></span>
                <input type="text" class="form-control" placeholder="Min">
                <input type="text" class="form-control" placeholder="Max">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <!-- /.card -->

    <div class="card">
      <div class="card-header border-0">
        <h3 class="card-title">Products</h3>
        <div class="card-tools">
          <a href="#" class="btn btn-tool btn-sm">
            <i class="fas fa-download"></i>
          </a>
          <a href="#" class="btn btn-tool btn-sm">
            <i class="fas fa-bars"></i>
          </a>
        </div>
      </div>
      <div class="card-body table-responsive p-0">
        <table class="table table-valign-middle">
          <thead>
            <tr>
              <th>NAME</th>
              <th>COUNTRY</th>
              <th>D.R.</th>
              <th>GIVES</th>
              <th>C.F.</th>
              <th>T.F.</th>
              <th>OBL</th>
              <th>RD</th>
              <th>TRAFFIC</th>
              <th>PRICE</th>
              <th>ACTIONS</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <i class="fa-regular fa-star"></i>
                Global Chronicle El Español
              </td>
              <td><i class="fa-solid fa-earth-americas"></i> IS</td>
              <td>
                85
              </td>
              <td>
                92
              </td>
              <td>
                64
              </td>
              <td>
                33
              </td>
              <td>
                7914
              </td>
              <td>
                22141
              </td>
              <td>
                360202
              </td>
              <td>
                €395
              </td>
              <td>
                <!-- Button trigger modal 1 -->
                <button class="btn bg-sidebar" data-toggle="modal" data-target="#exampleModal1"><i
                    class="fa-solid fa-info-circle"></i></button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">T Magazine</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <div class="d-flex justify-content-between">
                          <div>
                            <div><span class="fw-bold">Medium: </span>Global Chronicle
                              El Español</div>
                            <div><span class="fw-bold">URL: </span><a href="https://cronicaglobal.elespanol.com/"
                                class="text-black">https://cronicaglobal.elespanol.com/</a>
                            </div>
                            <div><span class="fw-bold">Type: </span>Newspaper</div>
                            <div><span class="fw-bold">Country: </span>Spain</div>
                            <div><span class="fw-bold">Language: </span>IS</div>
                            <div><span class="fw-bold">Indicates Sponsored: </span>Yeah
                            </div>
                            <div><span class="fw-bold">IP: </span>51.210.0.138</div>
                            <div><span class="fw-bold">Maximum Links: </span>2</div>
                          </div>
                          <div>
                            <div class="border rounded mb-1">
                              <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                  aria-valuemin="0" aria-valuemax="100"></div>
                              </div>
                            </div>
                            <!-- <div class="border rounded p-4">
                                                                <div class="progress">
                                                                    <div class="progress-bar" role="progressbar"
                                                                        style="width: 25%" aria-valuenow="25"
                                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                                </div>
                                                            </div> -->
                          </div>
                        </div>
                        <div class="mt-4">
                          <label for="" class="mb-0">Accepted Projects</label>
                          <div class="mt-2 border p-2">
                            <span class="badge bg-green text-white">Art and
                              Design</span> <span class="badge bg-green text-white">Babbies and
                              Children</span> <span class="badge bg-green text-white">Beauty</span>
                            <span class="badge bg-green text-white">Cinema and TV</span>
                            <span class="badge bg-green text-white">Cooking and
                              gastronomy</span>
                          </div>
                        </div>
                        <div class="mt-4">
                          <label for="" class="mb-0">Rejected Projects</label>
                          <div class="mt-2 border p-2">
                            <span class="badge badge-danger">Betting and casino</span>
                            <span class="badge badge-danger">Company
                              (Advertising)</span> <span class="badge badge-danger">Dating</span>
                            <span class="badge badge-danger">News and Politics</span>
                            <span class="badge badge-danger">Others</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <!-- Button trigger modal 2 -->
                <button class="btn bg-sidebar" data-toggle="modal" data-target="#exampleModal"><i
                    class="fa-solid fa-cart-shopping"></i></button>

                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                  aria-hidden="true">
                  <div class="modal-dialog modal-lg modal-dialog-centered">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Buy link in Cronica Global El Español</h5>
                        <button type="button" class="btn" data-dismiss="modal" aria-label="Close">
                          <i class="fa fa-close"></i>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form class="steps" step="1">
                          <div class="bg-green text-white text-center align-items-center rounded py-3">
                            The price of this purchase is €395.00 regardless of the number
                            of links
                          </div>
                          <fieldset>
                            <div class="mb-3">
                              <label for="disabledTextInput" class="form-label">Other
                                Details</label>
                              <input type="text" id="disabledTextInput" class="form-control"
                                placeholder="Disabled input">
                            </div>
                            <div class="mb-3 form-check d-flex align-items-center">
                              <input type="checkbox" class="form-check-input" id="exampleCheck1">
                              <label class="form-check-label" for="exampleCheck1">Extra: Hire writing Plus (+€5)
                                <i class="fa-solid fa-info-circle"></i></label>
                            </div>
                            <div class="mb-3">
                              <label for="disabledSelect" class="form-label">Select
                                the number of links</label>
                              <select id="disabledSelect" class="form-control append_url_select">
                                <option>Select</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                              </select>
                            </div>
                            <div class="append_url_box">

                            </div>
                          </fieldset>
                          <div class="modal-footer w-100">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary next-step-tow "><i
                                class="fa-solid fa-newspaper"></i> Recharge
                              Balance</button>
                          </div>
                        </form>
                        <form class="steps" step="2">
                          <fieldset class="row">
                            <div class="mb-3 col-lg-6">
                              <label for="disabledTextInput" class="form-label">Amount</label>
                              <input type="number" value="390" id="disabledTextInput" class="form-control"
                                placeholder="Enter Amount">
                            </div>
                            <div class="mb-3 col-lg-6">
                              <label for="disabledSelect" class="form-label">SPayment method</label>
                              <select id="disabledSelect" class="form-control">
                                <option>Select</option>
                                <option value="1">Credit Card</option>
                                <option value="2">Paypal (+ Commission)</option>
                              </select>
                            </div>
                            <div class="mb-3 col-lg-12">
                              <label for="disabledTextInput" class="form-label">Coupon</label>
                              <div class="w-100 d-flex gap-2 align-items-center" style="gap:10px;">
                                <input type="number" value="39043" class="form-control w-75" placeholder="Enter Coupon">
                                <button class="btn btn-success w-25">Apply Coupon</button>
                              </div>
                            </div>
                            <div class="col-lg-12 d-flex justify-content-center mb-3">
                              <button type="button" class="btn btn-primary next-step-three"><i
                                  class="fa-solid fa-newspaper"></i> Recharge
                                Balance</button>
                            </div>
                            <div class="alert col-lg-12 alert-danger text-center">
                              <font style="vertical-align: inherit;">
                                <font style="vertical-align: inherit;">The minimum recharge is €10</font>
                              </font>
                            </div>
                            <div class="modal-footer w-100">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            </div>
                          </fieldset>
                        </form>
                        <form class="steps" step="3">
                          <fieldset class="row">
                            <div class="mb-3 col-lg-6">
                              <label for="disabledTextInput" class="form-label">Número de tarjeta</label>
                              <input type="number" value="390" id="disabledTextInput" class="form-control"
                                placeholder="1234 1234 1234 1234">
                            </div>
                            <div class="mb-3 col-lg-6">
                              <label for="disabledTextInput" class="form-label">Fecha de expiración (MM/YYYY)</label>
                              <input type="number" value="390" id="disabledTextInput" class="form-control"
                                placeholder="MM / YY">
                            </div>
                            <div class="mb-3 col-lg-12">
                              <label for="disabledTextInput" class="form-label">CVC</label>
                              <input type="number" value="390" id="disabledTextInput" class="form-control"
                                placeholder="CVC">
                            </div>
                            <div class="modal-footer w-100">
                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                              <button type="button" class="btn btn-primary"><i class="fa-solid fa-newspaper"></i>
                                Recharge balance €395 and buy</button>
                            </div>
                          </fieldset>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- /.card -->
  </div>

  <?php include('footer-2.php') ?>
</div>

<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

<script>

  $('.select2Tage').select2();

  $('.select2Tage').on('select2:opening select2:closing', function (event) {
    var $searchfield = $(this).parent().find('.select2-search__field');
    $searchfield.prop('disabled', true);
  });

  // $('#js-example-basic-hide-search-multi-2').select2();

  // $('#js-example-basic-hide-search-multi-2').on('select2:opening select2:closing', function (event) {
  //   var $searchfield = $(this).parent().find('.select2-search__field');
  //   $searchfield.prop('disabled', true);
  // });
</script>

<script>

  $('.append_url_select').change(function () {
    var count = parseInt($(this).val());

    if (count > 0) {
      $('.append_url_box').html('');

      for (let i = 0; i < count; i++) {

        var html = `
                <label for="disabledSelect" class="form-label">Enlace ${i + 1}</label>
                    <div class="row">
                                <div class="col-md col-xs-12 mb-2">
                                  <input type="text" class="form-control" name="orders_buy_for_me_anchor_1"
                                    placeholder="anchor" required="required">
                                </div>
                                <div class="col-md col-xs-12 mb-2">
                                  <input type="url" class="form-control" name="orders_buy_for_me_url_1"
                                    placeholder="url" required="required">
                                </div>
                              </div>`;

        $('.append_url_box').append(html);
      }
    } else {
      $('.append_url_box').html('');
    }
  })

  $('.next-step-tow').click(function () {
    $('.steps[step="1"]').hide();
    $('.steps[step="2"]').show();
  })
  $('.next-step-three').click(function () {
    $('.steps[step="2"]').hide();
    $('.steps[step="3"]').show();
  })


  $('.append_url_enabled').change(function () {

    var option = `
        <option>Select</option>
    `;

    var count = parseInt($(this).val());

    for (let i = 0; i < count; i++) {
      option += `
        <option value="${i + 1}">${i + 1}</option>
      `;
    }

    $('.append_url_compar_slt').html(option);
    $('.append_url_compar_slt').attr('disabled', false);
  });

  $('.append_url_compar_slt').change(function () {
    var count = parseInt($(this).val());

    if (count > 0) {
      $('.append_url_box_compar').html('');

      for (let i = 0; i < count; i++) {

        var html = `
            <label for="disabledSelect" class="form-label">Enlace ${i + 1}</label>
                <div class="row">
                            <div class="col-md col-xs-12 mb-2">
                              <input type="text" class="form-control" name="orders_buy_for_me_anchor_1"
                                placeholder="anchor" required="required">
                            </div>
                            <div class="col-md col-xs-12 mb-2">
                              <input type="url" class="form-control" name="orders_buy_for_me_url_1"
                                placeholder="url" required="required">
                            </div>
                          </div>`;

        $('.append_url_box_compar').append(html);
      }
    } else {
      $('.append_url_box_compar').html('');
    }
  });

  $('.next-step-tow-com').click(function () {
    $('.steps-com[step="1"]').hide();
    $('.steps-com[step="2"]').show();
  })
  $('.next-step-three-com').click(function () {
    $('.steps-com[step="2"]').hide();
    $('.steps-com[step="3"]').show();
  })
</script>
@endsection
