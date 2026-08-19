<?php
namespace App\Http\Controllers;

use App\Models\User;
use App\Services\AccountAccessService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;

class DoctorAuthController extends Controller
{
    public function showLogin() { return view('doctor.auth.login'); }

    public function login(Request $request)
    {
        $data = $request->validate(['email'=>['required','email'],'password'=>['required','string']]);
        $key = Str::lower($data['email']).'|'.$request->ip();

        if (RateLimiter::tooManyAttempts($key, 5)) {
            return back()->withErrors(['email'=>'Too many attempts. Please try again later.'])->onlyInput('email');
        }

        $user = User::where('email', $data['email'])->where('role','doctor')->first();
        if (! $user || ! $user->doctor || ! $user->doctor->is_active || ! Auth::attempt(['email'=>$data['email'],'password'=>$data['password']], $request->boolean('remember'))) {
            RateLimiter::hit($key, 60);
            return back()->withErrors(['email'=>'The doctor credentials are incorrect or the account is inactive.'])->onlyInput('email');
        }

        RateLimiter::clear($key);
        $request->session()->regenerate();
        return redirect()->intended(route('doctor.dashboard'));
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('doctor.login');
    }
}
