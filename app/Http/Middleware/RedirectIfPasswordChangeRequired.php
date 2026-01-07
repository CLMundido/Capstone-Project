<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class RedirectIfPasswordChangeRequired
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        /** @var User|null $user */
        $user = Auth::user();

        // If logged in AND must change password AND not already on the change page
        if ($user && $user->must_change_password) {
            if (!$request->is('profile/change-password*')) {
                return redirect()->route('profile.change-password')
                    ->with('status', 'You must change your password before proceeding.');
            }
        }
        else {
            if ($request->routeIs('profile.change-password*')) {
                return redirect()->route('dashboard');
            }
        }

        return $next($request);
    }
}
