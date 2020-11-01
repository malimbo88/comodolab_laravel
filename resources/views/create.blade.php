{{-- create.blade.php --}}

{{-- Layouts app --}}
@extends('layouts.app')

@section("title")
  Hotels
@endsection

{{-- Yeld Content --}}
@section("content")
  <div class="container">
    <div class="row mt-5 mb-5">
      <div class="col-12 text-center">

        <h2>Hotels Create</h2>

        {{-- Error validation --}}
        @if ($errors->any())
          <div class="row mt-5">
            <div class="col-12">
              <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
                </ul>
              </div>
            </div>
          </div>
        @endif
        {{-- end Error validation--}}

        {{-- Form create --}}
        <form action="{{ route('hotels.store') }}" method="post" enctype="multipart/form-data">
          @csrf
          @method('POST')

          {{-- Create Hotel name --}}
          <div class="row mt-5">
            <div class="col-12">
              <div class="form-group">
                <input
                  type="text"
                  name="name"
                  value="{{ old('title') }}"
                  class="form-control"
                  placeholder="Name">
              </div>
            </div>
          </div>
          {{-- end Create Hotel name --}}

          {{-- Create Hotel location --}}
          <div class="row">
            <div class="col-12">
              <div class="form-group">
                <input
                  type="text"
                  name="location"
                  value="{{ old('location') }}"
                  class="form-control"
                  placeholder="Location">
              </div>
            </div>
          </div>
          {{-- end Create Hotel location --}}

          {{-- Create Hotel image --}}
          <div class="row">
            <div class="col-12">
              <div class="input-group">
                <div class="custom-file text-left">
                  <input
                    id="inputGroupFile02"
                    type="file"
                    accept="image/*"
                    name="image"
                    onchange="loadFile(event)"
                    value="{{ old('image') }}"
                    class="custom-file-input"
                    required>
                  <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Choose file</label>
                </div>
              </div>
            </div>
          </div>
          {{-- end Create Hotel image --}}

          {{-- Title opening month --}}
          <div class="row mt-5 mb-5">
            <div class="col-12">
              <h2>Opening Months</h2>
            </div>
          </div>
          {{-- end Title opening month --}}

          {{-- For each months --}}
          @for ($i = 0; $i < 12; $i++)

            {{-- Create Hotel price --}}
            <div class="row">
              <div class="col-12">
                <div class="row">

                  @if ($i === 0)
                    <div class="col-2">
                      <span>January</span>
                    </div>
                  @elseif ($i === 1)
                    <div class="col-2">
                      <span>February</span>
                    </div>
                  @elseif ($i === 2)
                    <div class="col-2">
                      <span>March</span>
                    </div>
                  @elseif ($i === 3)
                    <div class="col-2">
                      <span>April</span>
                    </div>
                  @elseif ($i === 4)
                    <div class="col-2">
                      <span>May</span>
                    </div>
                  @elseif ($i === 5)
                    <div class="col-2">
                      <span>June</span>
                    </div>
                  @elseif ($i === 6)
                    <div class="col-2">
                      <span>July</span>
                    </div>
                  @elseif ($i === 7)
                    <div class="col-2">
                      <span>August</span>
                    </div>
                  @elseif ($i === 8)
                    <div class="col-2">
                      <span>September</span>
                    </div>
                  @elseif ($i === 9)
                    <div class="col-2">
                      <span>October</span>
                    </div>
                  @elseif ($i === 10)
                    <div class="col-2">
                      <span>November</span>
                    </div>
                  @elseif ($i === 11)
                    <div class="col-2">
                      <span>December</span>
                    </div>
                  @endif

                  <div class="col-10">
                    <div class="form-group">
                      <input
                        type="number"
                        name="{{ "month" . "-" . strval($i + 1) }}"
                        value="{{ old( "month" . "-" . strval($i + 1) ) }}"
                        step="any"
                        class="form-control"
                        placeholder="Price">
                    </div>
                  </div>

                </div>
              </div>
            </div>
            {{-- end Create Hotel price --}}

          @endfor
          {{-- end For each months --}}

          {{-- Submit --}}
          <div class="row row mt-5 mb-5">
            <div class="col-12">
              <button type="submit" class="btn btn-primary w-100">Create</button>
            </div>
          </div>
          {{-- end Submit --}}

        </form>
        {{-- end Form create --}}
      </div>
    </div>
  </div>
@endsection
