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
        return view("index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //
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
        return view("index");
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
        ->select('hotels.id', 'hotels.name')->distinct()
        ->selectRaw("count('pricelistrows.id') as total_months")
        ->selectRaw("SUM(pricelistrows.price) as total_price")
        ->whereBetween("month", [$month_start, $month_end])
        ->join("hotels", function($join) {
            $join->on("hotels.id", "=", "pricelistrows.hotel_id");
          })
        ->groupBy('pricelistrows.hotel_id')
        ->having("total_months", "=", $stay_months)
        ->orderby('total_price', 'ASC')
        ->get();

      // Return to view show
      return view("bestpriceshow", compact("best_price_hotel"));
    }
}
