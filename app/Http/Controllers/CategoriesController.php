<?php

namespace App\Http\Controllers;

use App\Categories;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Categories::all();

        return view ('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function add()
    {
         return view('categories.add');
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
   
    public function save(Request $request)
    {
        // cek data submit
        // dd($request->all());


        $request->validate([
            'name' => 'required',
            
        ]);
  
        Categories::create($request->all());
   
        return redirect()->route('categories.index')
                        ->with('success','categories created successfully.');
    }



    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function edit(Categories $categories)
    {
        $categories = Categories::find($id);
        return view('categories.edit', ['Categories' => $categories]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories = Categories::find($id);
        $categories -> update($request->all());
        return redirect()->route('categories.index')
        ->with('success','Update data successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Categories  $categories
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request, $id)
    {
        $categories = Categories::find($id);
        $categories -> delete($categories);
        return redirect()->route('categories.index')
        ->with('success','Delete data successfully.');
    }
}
