<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SubscriptionController extends Controller
{
    public function index() {
        return view('subscription.create');
    }

    public function store(Request $request) {
        $data = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'org_name' => 'required|string|max:255',
            'industry' => 'required|string',
            'plan' => 'required|string',
            'theme_color' => 'required|string',
        ]);

        // Generate a temporary password
        $tempPassword = Str::random(10);

        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($tempPassword),
            'org_name' => $data['org_name'],
            'industry' => $data['industry'],
            'plan_type' => $data['plan'],
            'theme_color' => $data['theme_color'],
            'id_number' => 'ADM-' . strtoupper(Str::random(5)),
            'must_change_password' => true,
        ]);

        // In a real project, you'd mail the $tempPassword here.
        // For your capstone demo, we will flash it to the session.
        return redirect()->route('login')->with('status', "Account Created! Temp Password: $tempPassword (Copy this for demo)");
    }
}
