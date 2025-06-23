<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    public function store(){
        //validate
        $attributes = request()->validate([
            'email'=>['required','email'],
            'password'=>['required']
        ]);

        //attempt to login the user
        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email'=> 'Désolé, vos information sont incorrecte'
            ]);
        }  //attempt qui renvoi un boolean

        //regenerate the token session
        request()->session()->regenerate();

        //redirect
        return redirect('/');
    }

    public function destroy(){
        Auth::logout();

        return redirect('/');
    }

}
