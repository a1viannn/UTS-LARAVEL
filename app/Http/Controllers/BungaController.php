<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bunga;

class BungaController extends Controller
{

    public function index()
    {
        $bungas = Bunga::all();
        // $dataGambar = Bunga::latest()->get();

        return view('Bunga.data-bunga', compact('bungas'));
    }


    public function create()
    {
        return view('Bunga.create-bunga');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' =>'required',
            'deskripsi' =>'required',
            'stok' =>'required',
            'harga' =>'required',
            'gambar' =>'image|mimes:jpeg,png,jpg,gif|max:1024',
        ]);


        // Periksa apakah file gambar diunggah
        if ($request->hasFile('gambar')) {
            $nm = $request->file('gambar');
            $namaFile = $nm->getClientOriginalName();
            // Pindahkan gambar dan simpan entri ke dalam database
            $nm->move(public_path().'/img', $namaFile);
        } else {
            $namaFile = null;
        }

        Bunga::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'gambar' => $namaFile,
        ]);

        return redirect('databunga')->with('success', 'Data Berhasil Disimpan!');
    }


    public function show(string $id)
    {
        $bungas = Bunga::find($id);
        return view('Bunga.show-bunga', compact('bungas'));

    }


    public function edit(string $id)
    {
        $bungas = Bunga::findorfail($id);
        return view('Bunga.edit-bunga', compact('bungas'));
    }


    public function update(Request $request, string $id)
    {
        $ubah = Bunga::findorfail($id);
        $awal = $ubah->gambar;

        $bungas = [
            'nama' => $request['nama'],
            'deskripsi' => $request['deskripsi'],
            'stok' => $request['stok'],
            'harga' => $request['harga'],
        ];

        // Periksa apakah ada gambar yang diunggah sebelum melakukan operasi move()
        if ($request->hasFile('gambar')) {
            // Ambil file yang diunggah
            $gambar = $request->file('gambar');
            // Berikan nama baru (misalnya, timestamp) untuk gambar yang diunggah
            $namaFile = time() . '.' . $gambar->getClientOriginalExtension();
            // Pindahkan gambar ke direktori yang ditentukan (dalam hal ini, public/img/)
            $gambar->move(public_path('img'), $namaFile);

            // Set nama file baru ke dalam array bungas
            $bungas['gambar'] = $namaFile;

            // Hapus gambar lama jika ada
            if ($awal && file_exists(public_path('img/' . $awal))) {
                unlink(public_path('img/' . $awal));
            }
        }

        // Update data bunga
        $ubah->update($bungas);

        return redirect('databunga')->with('success', 'Data Berhasil Diubah!');
    }


    public function destroy(string $id)
    {
        $bungas = Bunga::findorfail($id);
        $bungas->delete();
        return back()->with('info', 'Data Berhasil Dihapus!');
    }
}
