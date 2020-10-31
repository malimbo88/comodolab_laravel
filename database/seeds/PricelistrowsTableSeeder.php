<?php

use Illuminate\Database\Seeder;

// use Pricelistrow class model
use App\Pricelistrow;

class PricelistrowsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      // Months (date 2020)
      $january_2020 = "2020-01-01";
      $february_2020 = "2020-02-01";
      $march_2020 = "2020-03-01";
      $april_2020 = "2020-04-01";
      $may_2020 = "2020-05-01";
      $june_2020 = "2020-06-01";
      $july_2020 = "2020-07-01";
      $august_2020 = "2020-08-01";
      $september_2020 = "2020-09-01";
      $october_2020 = "2020-10-01";
      $november_2020 = "2020-11-01";
      $december_2020 = "2020-12-01";

      // Hotels
      // => Rivaverde ----------------------------------------------------------
      // => => Array opening months and price
      $rivaverde = [
        "June" => [
          "date" => "2020-06-01",
          "price" => 300.00
          ],
        "July" => [
          "date" => "2020-07-01",
          "price" => 400.00
          ],
        "August" => [
          "date" => "2020-08-01",
          "price" => 500.00
        ],
        "September" => [
          "date" => "2020-09-01",
          "price" => 600.00
        ],
        "October" => [
          "date" => "2020-10-01",
          "price" => 500.00
        ],
        "November" => [
          "date" => "2020-11-01",
          "price" => 400.00
        ],
        "December" => [
          "date" => "2020-12-01",
          "price" => 300.00
        ]
      ];

      // => => Seed Pricelistrow for hotel Rivaverde
      foreach ($rivaverde as $month => $content) {
        $new_pricelistrow = new Pricelistrow();
        $new_pricelistrow->hotel_id = 1;
        $date = strtotime($content["date"]); // date parse
        $new_pricelistrow->month = date("Y-m-d", $date); // date conversion
        $new_pricelistrow->price = $content["price"];
        $new_pricelistrow->save();
      }

      // => Settimana Bianca ----------------------------------------------------------
      // => => Array opening months and price
      $settimana_bianca = [
        "January" => [
          "date" => "2020-01-01",
          "price" => 600.00
        ],
        "February" => [
          "date" => "2020-02-01",
          "price" => 500.00
        ],
        "March" => [
          "date" => "2020-03-01",
          "price" => 400.00
        ],
        "April" => [
          "date" => "2020-04-01",
          "price" => 300.00
        ],
        "July" => [
          "date" => "2020-07-01",
          "price" => 400.00
        ],
        "August" => [
          "date" => "2020-08-01",
          "price" => 400.00
        ],
        "September" => [
          "date" => "2020-09-01",
          "price" => 300.00
          ],
        "October" => [
          "date" => "2020-10-01",
          "price" => 400.00
          ],
        "November" => [
          "date" => "2020-11-01",
          "price" => 500.00
        ],
        "December" => [
          "date" => "2020-12-01",
          "price" => 800.00
        ],
      ];

      // => => Seed Pricelistrow for hotel Settimana Bianca
      foreach ($settimana_bianca as $month => $content) {
        $new_pricelistrow = new Pricelistrow();
        $new_pricelistrow->hotel_id = 2;
        $date = strtotime($content["date"]); // date parse
        $new_pricelistrow->month = date("Y-m-d", $date); // date conversion
        $new_pricelistrow->price = $content["price"];
        $new_pricelistrow->save();
      }

      // => Business ----------------------------------------------------------
      // => => Array opening months and price
      $business = [
        "January" => [
          "date" => "2020-01-01",
          "price" => 500.00
          ],
        "February" => [
          "date" => "2020-02-01",
          "price" => 500.00
          ],
        "March" => [
          "date" => "2020-03-01",
          "price" => 500.00
        ],
        "April" => [
          "date" => "2020-04-01",
          "price" => 500.00
        ],
        "May" => [
          "date" => "2020-05-01",
          "price" => 500.00
        ],
        "June" => [
          "date" => "2020-06-01",
          "price" => 500.00
        ],
        "July" => [
          "date" => "2020-07-01",
          "price" => 500.00
        ],
        "September" => [
          "date" => "2020-09-01",
          "price" => 500.00
        ],
        "October" => [
          "date" => "2020-10-01",
          "price" => 500.00
        ],
        "November" => [
          "date" => "2020-11-01",
          "price" => 500.00
        ],
      ];

      // => => Seed Pricelistrow for hotel Business
      foreach ($business as $month => $content) {
        $new_pricelistrow = new Pricelistrow();
        $new_pricelistrow->hotel_id = 3;
        $date = strtotime($content["date"]); // date parse
        $new_pricelistrow->month = date("Y-m-d", $date); // date conversion
        $new_pricelistrow->price = $content["price"];
        $new_pricelistrow->save();
      }

      // => Pizza Margherita ----------------------------------------------------------
      // => => Array opening months and price
      $pizza_margherita = [
        "January" => [
          "date" => "2020-01-01",
          "price" => 500.00
          ],
        "February" => [
          "date" => "2020-02-01",
          "price" => 200.00
          ],
        "June" => [
          "date" => "2020-06-01",
          "price" => 400.00
        ],
        "July" => [
          "date" => "2020-07-01",
          "price" => 600.00
        ],
        "August" => [
          "date" => "2020-08-01",
          "price" => 800.00
        ],
        "September" => [
          "date" => "2020-09-01",
          "price" => 400.00
        ],
        "October" => [
          "date" => "2020-10-01",
          "price" => 200.00
        ],
        "November" => [
          "date" => "2020-11-01",
          "price" => 400.00
        ],
        "December" => [
          "date" => "2020-12-01",
          "price" => 800.00
        ],
      ];

      // => => Seed Pricelistrow for hotel Pizza Margherita
      foreach ($pizza_margherita as $month => $content) {
        $new_pricelistrow = new Pricelistrow();
        $new_pricelistrow->hotel_id = 4;
        $date = strtotime($content["date"]); // date parse
        $new_pricelistrow->month = date("Y-m-d", $date); // date conversion
        $new_pricelistrow->price = $content["price"];
        $new_pricelistrow->save();
      }

      // => Mare Bello ----------------------------------------------------------
      // => => Array opening months and price
      $mare_bello = [
        "April" => [
          "date" => "2020-04-01",
          "price" => 200.00
          ],
        "May" => [
          "date" => "2020-05-01",
          "price" => 200.00
          ],
        "June" => [
          "date" => "2020-06-01",
          "price" => 600.00
        ],
        "July" => [
          "date" => "2020-07-01",
          "price" => 800.00
        ],
        "August" => [
          "date" => "2020-08-01",
          "price" => 900.00
        ],
        "September" => [
          "date" => "2020-09-01",
          "price" => 400.00
        ],
        "October" => [
          "date" => "2020-10-01",
          "price" => 100.00
        ],
        "November" => [
          "date" => "2020-11-01",
          "price" => 100.00
        ],
        "December" => [
          "date" => "2020-12-01",
          "price" => 500.00
        ],
      ];

      // => => Seed Pricelistrow for hotel Mare Bello
      foreach ($mare_bello as $month => $content) {
        $new_pricelistrow = new Pricelistrow();
        $new_pricelistrow->hotel_id = 5;
        $date = strtotime($content["date"]); // date parse
        $new_pricelistrow->month = date("Y-m-d", $date); // date conversion
        $new_pricelistrow->price = $content["price"];
        $new_pricelistrow->save();
      }

    }
}
