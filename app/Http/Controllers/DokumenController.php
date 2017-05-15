<?php

namespace App\Http\Controllers;

use App\Dokumen;
use App\dataTables\DokumenDatatable;
use Illuminate\Http\Request;

class DokumenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(DokumenDatatable $dataTable)
    {
        return $dataTable->render('dokumen.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dokumen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $data         = array();
       $this->validate($request, [
        'user_id'  => 'required',
        'ktp'      => 'required',
        ]);
       $in           = $request->input();
       $user_id      = $in['user_id'];

       $ktp          = $request->file('ktp');
       $kk           = $request->file('kk');
       $assets       = $request->file('assets');
              
       if($ktp){
         $nama                 = 'ktp-'.$user_id.'.'.$ktp->extension();
         $upload               = $ktp->move('docs/ktp',$nama);
         $data['ktp']          = $nama;
       }
       if($kk){
         $nama                 = 'kk-'.$user_id.'.'.$kk->extension();
         $upload               = $kk->move('docs/kk',$nama);
         $data['kk']          = $nama;
       }
       if($assets){
         $nama                 = 'assets-'.$user_id.'.'.$assets->extension();
         $upload               = $assets->move('docs/assets',$nama);
         $data['assets']          = $nama;
       }
       
        foreach ($in as $key => $value) {
          if($key != '_token'){
            $data[$key] = $value;
            }  
        }

        Dokumen::create($data);

        return redirect()->route('dokumen.index')
                         ->with('message','dokumen created successfully');
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
