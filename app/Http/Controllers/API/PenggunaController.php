<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\daftaradmin;
use App\Models\pengguna;
use Illuminate\Http\Request;

class PenggunaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data=Pengguna::getPengguna()->paginate(5);
        return response()->json($data);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validasi=$request->validate([
            'nama'=>'required',
            'kampus'=>'required',
            'semester'=>'required|numeric',
            'masalah'=>'required',
            'photo'=>'required|file|mimes:png,jpg',
            'deskripsi'=>'required',
            'id_daftaradmin'=>'required'
        ]);
        try {
            $fileName = time().$request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('uploads/penggunas',$fileName);
            $validasi['photo']=$path;
            $response = pengguna::create($validasi);
            return response()->json([
                'success' => true,
                'message' =>'success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
                ]);
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validasi=$request->validate([
            'nama'=>'required',
            'kampus'=>'required',
            'semester'=>'required|numeric',
            'masalah'=>'required',
            'photo'=>'',
            'deskripsi'=>'required',
            'id_daftaradmin'=>'required'
        ]);
        try {
            if($request->file('photo')){
                $fileName = time().$request->file('photo')->getClientOriginalName();
                $path = $request->file('photo')->storeAs('uploads/penggunas',$fileName);
                $validasi['photo']=$path;
            }
            $response = pengguna::find($id);
            $response->update($validasi);
            return response()->json([
                'success' => true,
                'message' =>'success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
                ]);
        }
    }

    function daftaradmin(){
        $data=daftaradmin::all();
        return response()->json($data);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            $pengguna=pengguna::find($id);
            $pengguna->delete();
            return response()->json([
                'success'=>true,
                'message'=>'Success'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'message'=>'Err',
                'errors'=>$e->getMessage()
            ]);
        }
    }
}
