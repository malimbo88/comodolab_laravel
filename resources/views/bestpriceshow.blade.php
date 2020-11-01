{{-- bestprice.blade.php --}}

{{-- Layouts app --}}
@extends('layouts.app')

@section("title")
  Hotels
@endsection

{{-- Yeld Content --}}
@section("content")
  <div class="container">
    <div class="row mt-5">
      <div class="col-12 text-center">

        <h2>Hotels with the best price</h2>

        {{-- Print query results --}}
        {{-- -> Alert if I have no result --}}
        @if (!count($best_price_hotel))
          <div class="alert_message alert alert-info mt-5">
            <p>There are no hotels that can guarantee a stay for the selected period of time</p>
          </div>

        {{-- -> Print if I have result --}}
        @else
          <div class="row mt-5 mb-5 d-flex justify-content-center">

            {{-- Variable that indicates the best price --}}
            @php
              $best_price = 0;
            @endphp

            {{-- Print the hotel with the best price --}}
            @foreach ($best_price_hotel as $hotel)
              @if ($best_price === 0)

                <div class="col-12 col-lg-4 mb-5 d-flex justify-content-center">
                  <div class="card">

                    {{-- Image --}}
                    @if (strpos($hotel->image, "images/") !== false)
                      <img class="card-img-top" src="{{ asset("storage") . "/" . $hotel->image }}" alt="{{ $hotel->name }}">
                    @else
                      <img class="card-img-top" src="{{ asset("img") . "/" . $hotel->image }}" alt="{{ $hotel->name }}">
                    @endif
                    {{-- end Image --}}

                    {{-- Title and Location --}}
                    <div class="card-body grow-1">
                      <h5 class="card-title">#{{ $hotel->id }} {{ $hotel->name }}</h5>
                      <p class="card-text">{{ $hotel->location }}</p>
                    </div>
                    {{-- end Title and Location --}}

                    {{-- Total Price --}}
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">
                        <span>Period selected - {{ $stay_months }} months</span>
                      </li>
                        <li class="list-group-item">
                          <span>Start to - {{ $month_start->format("Y-m-d") }}</span>
                        </li>
                      <li class="list-group-item">
                        <span>{{ $hotel->total_price }} Euro</span>
                      </li>
                    </ul>
                    {{-- end Total Price --}}

                  </div>
                </div>

                {{-- Update the variable that indicates the best price --}}
                @php
                  $best_price = $hotel->total_price;
                @endphp

              {{-- If I have more than one hotel with the same price --}}
              @else
                @if ($best_price === $hotel->total_price)
                  <div class="col-12 col-lg-4 mb-5 d-flex justify-content-center">
                    <div class="card">

                      {{-- Image --}}
                      <img class="card-img-top" src="{{ asset("img") . "/" . $hotel->image }}" alt="Card image cap">

                      {{-- Title and Location --}}
                      <div class="card-body grow-1">
                        <h5 class="card-title">{{ $hotel->name }}</h5>
                        <p class="card-text">{{ $hotel->location }}</p>
                      </div>
                      {{-- end Title and Location --}}

                      {{-- Total Price --}}
                      <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                          <span>Period selected - {{ $stay_months }} months</span>
                        </li>
                          <li class="list-group-item">
                            <span>Start to - {{ $month_start->format("Y-m-d") }}</span>
                          </li>
                        <li class="list-group-item">
                          <span>{{ $hotel->total_price }} Euro</span>
                        </li>
                      </ul>
                      {{-- end Total Price --}}

                    </div>
                  </div>
                @endif
              @endif
            @endforeach

          </div>
        @endif
        {{-- end Print query results --}}

      </div>
    </div>
  </div>
@endsection
