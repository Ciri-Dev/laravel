<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class productosController extends Controller
{
    public function getPDF()
    {   
        $name = "Juan Perez"; 
        $pdf = Pdf::loadView('pdf_example', compact('name'));
        return $pdf->stream('prueba.pdf');
    }

    public function index()
    {
        return view('productos');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function crear()
    {
        return view('crear');
    }

    public function dataformulario(Request $request)
    {
        return $request->input('nombre');
    }
    
    public function app()
    {
        return view('app');
    }

    public function home()
    {
        return view('home');
    }
    



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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
