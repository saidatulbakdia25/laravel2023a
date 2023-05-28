<?php

namespace App\Http\Controllers;

use App\Models\novels;
use App\Http\Requests\StorenovelsRequest;
use App\Http\Requests\UpdatenovelsRequest;

class NovelsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('novels.data')->with([
            'novels' => novels::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorenovelsRequest $request)
    {
        $validate = $request->validated();

        $novels = new Novels;
        $novels->idnovels = $request->txtidnovels;
        $novels->judul = $request->txtjudul;
        $novels->penulis = $request->txtpenulis;
        $novels->halaman = $request->txthalaman;
        $novels->stok = $request->txtstok;
        $novels->save();

        return redirect('novels')->with('msg','Add Novel Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(novels $novels,$idnovels)
    {
        $data = $novels->find($idnovels);
        return view('novels.formedit')->with([
            'txtidnovels' => $idnovels,
            'txtjudul' => $data->judul,
            'txtpenulis' => $data->penulis,
            'txthalaman' => $data->halaman,
            'txtstok' => $data->stok,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenovelsRequest $request, novels $novels,$idnovels)
    {
        $data = $novels->find($idnovels);
        $data->judul = $request->txtjudul;
        $data->penulis = $request->txtpenulis;
        $data->halaman = $request->txthalaman;
        $data->stok = $request->txtstok;
        $data->save();

        return redirect('novels')->with('msg','Data dengan nama novels '.$data->judul.' berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(novels $novels,$idnovels)
    {
        $data = $novels->find($idnovels);
        $data->delete();

        return redirect('novels')->with('msg','Data dengan nama novels '.$data->judul.' berhasil dihapus');
    }
}
