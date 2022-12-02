<?php

namespace App\Http\Controllers;

use App\Http\Requests\Login as RequestsLogin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Login extends Controller
{
    public function show()
    {
        return view('pages.login.index');
    }

    public function perform(RequestsLogin $request)
    {
        $credentials = $request->getCredentials();

        if (!Auth::validate($credentials))
        {
            return redirect()->to('login')->withErrors(trans('auth.failed'));
        }

        $user = Auth::getProvider()->retrieveByCredentials($credentials);

        Auth::login($user);

        return $this->authenticated($request, $user);
    }

    protected function authenticated(Request $request, $user)
    {
        return redirect()->intended();
    }
}
