<?php

namespace App\Http\Controllers\API;

use App\Helpers\ApiFormatter;
use App\Http\Controllers\Controller;
use App\Models\obat;
use Illuminate\Http\Request;
use Exception;

class ObatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Obat::all();


        if($data){
            return ApiFormatter::createApi(200,'Success',$data);
        }else{
            return ApiFormatter::createApi(400,'Failed');

        }
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
        //
        try {
            $request->validate([
                'obat_name' => 'required',
                'obat_picture' => 'required',
                'harga' => 'required',
                'deskripsi' => 'required',
            ]);
             $obat = Obat::create([
                'obat_name'=>$request->obat_name,
                'Obat_picture'=>$request->Obat_picture,
                'harga'=>$request->harga,
                'deskripsi'=>$request->deskripsi

             ]);
             $data = Obat::where('id','=',$obat->id)->get();
             
             if($data){
                return ApiFormatter::createApi(200,'Success',$data);
            }else {
                return ApiFormatter::createApi(400,'Failed');
            }
                
            } catch (Exception $error) {
                
                return ApiFormatter::createApi(400,'Failed');
        }
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
        $data = Obat::where('id', '=',$id)->get();

        if($data){
            return ApiFormatter::createApi(200,'Success',$data);
        }else{
            return ApiFormatter::createApi(400,'Failed');
        }
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
        try {
            $request->validate([
                'obat_name' => 'required',
                'obat_picture' => 'required',
                'harga' => 'required',
                'deskripsi' => 'required',
            ]);

            $obat = Obat::findOrFail($id);

             $obat->update([
                'obat_name'=>$request->obat_name,
                'obat_picture'=>$request->obat_picture,
                'harga'=>$request->harga,
                'dskripsi'=>$request->deskripsi,

             ]);
             $data = Obat::where('id','=',$obat->id)->get();
             
             if($data){
                return ApiFormatter::createApi(200,'Success',$data);
            }else {
                return ApiFormatter::createApi(400,'Failed');
            }
                
            } catch (Exception $error) {
                
                return ApiFormatter::createApi(400,'Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obat = Obat::findOrFail($id);

        $data = $obat->delete();

        if($data){
            return ApiFormatter::createApi(200,'Success Destroy Data');
        }else {
            return ApiFormatter::createApi(400,'Failed');
        }


    }
}
