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

   public function adminCheckLogin(Request $request): \Illuminate\Http\RedirectResponse
{
    $credentials = $request->validate([
        'email' => ['required', 'email'],
        'password' => ['required'],
    ]);

    $admin = Admin::where('email', $credentials['email'])->first();

    if ($admin && Hash::check($credentials['password'], $admin->password)) {
        Auth::guard('admin')->login($admin);

        return redirect()->route('dashboard')
            ->with('success', 'Hello ' . $admin->name);
    }

    return redirect()->back()
        ->with('error', 'Invalid email or password');
}
    
    public function logout(Request $request)
{
    if (Auth:: guard(name: 'Admin')->check())
     {
        Auth:: guard(name: 'Admin')->logout();
     }
    $request->sessionn()->incalidate();
    $request->sessionn()->regenerate();
    
    
}

}






