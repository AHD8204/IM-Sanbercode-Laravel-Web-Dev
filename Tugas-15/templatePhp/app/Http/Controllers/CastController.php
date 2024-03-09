<?php
namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;

class CastController extends Controller
{
    public function index()
    {
        $casts = Cast::all();
        return view('casts.index', ['casts' => $casts]);
    }

    public function create()
    {
        return view('casts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);

        Cast::create([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio,
        ]);

        return redirect('/cast')->with('success', 'Data pemain film berhasil ditambahkan!');
    }

    public function show($cast_id)
    {
        $cast = Cast::findOrFail($cast_id);
        return view('casts.show', ['cast' => $cast]);
    }
    
    public function edit($cast_id)
    {
        $cast = Cast::findOrFail($cast_id);
        return view('casts.edit', ['cast' => $cast]);
    }
    

    public function update(Request $request, $cast_id)
    {
        $request->validate([
            'nama' => 'required|string|max:45',
            'umur' => 'required|integer',
            'bio' => 'required',
        ]);

        $cast = Cast::findOrFail($cast_id);
        $cast->update([
            'nama' => $request->nama,
            'umur' => $request->umur,
            'bio' => $request->bio,
        ]);

        return redirect('/cast')->with('success', 'Data pemain film berhasil diperbarui!');
    }

    public function destroy($cast_id)
    {
        $cast = Cast::findOrFail($cast_id);
        $cast->delete();

        return redirect('/cast')->with('success', 'Data pemain film berhasil dihapus!');
    }
}