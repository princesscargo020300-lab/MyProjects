@extends('layouts.master')
    @section('content')
<!DOCTPE html>
    <body>
  <center>
      <head>
 <style type="text/css">

 
  .delete{
   color: red;
   text-decoration: none;
   font-size: 10px;
 }
 
  
 .showupdates{
   color: blue;
   text-decoration: none;
    font-size: 10px;
    margin-left: 10px;
 }
 
 
 
 .print{
   color: green;
   text-decoration: none;
    margin-left: 10px;
 }
 
  

 
 .fieldset {
  border: 2px solid black;
  padding: 10px;
}

td{
    font-size: 10px;
 
}
table{
    margin-left: 190px;
    margin-top: -130px;
}
  
 
</style>
</head>

    
<table border = "1">
 
<tr>
<td>NAME</td>
<td>ADDRESS</td>
<td>CONTACT</td>
<td>RESERVATION</td>
<td>EVENTS</td>
<td>CHARGE</td>
<td>ADULT</td>
<td>CHILDREN</td>
<td>OPTION</td>

</tr>

@foreach ($DBDATA as $data)
<tr>
<td>{{ $data->firstname}} {{ $data->lastname}}</td>
<td>{{ $data->address}}</td>
<td>{{ $data->contact}}</td>
<td>{{ $data->reservation}}</td>
<td>{{ $data->events}}</td>
<td>{{ $data->charge}}</td>
<td>{{ $data->adults}}</td>
<td>{{ $data->children}}</td>


<td><a class="delete"  href = 'delete/{{ $data->id }}'>Delete</a>

<a class="showupdates"  href = 'showupdates/{{ $data->id }}'>Update</a>
<a class="print" href = 'showprint/{{ $data->id }}'
>Print</a>
</td>



</td>
</tr>
@endforeach

</table>

</center>
</body>
</html>
@endsection