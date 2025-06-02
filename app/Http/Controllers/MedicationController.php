<?php

namespace App\Http\Controllers;

use App\Models\Medication;
use Illuminate\Http\Request;

class MedicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $medications = Medication::all();
        return view('medications.index', compact('medications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('medications.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required|string|max:100',
            'batch'=> 'nullable|string|max:50',
            'expiration_date'=>'required|date',
            'quantity'=> 'required|integer|min:0',

        ]);

        Medication::create($request->all());

        return redirect()->route('medications.index')->with('success', 'Medicamento agregado correctamente. ');
    }

    /**
     * Display the specified resource.
     */
    public function show(Medication $medication)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Medication $medication)
    {
        //
        return view('medications.edit', compact('medication'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Medication $medication)
    {
        //
        $request->validate([
            'name'=> 'required|string|max:100',
            'batch'=> 'nullable|string|max:50',
            'expiration_date'=>'required|date',
            'quantity'=> 'required|integer|min:0',
        ]);

        $medication->update($request->all());

        return redirect()->route('medications.index')->with('success','Medicamento actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Medication $medication)
    {
        //
        $medication ->delete();

        return redirect()->route('medications.index')->with('success','Medicamento eliminado correctamente');
    }
}
