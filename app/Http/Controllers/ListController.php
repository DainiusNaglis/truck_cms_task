<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\TrucksList;
use App\TruckBrands;
use Illuminate\Support\Facades\DB;

class ListController extends Controller

{

    /**

     * Display the products dashboard.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        $products = TrucksList::sortable()->paginate(10);

        return view('products', compact('products'));

    }


}
