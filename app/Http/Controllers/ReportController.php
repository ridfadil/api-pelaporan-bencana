<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Report;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Report::all();
        return response()->json([
            'tanggal_kecelakaan' => $data->tanggal_kecelakaan,
            'waktu_kecelakaan' => $data->waktu_kecelakaan,
            'jenis_kecelakaan' => $data->jenis_kecelakaan,
            'lokasi_kecelakaan' => $data->lokasi_kecelakaan,

            'nama' => $data->user->nama,
            'email' => $data->user->email,
            'no_hp' => $data->user->no_hp,
            'alamat' => $data->user->alamat,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new Report([
            'tanggal_kecelakaan' => $request->tanggal_kecelakaan,
            'waktu_kecelakaan' => $request->waktu_kecelakaan,
            'jenis_kecelakaan' => $request->jenis_kecelakaan,
            'lokasi_kecelakaan' => $request->lokasi_kecelakaan,
            'user_id' => $request->user()->id,
        ]);

        $data->save();
        return response()->json([
            'message' => 'Success'
        ], 200);
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
