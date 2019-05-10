<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categorys;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categorys = Categorys::all();
        return view('categories.index', compact('categorys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required'
            
          ]);
          $image = $request->file('image');
            
            $destinationPath = 'public/upload/'; // upload path
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);

    
        
          $share = new Categorys([
            'name' => $request->get('name'),
            'description'=> $request->get('description'),
            'image'=>$profileImage ,

            'status'=> $request->get('status')
            
          ]);
        
          $share->save();
          return redirect('/categorys')->with('success', 'Stock has been added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        
        $share = Categorys::find($id);
     $share->delete();

     return redirect('/categorys')->with('success', 'Categorys has been deleted Successfully');
     

    }
}
