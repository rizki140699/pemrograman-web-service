<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class DashboardBeritaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("dashboard.berita.index", [
            "data" => Berita::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("dashboard.berita.create", [
            "kategori" => Kategori::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([
            'judul_berita' => 'required|max:50',
            'kategori_id' => 'required',
            'isi_berita' => 'required',
            'foto' => 'required|file'

        ]);
        // preview berita
        $validate['foto'] = $request->file('foto')->store('berita-foto');
        $validate['slug'] = Str::slug($request->judul_berita, '-');
        $validate['excerpt'] = Str::limit(strip_tags($request->isi_berita), 100);

        Berita::create($validate);

        return redirect('/dashboard/berita')->with('success', 'Berita ' . $request->judul_berita .' berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function show(Berita $berita, $slug)
    {
        return view('dashboard.berita.detail', [
            "berita" => Berita::where('slug', $slug)->first()
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function edit(Berita $berita, $slug)
    {
        return view('dashboard.berita.update', [
            "berita" => Berita::find($slug),
            "kategori" => Kategori::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Berita $berita, $id)
    {
        $validate = $request->validate([
            'judul_berita' => 'required|max:50',
            'kategori_id' => 'required',
            'isi_berita' => 'required',
        ]);

        // cek apakah foto dikirimkan atau tidak
        if($request->hasFile("foto")){

            $validate['foto'] = $request->file('foto')->store('berita-foto');
        }

        // 
        $validate['slug'] = Str::slug($request->judul_berita, '-');
        $validate['excerpt'] = Str::limit(strip_tags($request->isi_berita), 100);

        Berita::where('id', $id)->update($validate);

        return redirect('/dashboard/berita')->with('success', 'Berita ' . $request->judul_berita .' berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Berita  $berita
     * @return \Illuminate\Http\Response
     */
    public function destroy(Berita $berita, $id)
    {

        // menghapus foto
        // if($berita->foto){
        //     Storage::destroy($berita->foto);
        // }

        // menghapus data dari database
        Berita::destroy($id);

        return redirect('/dashboard/berita')->with('delete-success', 'berita'. $berita->judul_berita .' berhasil dihapus');
    }
}
