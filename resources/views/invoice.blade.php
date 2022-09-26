@extends("layouts.app")

@section("style")
  <link rel="stylesheet" href="{{ asset('css/invoice.css') }}">
@endsection

@section("content")
<div class="container bootstrap snippets bootdeys">
  <div class="row">
    <div class="col-sm-12">
      <div class="panel panel-default invoice" id="invoice">
        <div class="panel-body">
          <div class="row">

            <div class="col-sm-6 top-left">
              <i class="fa-solid fa-truck-fast"></i>
            </div>

            <div class="col-sm-6 top-right">
              <h3 class="marginright">INVOICE-1234578</h3>
              <span class="marginright">2022-09-30</span>
            </div>

          </div>
          <hr>
          <div class="row">

            <div class="col-4 from who-info">
              <p class="lead marginbottom">From : Dynofy</p>
              <p>Saint-Tropez, France</p>
              <p>16A</p>
              <p>Phone: +334157673600</p>
            </div>

            <div class="col-4 to who-info">
              <p class="lead marginbottom">To : John Doe</p>
              <p>Freiburg im Breisgau, Germany</p>
              <p>16A</p>
              <p>Phone: +324156763600</p>
            </div>

            <div class="col-4 payment-details">
              <p class="lead marginbottom payment-info">Contact details</p>
              <p>Delivery Date: 2022-10-10</p>
              <p>Name: Michael</p>
              <p>Email: user@user.com</p>
              <p>Phone: +324156763600</p>
              <p>Note: #</p>
            </div>

          </div>

          <div class="row table-row">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th style="width:20%">Type</th>
                  <th class="text-right" style="width:20%">Add-ons</th>
                  <th class="text-right" style="width:40%">Content</th>
                  <th class="text-right" style="width:20%">Value</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Curtain Side</td>
                  <td class="text-right">Help Loading</td>
                  <td class="text-right">AAA BBB CCC</td>
                  <td class="text-right">$1580</td>
                </tr>
              </tbody>
            </table>

          </div>

          <div class="row my-3">
            <div class="col-6 text-right pull-right invoice-total">
              <p>SubTotal : <span class="total-price">$1000</span></p>
              <p>VAT(19%) : <span class="total-price">$190</span></p>
              <p>Total : <span class="total-price">$1190</span></p>
            </div>
            <div class="col-6 margintop">
              <button class="btn btn-success" id="invoice_next">Continue</button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection