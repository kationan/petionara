<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cotisation;

class CotisationController extends Controller
{
    public function index(){
        $transactions = Cotisation::where("user_id", auth()->user()->id)->get();
        // dd($transactions);
        return view("dashboard", ['transactions'=>$transactions]);
    }
    public function newTransaction(){
        return view("dashboard");
    }
}
