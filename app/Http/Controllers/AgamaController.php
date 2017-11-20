<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Agama;

class AgamaController extends Controller
{
    public function list_data(){
     
        $list_agama = Agama::all();
        return view('agama',['list_agama' => $list_agama]);
    }

    public function add(){
        return view('agama_add');
    }

    public function save(Request $request){
        $agama = new Agama;
        $agama->agamaid = $request->input('agamaid');
        $agama->agamaname = $request->input('agamaname');
        $agama->save();
        return redirect('/agama/data');
    }

    public function edit($id){
      
        $list_agama = DB::select('select * from agamas where agamaid = "'.$id.'" ');
        //var_dump($list_agama);
         return view('agama_edit',['list_agama' => $list_agama]);
    }

    public function save_edit(Request $request){
        $agama = new Agama;
        $agama->agamaid = $request->input('agamaid');
        $agama->agamaname = $request->input('agamaname');

        $data = array(
            'agamaname'=> $request->input('agamaname')
        );
        Agama::where('agamaid',$request->input('agamaid'))->update($data);
        return redirect('/agama/data');
    }

    public function delete($id){
        Agama::where('agamaid',$id)->delete();
        return redirect('/agama/data');
    }
    
}
