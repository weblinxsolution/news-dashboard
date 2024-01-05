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
</style>

<!-- Content Header (Page header) -->
<div class="content-wrapper wrapper-adjust">

  <div class="container-fluid mt-3">
    <div class="row">
      <div class="col-lg-4 col-sm-6">
        <div class="card bg-blue py-3">
          <div class="card-body">
            <h3 class="card-title float-none text-white">TOTAL PENDING GROUPS</h3>
            <h2 class="text-white mb-0">65</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card bg-blue py-3">
          <div class="card-body">
            <h3 class="card-title float-none text-white">TOTAL ORDERS IN PROCESS</h3>
            <h2 class="text-white mb-0">15</h2>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6">
        <div class="card bg-blue py-3">
          <div class="card-body">
            <h3 class="card-title float-none text-white">TOTAL COMPLETED ORDERS</h3>
            <h2 class="text-white mb-0">30</h2>
          </div>
        </div>
      </div>
    </div>

  </div>

  <!-- tables start -->
  <div class="container-fluid">
    <div class="row">

      <!-- table 1 -->
      <div class="w-100">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="content-header">
            <div class="container-fluid">
              <h1 class="m-0"><i class="fa-solid fa-newspaper"></i> Weekly periodic offers</h1>
            </div>
          </div>
          <div class="card">
            <div class="card-body table-responsive p-0">
              <table class="table table-valign-middle">
                <thead>
                  <tr>
                    <th class="text-uppercase">Name</th>
                    <th class="text-uppercase">Price</th>
                    <th class="text-uppercase">Group Price</th>
                    <th class="text-uppercase">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-black">
                      The village
                    </td>
                    <td><span class="text-black">€25</span> <br> <del class="text-black">€35.00</del></td>
                    <td>
                      <span class="text-black">8.33 €</span>
                      <br> <del class="text-black">€35.00</del>
                    </td>
                    <td>
                      <!-- Button trigger modal 2 -->
                      <button class="btn bg-sidebar" data-toggle="modal" data-target="#exampleModal"><i
                          class="fa-solid fa-cart-shopping"></i></button>

                      <!-- modal -->
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
                                      <input type="number" value="39043" class="form-control w-75"
                                        placeholder="Enter Coupon">
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
                                    <label for="disabledTextInput" class="form-label">Fecha de expiración
                                      (MM/YYYY)</label>
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
                                    <button type="button" class="btn btn-primary next-step-four"><i
                                        class="fa-solid fa-newspaper"></i>
                                      Recharge balance €395 and buy</button>
                                  </div>
                                </fieldset>
                              </form>
                              <div class="steps" step="4">
                                <h1 class="my-5 text-center">Thank you for your contribution</h1>
                                <div class="modal-footer w-100">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-black">
                      The village
                    </td>
                    <td><span class="text-black">€25</span> <br> <del class="text-black">€35.00</del></td>
                    <td>
                      <span class="text-black">8.33 €</span>
                      <br> <del class="text-black">€35.00</del>
                    </td>
                    <td>
                      <button class="btn bg-sidebar" data-toggle="modal" data-target="#exampleModal"><i
                          class="fa-solid fa-cart-shopping"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- table 2 -->
      <div class="w-100">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="content-header">
            <div class="container-fluid">
              <h1 class="m-0"><i class="fa-solid fa-newspaper"></i> Weekly blog offers</h1>
            </div>
          </div>
          <div class="card">
            <div class="card-body table-responsive p-0">
              <table class="table  table-valign-middle">
                <thead>
                  <tr>
                    <th class="text-uppercase">Name</th>
                    <th class="text-uppercase">Price</th>
                    <th class="text-uppercase">Group Price</th>
                    <th class="text-uppercase">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="" class="text-black">
                        The village
                      </a>
                    </td>
                    <td><span class="text-black">€25</span> <br> <del class="text-black">€35.00</del></td>
                    <td>
                      <span class="text-black">8.33 €</span>
                      <br> <del class="text-black">€35.00</del>
                    </td>
                    <td>
                      <button class="btn bg-sidebar" data-toggle="modal" data-target="#exampleModal"><i
                          class="fa-solid fa-cart-shopping"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-black">
                      The village
                    </td>
                    <td><span class="text-black">€25</span> <br> <del class="text-black">€35.00</del></td>
                    <td>
                      <span class="text-black">8.33 €</span>
                      <br> <del class="text-black">€35.00</del>
                    </td>
                    <td>
                      <!-- Button trigger modal 2 -->
                      <button class="btn bg-sidebar" data-toggle="modal" data-target="#exampleModal"><i
                          class="fa-solid fa-cart-shopping"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- table 3 -->
      <div class="w-100">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="content-header">
            <div class="container-fluid">
              <h1 class="m-0"><i class="fa-solid fa-people-group"></i> Groups about to close
                newspapers</h1>
            </div>
          </div>
          <div class="card">
            <div class="card-body table-responsive p-0">
              <table class="table  table-valign-middle">
                <thead>
                  <tr>
                    <th class="text-uppercase">Name</th>
                    <th class="text-uppercase">Price</th>
                    <th class="text-uppercase">Group Price</th>
                    <th class="text-uppercase">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td class="text-black">
                      The village
                    </td>
                    <td><span class="text-black">€25</span> <br> <del class="text-black">€35.00</del></td>
                    <td>
                      <span class="text-black">8.33 €</span>
                      <br> <del class="text-black">€35.00</del>
                    </td>
                    <td>
                      <!-- Button trigger modal 2 -->
                      <button class="btn bg-sidebar" data-toggle="modal" data-target="#exampleModal"><i
                          class="fa-solid fa-cart-shopping"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-black">
                      The village
                    </td>
                    <td><span class="text-black">€25</span> <br> <del class="text-black">€35.00</del></td>
                    <td>
                      <span class="text-black">8.33 €</span>
                      <br> <del class="text-black">€35.00</del>
                    </td>
                    <td>
                      <!-- Button trigger modal 2 -->
                      <button class="btn bg-sidebar" data-toggle="modal" data-target="#exampleModal"><i
                          class="fa-solid fa-cart-shopping"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

      <!-- table 4 -->
      <div class="w-100">
        <div class="col-12 col-md-12 col-lg-12">
          <div class="content-header">
            <div class="container-fluid">
              <h1 class="m-0"><i class="fa-solid fa-people-group"></i> Blog groups about to close
              </h1>
            </div>
          </div>

          <div class="card">
            <div class="card-body table-responsive p-0">
              <table class="table  table-valign-middle">
                <thead>
                  <tr>
                    <th class="text-uppercase">Name</th>
                    <th class="text-uppercase">Price</th>
                    <th class="text-uppercase">Group Price</th>
                    <th class="text-uppercase">Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                      <a href="" class="text-black">
                        The village
                      </a>
                    </td>
                    <td><span class="text-black">€25</span> <br> <del class="text-black">€35.00</del></td>
                    <td>
                      <span class="text-black">8.33 €</span>
                      <br> <del class="text-black">€35.00</del>
                    </td>
                    <td>
                      <!-- Button trigger modal 2 -->
                      <button class="btn bg-sidebar" data-toggle="modal" data-target="#exampleModal"><i
                          class="fa-solid fa-cart-shopping"></i></button>
                    </td>
                  </tr>
                  <tr>
                    <td class="text-black">
                      The village
                    </td>
                    <td><span class="text-black">€25</span> <br> <del class="text-black">€35.00</del></td>
                    <td>
                      <span class="text-black">8.33 €</span>
                      <br> <del class="text-black">€35.00</del>
                    </td>
                    <td>
                      <!-- Button trigger modal 2 -->
                      <button class="btn bg-sidebar" data-toggle="modal" data-target="#exampleModal"><i
                          class="fa-solid fa-cart-shopping"></i></button>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- tables end -->

  <?php include('footer-2.php') ?>
</div>
<!-- /.content-header -->

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
  $('.next-step-four').click(function () {
    $('.steps[step="3"]').hide();
    $('.steps[step="4"]').show();
  })
</script>
@endsection
