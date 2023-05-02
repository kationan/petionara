<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Models\User;
use App\Notifications\NewUserNotifcation;
class HomeController extends Controller
{
    public function index(){
        return view("dashboard");
    }
    public function newCotisationRequest(){

        return view("dashboard");
    }
    public function registerMembers(Request $request){
        $v = Validator::make($request->all(),[
            "name"=>"required",
            "surname"=>"required",
            "pays"=>"required",
            "ville"=>"required",
            "contact"=>"required",
            "fonction"=>"required",
            "password"=>"required",
        ]);
        if ($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }
        else{
            $user = new User;
            $user->name = $request["name"];
            $user->prenom = $request["surname"];
            $user->email = $request["email"];
            $user->pays = $request["pays"];
            $user->ville = $request["ville"];
            $user->contact = $request["contact"];
            $user->fonction = $request["fonction"];
            $user->password = $request["password"];
            $checkuser = $this->verifyIfUserExist($user);
            if(!$checkuser){
                $res = $user->save();
            }
            else{
                return back()->withInput()->with('message', 'L\'utilisateur que vous essayer de
                 creer existe déja dans la base de données des utilisateurs');
            }
            if($res){
                $user->notify(new NewUserNotifcation($user));
            }
            return view("dashboard");
        }
        
    }
    public function verifyIfUserExist($user){
        $user_email = $user["email"];
        if(DB::table("users")->where('email', $user_email)->exists()){
            return true;
        }
        else{
            return false;
        }
    }
}
