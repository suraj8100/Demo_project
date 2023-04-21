<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('auth.register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt($data, $request->remember)) {
            

            return view('admin/dashboard');
        }

       return redirect()->back()->with('error','The provided credentials do not match our records');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validateData=$request->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required'
        ]);

        $data=new User;
        $data->name=$validateData['name'];
        $data->email=$validateData['email'];
        $data->password=bcrypt($validateData['password']);
        $data->save();
        Auth::login($data);
        
        return redirect('/dashbard')->with('success','signup successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        return view('admin/dashboard');
    }

    /**
     * Show the form for editing the specified resource.
     */
   
}
