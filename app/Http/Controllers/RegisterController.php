<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $register=DB::table('us')->get();
       return view('user',['register' => $register]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $register=DB::table('us')->insert([
            
        'name'=>$request->name,
        'email'=>$request->email,
        'roll'=>$request->rollno

        ]);
       return redirect('users');
   }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {


        $register=DB::table('us')->where('id',$id)->get();
       return view('edit',['register' => $register]);
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $register=DB::table('us')
                ->where('id',$id)
                ->update(['name'=>$request->name]);
            
                return $register;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $register=DB::table('us')
        ->where('id',$id)
        ->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'roll'=>$request->rollno
        ]);
       return redirect()->route('userindex');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

    }
}
