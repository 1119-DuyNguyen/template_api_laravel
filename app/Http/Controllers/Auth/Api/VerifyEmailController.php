<?php

namespace App\Http\Controllers\Auth\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class VerifyEmailController extends Controller
{
    /**
     * Mark the authenticated user's email address as verified.
     */
    public function verifyEmail($user_id, Request $request): RedirectResponse
    {

        $user = User::findOrFail($user_id);
        if ($user->hasVerifiedEmail()) {
            return redirect(config('services.frontend_url') . '/email/verify/already-success');
        }

        if ($user->markEmailAsVerified()) {
            event(new Verified($request->user()));
        }
        return redirect(config('services.frontend_url'). '/email/verify/success');
    }
}
