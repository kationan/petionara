<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\Builder;
use App\Models\Cotisation;
use Validator;
use App\Models\User;
class CotisationController extends Controller
{
    public function index(){  
        $userRole = $this->getUserWithRole();
          
        if($userRole == "Ahg7iu/we3-R5g47"){
            $transactions = Cotisation::all();
        }
        else{
            $transactions = Cotisation::where("user_id", auth()->user()->id)->get();
        }
        $this->tabviewCotisation($transactions);

        return view("dashboard", ['transactions'=>$transactions]);
    }
    public function newTransaction(){
        return view("dashboard");
    }
    public function tabviewCotisation($transactions ){
        foreach($transactions as $transaction){
            
        }
    }
    public function registerNewCotisations(Request $request){
        // dd($request);
        $v = Validator::make($request->all(),[
            "type_cotisation"=>"required",
            "name"=>"required",
            "surname"=>"required",
            "mois"=>"required",
            "annee"=>"required",
            "date_paiement"=>"required",
            "montant"=>"required",
        ]);
        if ($v->fails()){
            dd($v->errors());
            return redirect()->back()->withErrors($v->errors());
        }
        else{
            // dd(User::where("prenom", $request['surname'])->get("id"));
            $user_id = User::where("prenom", $request['surname'])->get("id");
            $cotisation = new Cotisation;
            $cotisation->user_id = $user_id[0]["id"];
            $cotisation->type_cotisation = $request['type_cotisation'];
            $cotisation->annee = $request["annee"];
            $cotisation->paye_le = $request["date_paiement"];
            $cotisation->montant = $request["montant"];
            $cotisation->save();
            return view("dashboard")->withMessage("success");
        }
    }
    public function getUserWithRole(){
        $user = User::with("roles")->find(auth()->user()->id);
        return $user->roles[0]["role_uuid"];
    }
}
