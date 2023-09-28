<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
    {

        $products = Product::latest()->paginate(10);
        return view('product.index',compact('products'));
    }

    public function create()
    {
        return view('product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //return $request;
        //validate form
        $this->validate($request, [
            'nama'    => 'required',
            'jumlah'  => 'required',
            'harga'     => 'required',
            'foto'    => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);


        //upload image
        $foto = $request->file('foto');
        $foto->storeAs('public/foto', $foto->hashName());

        //create post
        Product::create([
            'nama'     => $request->nama,
            'jumlah'      => $request->jumlah,
            'harga'   => $request->harga,
            'foto'     => $foto->hashName()
        ]);

        //redirect to index
        return redirect()->route('product.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }


    public function show(string $id)
    {
        $products = Product::find($id);


        return view('product.show', compact('products'));
    }


    public function edit(string $id)
    {

        $products = Product::find($id);
        return view('product.edit', compact('products'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'nama'    => 'required',
            'jumlah'     => 'required',
            'harga'  => 'required',
            'foto'    => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);

        $products = Product::find($id);

        //check if image is uploaded
        if ($request->hasFile('foto')) {
            //upload new image
            $foto = $request->file('foto');
            $foto->storeAs('public/foto', $foto->hashName());
            //delete old image
            Storage::delete('public/foto/'.$products->foto);

            //update post with new image
            $products->update([
                'nama'    => $request->nama,
                'jumlah'     => $request->jumlah,
                'harga'  => $request->harga,
                'foto'    => $foto->hashName()
            ]);

        } else {

            //update post without image
            $products->update([
                'nama'    => $request->nama,
                'jumlah'     => $request->jumlah,
                'harga'  => $request->harga,
            ]);
        }

        //redirect to index
        return redirect()->route('product.index')->with(['success' => 'Data Berhasil Diubah!']);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $products = Product::find($id);
        //delete image
        Storage::delete('public/foto/'. $products->foto);

        //delete post
        $products->delete();

        //redirect to index
        return redirect()->route('product.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}
