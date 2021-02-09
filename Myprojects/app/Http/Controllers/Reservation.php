<?php

namespace App\Http\Controllers;
use App\Models\dbreserves;
use Illuminate\Http\Request;



class Reservation extends Controller
{
      function ADD(Request $req)
    
    {
      $data=new dbreserves;
      $data->id=$req->id;
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
      return redirect('Addrecord');
    }
    
    
    
    
    
}
 

