<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
        return view('account.index');
    }



    public function viewUpdatePassword()
    {
        return view('auth.UpdatePassword');
    }



    public function updatePassword(Request $request)
    {
        (new \App\Actions\Fortify\UpdateUserPassword())->update(auth()->user(), [
            'current_password' => $request->current_password,
            'password' => $request->password,
            'password_confirmation' => $request->password_confirmation,
        ]);
        return redirect()->back()->with(['success' => 'Articolo inserito correttamente']);
    }
}
