<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerifyCodeController extends Controller
{
    public function index()
    {
        return view('auth.verify-code');
    }

    public function store(Request $request)
    {
        // 1. Validate both inputs
        $request->validate([
            'id_number' => 'required|string',
            'code' => 'required|numeric',
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();

        // 2. Check if BOTH the ID Number and the OTP match the logged-in user
        if (
            $user->id_number === $request->id_number &&
            $user->auth_code === $request->code &&
            now()->isBefore($user->auth_code_expires_at)
        ) {

            // Success: Clear the security fields
            $user->update([
                'auth_code' => null,
                'auth_code_expires_at' => null,
                'email_verified_at' => now(),
            ]);

            return redirect()->intended('/dashboard');
        }

        // 3. If either fails, return with an error
        return back()->withErrors([
            'code' => 'The ID Number or Authentication Code is incorrect or has expired.',
        ]);
    }
}
