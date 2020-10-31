{{-- index.blade.php --}}

{{-- Layouts app --}}
@extends('layouts.app')

@section("title")
  Hotels
@endsection

{{-- Yeld Content --}}
@section("content")
  <div class="container">
    <div class="row mt-5">
      <div class="col-12">

        {{-- Print query results --}}
        {{-- -> Alert if I have no result --}}
        @if (!count($best_price_hotel))
          <div class="alert_message alert alert-info">
            <p>There are no hotels that can guarantee a stay for the selected period of time</p>
          </div>

        {{-- -> Print if I have result --}}
        @else

          {{-- Variable that indicates the best price --}}
          @php
            $best_price = 0;
          @endphp


          {{-- Print the hotel with the best price --}}
          @foreach ($best_price_hotel as $hotel)
            @if ($best_price === 0)
              <div>
                {{ $hotel->total_price }}
              </div>
              @php
                $best_price = $hotel->total_price;
              @endphp

            {{-- If I have more than one hotel with the same price --}}
            @else
              @if ($best_price === $hotel->total_price)
                <div>
                  {{ $hotel->total_price }}
                </div>
              @endif
            @endif
          @endforeach
        @endif
        {{-- end Print query results --}}

      </div>
    </div>
  </div>
@endsection
