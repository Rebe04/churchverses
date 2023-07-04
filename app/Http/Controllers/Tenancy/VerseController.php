<?php

namespace App\Http\Controllers\Tenancy;

use App\Http\Controllers\Controller;
use App\Models\Book;
use App\Models\Verse;
use Illuminate\Http\Request;

class VerseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('tenancy.verses.index', ['verses' => Verse::all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $books = Book::all();
        return view('tenancy.verses.create', compact('books'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bookName = Book::where('id', $request->get('book_id'))->get('name')->first()->name;
        $request->merge([
            'slug' => $bookName . "-" . $request->get('chapter') . "-" . $request->get('verse')
        ]);
        $request->validate([
            'book_id' => 'required',
            'chapter' => 'required',
            'verse' => 'required',
            'slug' => 'required|unique:verses',
            'content' => 'required'
        ], [
            'book_id.required' => 'El Libro es un campo requerido.',
            'chapter.required' => 'El Capítulo es un campo requerido.',
            'verse.required' => 'El Versículo es un campo requerido.',
            'slug.unique' => 'Este versículo ya se encuentra agregado.',
            'content.required' => 'El Texto es un campo requerido.',
        ]);

        Verse::create($request->all());

        return redirect()->route('verses.index')->with('info', 'Versículo Creado con éxito.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Verse  $verse
     * @return \Illuminate\Http\Response
     */
    public function show(Verse $verse)
    {
        return view('tenancy.verses.show', compact('verse'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Verse  $verse
     * @return \Illuminate\Http\Response
     */
    public function edit(Verse $verse)
    {
        $books = Book::all();
        return view('tenancy.verses.edit', compact('verse', 'books'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Verse  $verse
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Verse $verse)
    {
        $bookName = Book::where('id', $request->get('book_id'))->get('name')->first()->name;
        $request->merge([
            'slug' => $bookName . "-" . $request->get('chapter') . "-" . $request->get('verse')
        ]);
        $request->validate([
            'book_id' => 'required',
            'chapter' => 'required',
            'verse' => 'required',
            'slug' => 'required|unique:verses,id,' . $verse->id,
            'content' => 'required'
        ], [
            'book_id.required' => 'El Libro es un campo requerido.',
            'chapter.required' => 'El Capítulo es un campo requerido.',
            'verse.required' => 'El Versículo es un campo requerido.',
            'slug.unique' => 'Este versículo ya se encuentra agregado.',
            'content.required' => 'El Texto es un campo requerido.',
        ]);

        $verse->update($request->all());

        return redirect()->route('verses.index')->with('info', 'Versículo Actualizado con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Verse  $verse
     * @return \Illuminate\Http\Response
     */
    public function destroy(Verse $verse)
    {
        $verse->delete();
        return redirect()->route('verses.index')->with('info', 'Versículo eliminado con éxito');
    }
}
