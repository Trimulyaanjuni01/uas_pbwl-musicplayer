<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Track;


class TrackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Track::all();
        return view('track.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $rows = Track::all();
        return view('track.create', compact('rows'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $track = new Track();
        $track->track_name = $request->track_name;
        $track->track_id_album = $request->track_id_album;
        $track->track_time = $request->track_time;
        $track->track_file = $request->track_file;
        $track->save();
        return redirect('/track');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Track::findOrFail($id); 
        return view('track.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = Track::findOrFail($id);
        $row ->update([
            'track_name' => request('track_name'),
            'track_id_album' => request('track_id_album'),
            'track_time' => request('track_time'),
            'track_file' => request('track_file'),
        ]);
        return redirect('/track');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Track::findOrFail($id); 
        $row->delete(); 
        return redirect('track');
    }

    public function upload(){
        $rows = Track::all();
        return view('track.create', compact('rows'));
    }
 
    public function proses_upload(Request $request){
        $this->validate($request, [
            'track_name' => request('track_name'),
            'track_id_album' => request('track_id_album'),
            'track_time' => request('track_time'),
            'track_file' => request('track_file'),
        ]);
 
        // menyimpan data file yang diupload ke variabel $file
        $file = $request->file('track_file');
 
                // nama file
        echo 'track name: '.$file->getClientOriginalName();
        echo '<br>';
 
                // ekstensi file
        echo 'File Extension: '.$file->getClientOriginalExtension();
        echo '<br>';
 
                // real path
        echo 'File Real Path: '.$file->getRealPath();
        echo '<br>';
 
                // ukuran file
        echo 'File Size: '.$file->getSize();
        echo '<br>';
 
                // tipe mime
        echo 'File Mime Type: '.$file->getMimeType();
 
                // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'data_file';
 
                // upload file
        $file->move($tujuan_upload,$file->getClientOriginalName());
    }
}
