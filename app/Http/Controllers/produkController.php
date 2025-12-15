<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\PreDec;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = Produk::all();
        return view('produk', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk_create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'nama'         => 'required|string|max:100|unique:produk,nama',
        'id_kategori'  => 'required|integer',
        'qty'          => 'required|integer',
        'harga_beli'   => 'required|integer',
        'harga_jual'   => 'required|integer',
        ]);


        Produk::create(attributes:[
        'nama' => $request->nama,
        'id_kategori'  => $request->id_kategori,
        'qty' => $request->qty,
        'harga_beli' => $request->harga_beli,
        'harga_jual' => $request->harga_jual,
        ]);

        return redirect(to:'/produk')->with (key: 'succes', value:'Produk Berhasil di Tambahkan!!');

        
        
        

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
        $produk = Produk::findOrFail(id: $id);
        return view('produk_edit', data: compact(var_name: 'produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $produk = Produk::findOrFail(id: $id);

        $request->validate(rules: [
            'nama'         => 'required|string|max:100|unique:produk,nama',
            'id_kategori'  => 'required|integer',
            'qty'          => 'required|integer',
            'harga_beli'   => 'required|integer',
            'harga_jual'   => 'required|integer',
        ]);

        $produk->update(attributes: [
            'nama' => $request->nama,
            'id_kategori'  => $request->id_kategori,
            'qty' => $request->qty,
            'harga_beli' => $request->harga_beli,
            'harga_jual' => $request->harga_jual,
        ]);

        return redirect(to: '/produk')->with(key: 'success', value: 'Produk berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
