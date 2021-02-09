<!DOCTYPE html>
  <body>
 
    
     <style type="text/css">
 
 .fieldset {
  border: 2px solid black;
  margin-left: 250px;
  margin-top: 50px;
 }
 
 .fname{
    border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 55px;
    
 }
 
 
 .lname{
     border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 58px;
 }
 


 .address{
     border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 72px;
 }
 
 
 
 
  .contact{
     border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left:76px;
 }
 
 
  .reservation{
     border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 6px;
 }
 

.events{
     border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 15px;
 }
 

 .charge{
     border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 37px;
 }
 
 
 
 .adults{
     border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 85px;
 }
 
 
 .children{
     border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 67px;
 }
 
 
 .update{
    margin-left: 0px;
    width: 130px;
    border:  1px solid black;
    background: black;
    color: white;
    margin-left: 143px;
 }
 
 
  </style>
    
      <fieldset style="width:500px" class="fieldset">
    
    
    <form action="/update" method="POST" autocomplete="off">
@csrf

     
     <input type="hidden" name="id" value="{{$data ['id']}}">
     
     
      Firstname:
      <input class="fname" type="text" name="firstname" placeholder="Firstname" required="" value="{{ $data['firstname']}}">
      <br><br>
      
       Lastname:
      <input class="lname"  type="text" name="lastname" placeholder="Lastname" required="" value="{{ $data['lastname']}}">
      <br><br>
      
      Address:
      <input class="address"  type="text" name="address" placeholder="Address" required="" value="{{ $data['address']}}">
      <br><br>
      
      Contact:
      <input class="contact"  type="text" name="contact" placeholder="Contact" required="" value="{{ $data['contact']}}">
      <br><br>
      
      
      Date reservation:
      <input class="reservation"  type="date" name="reservation" placeholder="Reservation" required="" value="{{ $data['reservation']}}">
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
      <input class="charge"  type="text" name="charge" placeholder="Charge" required="" value="{{ $data['charge']}}">
      <br><br>
      
      Adults:
      <input class="adults"  type="text" name="adults" placeholder="Adults" required="" value="{{ $data['adults']}}">
      <br><br>
      
      Children:
      <input class="children"  type="text" name="children" placeholder="Children" required="" value="{{ $data['children']}}">
      <br><br>
      
      
      
       <button class="update" type="submit">Update</button>
      <br><br>
 
    </form>
   
     </fieldset>
  
  </body>
</html>