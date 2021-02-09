@extends('layouts.master')
    @section('content')
<!DOCTPE html>
  <body>
 <style type="text/css">
 
 .fieldset {
  border: 2px solid black;
  margin-left: 270px;
  margin-top: -230px;
 }
 
 .fname{
    border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
}
 

.lname{
    border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 15px;
}



.address{
    border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 28px;
}


.contact{
    border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 32px;
}




.reservation{
    border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 32px;
}

input[type="date"]:before {
    content: attr(placeholder) !important;
 
  }


.events{
    border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 65px;
}


.charge{
    border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 87px;


}


.adults{
    border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 135px;
}



.children{
    border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 117px;
}

.submit{
    margin-left: 0px;
    width: 130px;
    border:  1px solid black;
    background: black;
    color: white;
    margin-left: 190px;
}

 </style>

    <br><br> <br><br><br><br>
   
    <form action="insert" method="POST" autocomplete="off">
       <fieldset style="width:500px" class="fieldset">
      
   
      <br><br>
      <h2>Check in</h2>

      @csrf
      Firstname:
      <input class="fname" type="text" name="firstname" placeholder="FirstName" required="">
     <br><br>
       
      Lastname:
      <input class="lname" type="text" name="lastname" placeholder="Lastname" required="">
     <br><br>
       
      Address:
      <input class="address" type="text" name="address" placeholder="Address" required="">
     <br><br>
     
      Contact:
      <input class="contact" type="text" name="contact" placeholder="Contact" required="">
     <br><br>
   
      
      
      <h2>Rate information</h2>
       
       
       Date of Reservation:
      <input class="reservation" type="date" name="reservation" placeholder="Date of Reservation" required="">
     <br><br>
       
       Events Services:
      <select class="events" type="text" name="events" placeholder="" required="">
          <option value="">None</option>
           <option value="Birthday">Birthday</option>
           <option value="Christening">Christening</option>
           <option value="Debut">Debut</option>
       </select>
       <br><br>
    
     
       
      Total Charge:
      <input class="charge" type="text" name="charge" placeholder="Total Charge" required="">
     <br><br>
     
      Adults:
       <input class="adults" type="text" name="adults" placeholder="Adult" required="">
     <br><br>
     
     
      Children:
      <input class="children" type="text" name="children" placeholder="Children" required="">
     <br><br><br><br>
     
       
      <button class="submit" type="submit">Submit</button>
      <br><br>
   
    </form>
    </fieldset>
  </body>

</html>
@endsection
