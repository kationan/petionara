<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\User;
use App\Models\Role;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        view()->composer('*',function($view) {
            $view->with('user', $this->getPropertyUser());
            // $view->with('social', Social::all()); 
        });
    }

    public function getPropertyUser(){
        // dd(auth()->user());
        if(auth()->user() != null){
            $user = User::with('roles')->find(auth()->user()->id);
            return $user;
        }
    
    }
}
