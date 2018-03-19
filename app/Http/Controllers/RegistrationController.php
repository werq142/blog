<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create()
    {
    	return view('registration.create');
    }
    public function store(RegistrationForm $form)
    {
        //$form->persist();
        $user = \App\User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => bcrypt(request('password'))
        ]);
        auth()->login($user);
        session()->flash('message', 'Signed up');
        return redirect()->home();
    }
}
