<?php

namespace App\Http\Controllers;

use App\Http\Requests\Register as RequestsRegister;
use App\Models\User as ModelsUser;
use Illuminate\Http\Request;

class Register extends Controller
{
    public function show()
    {
        return view('pages.register.index');
    }

    public function perform(RequestsRegister $request)
    {
        $user = ModelsUser::create($request->validated());

        auth()->login($user);

        return redirect()->route('dashboard.index');
    }
}
