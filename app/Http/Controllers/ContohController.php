<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use resources\views\contoh;
use app\Http\Controllers\ContohController;

class ContohController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $judul = 'Ini Contoh Judul Blade';
        $products = ['Laptop', 'Mouse', 'Keyboard'];
        // return view ('contoh',['products'=>$products]);
        return view('contoh', compact('products', 'judul'));
    }


    public function coba(){
        $title = 'xxx';
        $header = 'ini adalah halaman coba';
        $iflogin = true;
        $products = ['Laptop', 'Mouse', 'Keyboard'];
        return view('coba', compact('title', 'header','iflogin','products'));
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
