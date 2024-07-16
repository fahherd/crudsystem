<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class employeecontroller extends Controller
{
    public function main(){
        $data = DB::table('employee2')->get();
        // dd($data);
        return view('main', compact('data'));
    }
    public function addata(Request $request){
        // dd($request->all());
        $this->validate($request, [
            'image' => ['image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
        ]);
        $data = DB::table('employee2')->orderBy('id', 'desc')->first();
        $id = $data->id+ 1;
        // dd($id);
        $image = $id.'.'.$request->image->getClientOriginalExtension();
        $request->image->storeAs('images', $image);
        DB::table('employee2')->insert([
        'name' => $request->name,
        'nip' => $request->nip,
        'gender' => $request->gender,
        'image' => $image
        ]);
        return redirect('/');
    }
    public function editdata($id){
        $data =  DB::table('employee2')->where('id', $id)->first();
        return view('editdataform', compact('data'));
    }
    public function updatedata(Request $request){
        DB::table('employee2')->where('id', $request->id)->update([
            'name' => $request->name,
            'nip' => $request->nip,
            'gender' => $request->gender
            ]);
            return redirect('/');
    }
    public function deletedata($id){
        DB::table('employee2')->where('id', $id)->delete();
        return back();
    }
}
