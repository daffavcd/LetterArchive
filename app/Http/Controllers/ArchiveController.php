<?php

namespace App\Http\Controllers;

use App\Models\Archive;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ArchiveController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $archives = Archive::orderByDesc('id')
            ->get();

        return view('archive', ['archives' => $archives]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createArchive');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Archive;

        // INSERTING PDF
        $file = $request->file('file');
        if (!empty($file)) {
            $file_name = date('ymdhis') . '_' . $request->file('file')->getClientOriginalName();
            $request->file('file')->storeAs(
                'pdfArchive',
                $file_name,
                'public'
            );
        } else {
            $file_name = null;
        }


        $data->no = $request->no;
        $data->kategori = $request->kategori;
        $data->judul = $request->judul;
        $data->file = $file_name;
        $data->user_id = \Auth::user()->id;

        $data->save();

        return redirect('/archive');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function show(Archive $archive)
    {
        return view('showArchive');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function edit(Archive $archive)
    {
        return view('editArchive');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Archive $archive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Archive  $archive
     * @return \Illuminate\Http\Response
     */
    public function destroy(Archive $archive)
    {
        // DELETING IN FILES
        if (!empty($archive->file)) {
            Storage::disk('public')->delete('pdfArchive/' . $archive->file);
        }

        $archive->delete();

        return redirect('/archive');
    }
}
