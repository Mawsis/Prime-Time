<?php

namespace App\Http\Controllers;

use App\Models\Purchase;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function store()
    {
        Purchase::create([
            "user_id"=>auth()->user()->id,
            "product_id"=>request("product"),
        ]);
        redirect("/")->with("success","Purchased With Success");
    }
}
