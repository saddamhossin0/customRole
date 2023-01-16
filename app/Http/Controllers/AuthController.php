<?php

namespace App\Http\Controllers;

use App\Models\User;
use Brian2694\Toastr\Facades\Toastr;
use Cartalyst\Sentinel\Checkpoints\NotActivatedException;
use Cartalyst\Sentinel\Checkpoints\ThrottlingException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Sentinel;

class AuthController extends Controller
{
    public function login(){
        return view('admin.login');
    }
    public function postLogin(Request $request)
    {
        if ($request->has('email') && $request->email != ''):
            $user = User::where('email', $request->email)->first();
        endif;
        if (blank($user)):
            Toastr::error(__('User Not Found'));
            return redirect()->route('login');
        endif;
        if ($request->has('email')):
            if (!Hash::check($request->get('password'), $user->password)):
                Toastr::error(__('Invalid credentials'));
                return redirect()->route('login');
            endif;
            $credentials = ['email' => $request->email, 'password' => $request->password];
        endif;
        try {
            Sentinel::authenticate($credentials);
            Toastr::success(__('Login Successful'));
            return redirect()->route('dashboard');
        } catch (NotActivatedException $e) {
            Toastr::warning(__('Your account is not verified.Please verify your account.'));
            return redirect()->route('login');
        }
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        try {

            Sentinel::logout();
            if (request()->ajax()) {
                session()->flush();
                session()->regenerate();
                $token = csrf_token();
                return response()->json([
                    'success' => __('Logout successfully'),
                    'token' => $token,
                ]);
            }
            Toastr::success(__('Logout successfully'));

            return redirect()->route('login');

        } catch (\Exception $e) {
            if (request()->ajax()) {
                return response()->json([
                    'error' => __('Oops...Something Went Wrong')
                ]);
            } else {
                return back();
            }
        }
    }
}
