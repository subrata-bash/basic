<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
    public function adminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::findOrFail($id);
        return view('admin.admin_profile', [
            'profileData' => $profileData,
        ]);
    }
}
