<?php

namespace App\Http\Controllers;

use App\Models\Snack;
use Illuminate\Http\Request;

class SnackCRUDController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('crud.snack.index', [
            'snacks'=>Snack::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('crud.snack.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validatedData = $request->validate([
            'nama' => 'required|max:100',
            'harga'=> 'required|max:100'
        ]);

        Snack::create($validatedData);
        return redirect('/crud/snack');
    }

    /**
     * Display the specified resource.
     */
    public function show(Snack $snack)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Snack $snack)
    {
        //
        return view('crud.snack.edit', [
            'snack' => $snack
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Snack $snack)
    {
        //
        $validatedData=$request->validate([
            'nama' => 'required',
            'harga' => 'required',
        ]);
    
        //$snack->update($request->all());
        Snack::where('id', $snack->id)->update($validatedData);

        return redirect('/crud/snack');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Snack $snack)
    {
        //
        Snack::destroy($snack->id);
        return redirect('/crud/snack');
    }
}
