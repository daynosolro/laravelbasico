<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Categoria;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        $categorias = Categoria::all(); // Obtener todas las categorías

        return view('products.create', compact('categorias'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'id_categoria' => 'nullable|exists:categorias,id_categoria',

        ]);

        //Product::create($request->all());

        $product = new Product;
        $product->name = $request->input('name')."test";
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->id_categoria = $request->input('id_categoria');
        $product->save();


        return redirect()->route('products.index')->with('success', 'Producto creado con éxito.');
    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    public function edit($id)
    {
        // Buscamos el producto por su ID
        $product = Product::findOrFail($id);
        $categorias = Categoria::all();

        // Retornamos la vista 'products.edit' con el producto específico para editar
        return view('products.edit', compact('product', 'categorias'));
    }
    
    public function update(Request $request, $id)
    {
        // Validamos los datos entrantes
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required|numeric',
            'id_categoria' => 'nullable|exists:categorias,id_categoria',

        ]);
    
        // Buscamos el producto y actualizamos con los nuevos valores
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->id_categoria = $request->input('id_categoria');

        $product->save();
    
        // Redireccionamos a la lista de productos o al detalle del producto actualizado
        return redirect()->route('products.show', $product->id)
            ->with('success', 'Producto actualizado correctamente.');
    }
    

    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('success', 'Producto eliminado con éxito.');
    }
}
