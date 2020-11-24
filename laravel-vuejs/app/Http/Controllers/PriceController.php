<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Prices;

class PriceController extends Controller
{
    public function getAllPrice() {
        return response()->json(['status' => true, 'items' => Prices::all()->toArray()])->setStatusCode(Response::HTTP_OK);
    }
}
