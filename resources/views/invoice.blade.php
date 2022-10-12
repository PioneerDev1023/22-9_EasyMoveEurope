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
          @foreach($reqItems as $key => $reqItem)                                
            <div class="row">

              <div class="col-sm-6 top-left">
                <i class="fa-solid fa-truck-fast"></i>
              </div>

              <div class="col-sm-6 top-right">
                <h3 class="marginright">INVOICE-{{ $reqItem->id }}</h3>
                <span class="marginright today-show">2022-09-30</span>
              </div>

            </div>
            <hr>
            <div class="row">

              <div class="col-4 from who-info">
                <p class="lead marginbottom">From : {{ $reqItem->sender }}</p>
                <p>{{ $reqItem->sender_city}}</p>
                <p>Phone: {{ $reqItem->sender_phone}}</p>
              </div>

              <div class="col-4 to who-info">
                <p class="lead marginbottom">{{ $reqItem->receiver }}</p>
                <p>{{ $reqItem->receiver_city }}</p>
                <p>Phone: {{ $reqItem->receiver_phone }}</p>
              </div>

              <div class="col-4 payment-details">
                <p class="lead marginbottom payment-info">Contact details</p>
                <p>Delivery Date: {{ $reqItem->collection_day }}</p>
                <p>Name: {{ $reqItem->contact_name}}</p>
                <p>Email: {{ $reqItem->contact_email}}</p>
                <p>Phone: {{ $reqItem->contact_phone }}</p>
                <p>Note: {{ $reqItem->contact_note }}</p>
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
                    <td>{{ $reqItem->van_type }}</td>
                    <td class="text-right">Help Loading</td>
                    <td class="text-right">{{ $reqItem->cargo_info }}</td>
                    <td class="text-right">{{ $reqItem->price }}</td>
                  </tr>
                </tbody>
              </table>

            </div>

            <div class="row my-3">
              <div class="col-6 text-right pull-right invoice-total">
                <!-- <p>SubTotal : <span class="total-price">$1000</span></p>
                <p>VAT(19%) : <span class="total-price">$190</span></p> -->
                <p>Total : <span class="total-price">{{ $reqItem->price }}</span></p>
              </div>
              <div class="col-6 margintop">
                <button class="btn btn-success" id="invoice_next">Continue</button>
              </div>
            </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var today = new Date().toISOString().slice(0, 10);
  $(".today-show").html(today);
</script>
@endsection