{{-- index.blade.php --}}

{{-- Layouts app --}}
@extends('layouts.app')

@section("title")
  Hotels
@endsection

{{-- Yeld Content --}}
@section("content")
  <div class="container">
    <div class="row">
      <div class="col-12">

        {{-- Form Options months --}}
        <form  action="{{ route("hotels.bestprice") }}" method="post">
          @csrf
          @method('POST')
          <div class="row mt-5">

            {{-- Input month start --}}
            <div class="col-5">
              <select id="start_select" class="custom-select" name="month_start">
                <option class="first_options" value="">select starting month</option>
                <option value="2020-01-01">January</option>
                <option value="2020-02-01">February</option>
                <option value="2020-03-01">March</option>
                <option value="2020-04-01">April</option>
                <option value="2020-05-01">May</option>
                <option value="2020-06-01">June</option>
                <option value="2020-07-01">July</option>
                <option value="2020-08-01">August</option>
                <option value="2020-09-01">September</option>
                <option value="2020-10-01">October</option>
                <option value="2020-11-01">November</option>
                <option value="2020-12-01">December</option>
              </select>
            </div>
            {{-- end Input month start --}}

            {{-- Input month end --}}
            <div class="col-5">
              <select id="end_select" class="custom-select" name="month_end">
                <option class="first_options" value="">select end month</option>
                <option class="" value="2020-01-01">January</option>
                <option class="" value="2020-02-01">February</option>
                <option class="" value="2020-03-01">March</option>
                <option class="" value="2020-04-01">April</option>
                <option class="" value="2020-05-01">May</option>
                <option class="" value="2020-06-01">June</option>
                <option class="" value="2020-07-01">July</option>
                <option class="" value="2020-08-01">August</option>
                <option class="" value="2020-09-01">September</option>
                <option class="" value="2020-10-01">October</option>
                <option class="" value="2020-11-01">November</option>
                <option class="" value="2020-12-01">December</option>
              </select>
            </div>
            {{-- end Input month end --}}

            {{-- Submit --}}
            <div class="col-2">
              <button type="submit" class="btn btn-primary w-100">Search</button>
            </div>
            {{-- end Submit --}}

          </div>
        </form>
        {{-- end Form Options months --}}

        {{-- Hotels cards --}}
        <div class="row mt-5 mb-5">
          @foreach ($hotels as $hotel)
            <div class="col-12 col-lg-4 mb-5 d-flex justify-content-center">
              <div class="card">
                <img class="card-img-top" src="{{ asset("img") . "/" . $hotel->image }}" alt="Card image cap">

                {{-- Title and Location --}}
                <div class="card-body grow-1">
                  <h5 class="card-title">{{ $hotel->name }}</h5>
                  <p class="card-text">{{ $hotel->location }}</p>
                </div>
                {{-- end Title and Location --}}

                {{-- Opening month and Price --}}
                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <span>Opening Month and Price</span>
                  </li>
                  @foreach ($hotel->pricelistrows as $row)
                  <li class="list-group-item">
                    @if ($row->month === "2020-01-01 00:00:00")
                      <span>January - </span>
                    @elseif ($row->month === "2020-02-01 00:00:00")
                      <span>February - </span>
                    @elseif ($row->month === "2020-03-01 00:00:00")
                      <span>March - </span>
                    @elseif ($row->month === "2020-04-01 00:00:00")
                      <span>April - </span>
                    @elseif ($row->month === "2020-05-01 00:00:00")
                      <span>May - </span>
                    @elseif ($row->month === "2020-06-01 00:00:00")
                      <span>June - </span>
                    @elseif ($row->month === "2020-07-01 00:00:00")
                      <span>July - </span>
                    @elseif ($row->month === "2020-08-01 00:00:00")
                      <span>August - </span>
                    @elseif ($row->month === "2020-09-01 00:00:00")
                      <span>September - </span>
                    @elseif ($row->month === "2020-10-01 00:00:00")
                      <span>October - </span>
                    @elseif ($row->month === "2020-11-01 00:00:00")
                      <span>November - </span>
                    @elseif ($row->month === "2020-12-01 00:00:00")
                      <span>December- </span>
                    @endif
                    <span>Price: {{ $row->price }} Euro</span>
                  </li>
                  @endforeach
                </ul>
                {{-- Opening month and Price --}}

              </div>
            </div>
          @endforeach
        </div>
        {{-- end hotels cards --}}

      </div>
    </div>
  </div>
@endsection
