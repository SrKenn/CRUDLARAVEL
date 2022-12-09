<?php

namespace App\Http\Controllers;

use App\Models\ProductoReceta;
use Illuminate\Http\Request;

/**
 * Class ProductoRecetaController
 * @package App\Http\Controllers
 */
class ProductoRecetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $productoRecetas = ProductoReceta::paginate();

        return view('producto-receta.index', compact('productoRecetas'))
            ->with('i', (request()->input('page', 1) - 1) * $productoRecetas->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $productoReceta = new ProductoReceta();
        return view('producto-receta.create', compact('productoReceta'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(ProductoReceta::$rules);

        $productoReceta = ProductoReceta::create($request->all());

        return redirect()->route('producto-recetas.index')
            ->with('success', 'ProductoReceta created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $productoReceta = ProductoReceta::find($id);

        return view('producto-receta.show', compact('productoReceta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $productoReceta = ProductoReceta::find($id);

        return view('producto-receta.edit', compact('productoReceta'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  ProductoReceta $productoReceta
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProductoReceta $productoReceta)
    {
        request()->validate(ProductoReceta::$rules);

        $productoReceta->update($request->all());

        return redirect()->route('producto-recetas.index')
            ->with('success', 'ProductoReceta updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $productoReceta = ProductoReceta::find($id)->delete();

        return redirect()->route('producto-recetas.index')
            ->with('success', 'ProductoReceta deleted successfully');
    }
}
