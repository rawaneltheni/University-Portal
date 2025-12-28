<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{

public function adminLogin()
    {
        return view(view: 'Auth.admin');
    }

    public function adminCheckLogin(Request $request): RedirectResponse
    {
        $credentials=$request->validate(rules: [
            'email'=>['required','email'],
            'password'=>['required']
        ]);
        $admin=Admin::where(column: 'email',operator: $credentials['email'])->first();
        if($admin && Hash::check(value: $credentials['password'], hashedValue: $admin->password))
        {
             Auth::guard(name: 'admin')->login(user: $admin);
             return redirect()->route(route: 'dashboard')->with(key: 'suceess',Value: 'Hello'.$admin->name);
        }
        return redirect()->back()->with(key: 'error',value: 'invalid email or password');
    }
    
    public function logout(Request $request)
{
    if (Auth:: guard(name: 'Admin')->check())
     {
        Auth:: guard(name: 'Admin')->logout();
     }
    $request->sessionn()->incalidate();
    $request->sessionn()->reg(nnerate);
    
    
}

}






