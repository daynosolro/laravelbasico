<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categoria;

use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index()
    {
        $categorias = Categoria::all();
        return view('categorias.index', compact('categorias'));
    }

    public function create()
    {
 
        return view('categorias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255' 
        ]);

        Categoria::create($request->all()); 
        return redirect()->route('categorias.index')->with('success', 'La cateogria se creo con éxito.');
    }

    public function show(Categoria $categoria)
    {
        return view('categorias.show', compact('categoria'));
    }

    public function edit($id)
    {
         $categoria = Categoria::findOrFail($id);
 
         return view('categorias.edit', compact('categoria'));
    }
    
    public function update(Request $request, $id)
    {
         $request->validate([
            'nombre' => 'required' 
        ]);
    
         $categoria = Categoria::findOrFail($id);
        $categoria->nombre = $request->nombre;
        $categoria->save();
    
         return redirect()->route('categorias.show', $categoria->id)
            ->with('success', 'Categoria actualizada correctamente.');
    }
    

    public function destroy(Categoria $categoria)
    {
        $categoria->delete();
        return redirect()->route('categorias.index')->with('success', 'Categoria eliminada correctamente.');
    }
}
