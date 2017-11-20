<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Masterpasien;
use Illuminate\Support\Facades\DB;

class MasterPasienController extends Controller
{
    public function list_data(){
       
        //$list_pasien = MasterPasien::all();

        $users = DB::table('masterpasiens')
        ->join('agamas', 'agamas.agamaid', '=', 'masterpasiens.agamaid')
        ->select('masterpasiens.*', 'agamas.agamaname',  DB::raw('(CASE WHEN masterpasiens.j_kelamin = "L" THEN "Laki-Laki" else "Perempuan" END) AS jenis_kelamin'))
        ->get();
        return view('masterpasien',['list_pasien' => $users]);
    }

    public function add(){
       
        $listing_agama = DB::table('agamas')->get();
        //var_dump($listing_agama);
        return view('masterpasien_add',['listing_agama' => $listing_agama]);
    }

    public function save(Request $request){

        $masterpasien = new Masterpasien;
        $masterpasien->no_mr = $request->input('no_mr');
        $masterpasien->nm_pasien = $request->input('nm_pasien');
        $masterpasien->tgl_lahir = date('Y-m-d', strtotime($request->input('tgl_lahir') ));
        $masterpasien->j_kelamin = $request->input('j_kelamin');
        $masterpasien->t_lahir = $request->input('t_lahir');
        $masterpasien->alamat = $request->input('alamat');
        $masterpasien->agamaid = $request->input('agamaid');

        $foto       = $request->file('fotopasien');
        $fileName   = $foto->getClientOriginalName();
        $request->file('fotopasien')->move("uploads", $fileName);
        
        //var_dump($fileName);
        $masterpasien->fotopasien = "uploads/".$fileName;
         
        $masterpasien->save();
        return redirect('/masterpasien/data');

    }

    public function edit($id){
      
        $list_masterpasien = DB::select('select * from masterpasiens where no_mr = "'.$id.'" ');
        //var_dump($list_masterpasien);
        $listing_agama = DB::table('agamas')->get();
        return view('masterpasien_edit',['list_masterpasien' => $list_masterpasien,'listing_agama' => $listing_agama]);
    }

    public function save_edit(Request $request){
        $masterpasien = new Masterpasien;
        $masterpasien->no_mr = $request->input('no_mr');
     
        $data = array(
            'nm_pasien'=> $request->input('nm_pasien'),
            'tgl_lahir'=>  date('Y-m-d', strtotime($request->input('tgl_lahir'))),
            'j_kelamin'=> $request->input('j_kelamin'),
            't_lahir'=> $request->input('t_lahir'),
            'alamat'=> $request->input('alamat'),
            'agamaid'=> $request->input('agamaid')
        );
        Masterpasien::where('no_mr',$request->input('no_mr'))->update($data);
        return redirect('/masterpasien/data');
    }

    public function delete($id){
        Masterpasien::where('no_mr',$id)->delete();
        return redirect('/masterpasien/data');
    } 
}
