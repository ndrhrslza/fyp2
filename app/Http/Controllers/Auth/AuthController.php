<?php

namespace App\Http\Controllers\Auth;

use Mail;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Mail\ForgotPasswordMail;

class AuthController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }
    public function submitRegister(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => [
                'required',
                'string',
                'min:12',
                'regex:/[A-Z]/',
                'regex:/[a-z]/',
                'regex:/[0-9]/',
                'regex:/[@$!%*?&]/',
                'confirmed',
            ],
        ], [
            'password.min' => 'The password must be at least 12 characters.',
            'password.regex' => 'The password must contain at least one uppercase letter, one lowercase letter, one digit, and one special character.',
            'password.confirmed' => 'The password confirmation does not match.',
        ]);


        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $role = 'user';
        if ($request->is_admin) {
            $role = 'admin';
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        alert()->success('Success', 'Your account has been successfully registered!');
        return redirect()->route('login');
    }

    public function login()
    {
        return view('auth.login');
    }
    public function submitLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $userId = Auth::id();

            $user = User::find($userId);
            $user->last_login_at = now();
            $user->save();

            return redirect()->intended('dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function forgotPassword()
    {
        return view('auth.forgot-password');
    }

    public function forgotPasswordEmail(Request $request)
    {
        $email = $request->email;
        $encrytemail = md5($email);
        $resetlink = "http://127.0.0.1:8000/reset-password/$encrytemail";

        $user = User::where("email", $email)->first();
        if(!empty($user)){

            Mail::to($email)->send(new ForgotPasswordMail($resetlink));

            alert()->success('Success', 'reset link has been sent to your email.');
            return redirect()->back();

        }else{
            return redirect()->back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }

    }

    public function resetPassword(Request $request)
    {
        $md5email = $request->md5email;
        return view('auth.reset-password')->with(['md5email' => $md5email]);
    }

    public function resetPasswordUpdate(Request $request)
    {
        $this->validate($request, [
            'md5email' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);

        $user_email = "";
        $md5email = $request->md5email;

        $users = User::all();
        foreach ($users as $user){

            $checkingmd5email = md5($user->email);

            if($checkingmd5email == $md5email){

                $user_id = $user->id;
                $user_email = $user->email;

                $affected = User::where('id', $user_id)
                    ->update([
                        'password' => Hash::make($request->password),
                    ]);

                break;
            }
        }

        alert()->success('Success', 'password for '.$user_email.' has been updated.');
        return redirect()->back();

    }

}
