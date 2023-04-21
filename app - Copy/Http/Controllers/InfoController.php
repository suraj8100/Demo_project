<?php

namespace App\Http\Controllers;

use App\Models\emp_info;
use App\Models\hobbie;
use App\Models\User;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $data=hobbie::all();
        return view('admin/add_info',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $info = $request->validate([
        //     'emp_name' => 'required',
        //     'contect' => 'required',
        //     'email' => 'required',
        //     'role' => 'required',
        // ]);
    
        $check_hobbie = $request->input('hobbi');
        $hobbie = implode(',', $check_hobbie);
    
        $data = new emp_info();
        $data->role = $request->role;
        $data->emp_name = $request->name;
        $data->contect = $request->contect;
        $data->email =$request->email;
        $data->Hobbie_id = $hobbie;
        $data->save();
        return "Data saved successfully";
    }

    /**
     * Display the specified resource.
     */

    public function info_show(Request $request)
    { $search = $request['search'] ?? "";
        if ($search != "") {
            $data = emp_info::where('emp_name', 'LIKE', "%$search%")->orwhere('email', 'LIKE', "%$search%")->orwhere('contect', 'LIKE', "%$search%")->get();
        } 
        else {
            $data = emp_info::all();
        }
        $all_data = compact('search','data');
        return view('admin/info', $all_data);
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function view_data($id)
    {
        $data = emp_info::where('id',$id)->first();
        $array=explode(',',$data->Hobbie_id);
        
        return view('admin/view',compact('array'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
