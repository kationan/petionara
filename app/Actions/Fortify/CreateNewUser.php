<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'surname' =>['required', 'string', 'max:225'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'pays'=> ['required', 'string'],
            'ville'=> ['required', 'string'],
            'fonction'=> ['required', 'string'],
            'password' => $this->passwordRules(),
            'contact' => ['required', 'max:13'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'prenom' =>$input['surname'],
            'pays_id'=> 0,// bad ways change it after
            'ville'=> $input['ville'],
            'fonction'=> $input['fonction'],
            'contact' => $input['contact'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
