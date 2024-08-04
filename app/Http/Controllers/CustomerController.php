<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function userlogin()
    {
        return view('website.login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $data = Customer::where('email', $request->email)->first();
        if ($data) {
            if (Hash::check($request->password, $data->password)) {
                $request->session()->put('cus-auth', $data);
                return redirect('/')->withSuccess('succesfully logged in');
            }
        }
        return redirect('/')->with(['error' => 'Oppes! You have entered invalid credentials']);
    }

    public function userReg()
    {
        return view('website.signup');
    }

    public function userRegistraion(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email',
            'phone' => 'required|numeric', // Adjust validation as needed
            'password' => 'required|min:6|confirmed',
        ]);

        // Create a new customer
        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->email = $request->input('email');
        $customer->number = $request->input('phone');
        $customer->password = Hash::make($request->input('password'));
        $customer->save();
        $request->session()->put('cus-auth', $customer);
        return redirect(url('/'))->with('success', 'Registration successful!');
    }

    public function Cuslogout()
    {
        request()->session()->forget('cus-auth');
        return redirect('/');
    }
}
