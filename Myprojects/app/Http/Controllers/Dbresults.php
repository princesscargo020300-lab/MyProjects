<?php

namespace App\Http\Controllers;
use App\Models\dbreserves;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class Dbresults extends Controller
{
 
 //Show all record
function DISPLAYDATA(){
      $data= dbreserves::all();
      return view('Results',['DBDATA'=>$data]);

}

//Delete the record
function DELETEDATA($id) {
      $data=dbreserves::find($id);
      $data->delete();
      return redirect('Results');

}



//Show update list
function SHOWUPDATE($id){
      $data= dbreserves::find($id);
      return view('Updaterecord',['data'=>$data]);
}


//Print
function SHOWPRINT($id){
      $data= dbreserves::find($id);
      return view('print',['data'=>$data]);
}



//Update the record
function UPDATERECORD(Request $req){
      $data=dbreserves::find($req->id);
      $data->firstname=$req->firstname;
      $data->lastname=$req->lastname;
      $data->address=$req->address;
      $data->contact=$req->contact;
      $data->reservation=$req->reservation;
      $data->events=$req->events;
      $data->charge=$req->charge;
      $data->adults=$req->adults;
      $data->children=$req->children; 
      $data->save();
      return redirect('Results');
}


  

}
