<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Product;

class ProduktyController extends Controller
{


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $allProducts = Product::all();

        return view('products.index', ['products' => $allProducts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // server side validation
        $validatedData = $request->validate([
            'vyrobce' => 'required|max:255',
            'model' => 'required|max:255',
            'barva' => 'required|max:255',
            'pamet' => 'required|max:255',
            'popis' => 'required|max:255',
            'cena' => 'required|max:255',
        ]);

        $newProduct = new Product();
        $newProduct->vyrobce = $request->vyrobce;
        $newProduct->model = $request->model;
        $newProduct->barva = $request->barva;
        $newProduct->pamet = $request->pamet;
        $newProduct->popis = $request->popis;
        $newProduct->cena = $request->cena;
        $newProduct->save();

        // redirect
        return redirect(route('produkty.index'));
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
        $product = Product::find($id);
        return view('products.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    { {
            // server side validation
            $validatedData = $request->validate([
                'vyrobce' => 'required|max:255',
                'model' => 'required|max:255',
                'barva' => 'required|max:255',
                'pamet' => 'required|max:255',
                'popis' => 'required|max:255',
                'cena' => 'required|max:255',
            ]);

            $product = Product::find($id);
            $product->vyrobce = $request->vyrobce;
            $product->model = $request->model;
            $product->barva = $request->barva;
            $product->pamet = $request->pamet;
            $product->popis = $request->popis;
            $product->cena = $request->cena;
            $product->save();

            // redirect
            return redirect(route('produkty.index'));
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect(route('produkty.index'));
    }
}
