<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Database
use Illuminate\Support\Facades\DB;

// use Hotel class model
use App\Hotel;

// use Pricelistrow class model
use App\Pricelistrow;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // All data from Hotel class model
        $hotels = Hotel::all();

        // Return to view index
        return view("index", compact("hotels"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // Data validation
      $request->validate(
        [
          "name" => "required|max:255",
          "location" => "required|max:255",
          "image" => "required|image",
          "month-1" => "max:9999,99",
          "month-2" => "max:9999,99",
          "month-3" => "max:9999,99",
          "month-4" => "max:9999,99",
          "month-5" => "max:9999,99",
          "month-6" => "max:9999,99",
          "month-7" => "max:9999,99",
          "month-8" => "max:9999,99",
          "month-9" => "max:9999,99",
          "month-10" => "max:9999,99",
          "month-11" => "max:9999,99",
          "month-12" => "max:9999,99"
        ]
      );
      // end Data validation

      // All data from request
      $request_data = $request->all();

      // Path images saved
      $path_image = $request->file('image')->store("images", "public");

      // Create new row in Hotel table
      $new_hotel = new Hotel();
      $new_hotel->name = $request_data['name'];
      $new_hotel->location = $request_data['location'];
      $new_hotel->image = $path_image;
      $new_hotel->save();

      // Create new rows in Pricelistrow table
      for ($i = 0; $i < 12; $i++) {
        $month_number = $i + 1;
        $month_string = "month-" . strval($month_number);
        $month_addzero = strval(sprintf('%02d', $month_number));

        // Only if the price field is not null
        if (!is_null($request_data[$month_string])) {
          $new_pricelistrow = new Pricelistrow();
          $new_pricelistrow->hotel_id = $new_hotel->id;
          $date = strtotime("2020-" . $month_addzero . "-01"); // date parse
          $new_pricelistrow->month = date("Y-m-d", $date); // date conversion
          $new_pricelistrow->price = $request_data[$month_string];
          $new_pricelistrow->save();
        }
      }

      // Redirect to view index
      return redirect()->route('hotels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      // return view("show");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    // Best price function
    public function bestPrice(Request $request)
    {
      // Request data
      $request_data = $request->all();

      // If user do not select start or end month
      if ($request_data["month_start"] === null || $request_data["month_end"] === null) {

        // All data from Hotel class model
        $hotels = Hotel::all();

        // Return to view index
        return view("index", compact("hotels"));
      }

      // Start date
      $month_start = date_create($request_data["month_start"]);

      // End date
      $month_end = date_create($request_data["month_end"]);

      // Calc the stay period
      $interval = date_diff($month_start, $month_end);
      $stay_months = intval($interval->format("%m") + 1);

      // Sql Query
      $best_price_hotel = DB::table("pricelistrows")
        ->select("hotels.id", "hotels.name", "hotels.location", "hotels.image")->distinct()
        ->selectRaw("COUNT(pricelistrows.id) as total_months")
        ->selectRaw("SUM(pricelistrows.price) as total_price")
        ->whereBetween("month", [$month_start, $month_end])
        ->join("hotels", function($join) {
            $join->on("hotels.id", "=", "pricelistrows.hotel_id");
          })
        ->groupBy("pricelistrows.hotel_id")
        ->having("total_months", "=", $stay_months)
        ->orderby("total_price", "ASC")
        ->get();

      // Return to view bestpriceshow
      return view("bestpriceshow", compact("best_price_hotel", "month_start", "month_end", "stay_months"));
    }
}
