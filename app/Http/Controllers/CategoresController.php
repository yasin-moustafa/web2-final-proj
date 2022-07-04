<?php

namespace App\Http\Controllers;

use App\Models\Categore;
use Illuminate\Http\Request;

class CategoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categore.index',[
            'Categore'=>Categore::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categore.createCategore');
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
            'name'=>'required|String|min:3|max:20',
            'dec'=>'required|String|min:5|max:255',
        ]);
        $categore=new Categore();
        $categore->name=$request->post('name');
        $categore->dec=$request->post('dec');
        $categore->save();
        return redirect()->route('categore.index');

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
        $categore=Categore::findOrFail($id);
        return redirect()->route('categore.edit',['categore'=>$categore]);
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
        $category=Categore::findOrFail($id);
        $category->delete();
        return redirect()->route('categore.index');

    }
}
