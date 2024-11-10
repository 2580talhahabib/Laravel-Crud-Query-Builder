<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Crudcontroller extends Controller
{
public function formdata(){
 return view('formdata');
}

public function insertdata(Request $req){
    $user=DB::table('cruds')->insert([
        'name'=>$req->name,
        'email'=>$req->email,
        'age'=>$req->age,
        'city'=>$req->city,
    ]);
    if($user){
return redirect()->route('showdata');
    }else{
        echo 'data did not added';
        
    }
}
public function showdata(){
    // $user=DB::table('cruds')->get();
    // $user=DB::table('cruds')->Paginate(2)->appends(["text"=>"Talha habib"]);
    $user=DB::table('cruds')->orderBy('id')->cursorPaginate(2);
    // cursorpaginator is veryfast in all pagination butt disadvantage of this pagination is we did not customize 
    return view('Showdata',['user'=>$user]);
}

public function singledata(string $id){
    $user=DB::table('cruds')->where('id',$id)->get();
    return view('singledata',['data'=>$user]);
}

public function deletedata(string $id){
    $user=DB::table('cruds')->where('id',$id)->delete();
if($user){
 return redirect()->route('showdata');
}else{
    echo "data did not deleted";
}

}
public function updatedata(string $id){
    // $user=DB::table('cruds')->where('id',$id)->get();
    $user=DB::table('cruds')->find($id);
    return view('Updatedata',['data'=>$user]);
    // return dd($user);
    // return $user;
 
}
public function updateuser(Request $req,string $id){
    $user=DB::table('cruds')->where('id',$id)->update([
        'name'=> $req->name,
        'email'=> $req->email,
        'age'=> $req->age,
        'city'=> $req->city,
    ]);
    if($user){
 return redirect()->route('showdata');
    }else{
        echo "data did not added";

    }
}
}
