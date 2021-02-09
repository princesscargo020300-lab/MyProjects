<!DOCTYPE html>
  <body>
 
    
     <style type="text/css">
 
 .fieldset {
  border: 2px solid black;
  margin-left: 65px;
  margin-top: 50px;
 }
  .fieldset1 {
  border: 2px solid black;
  margin-left: 65px;
  margin-top: -2px;
 }
 
 .name{
    border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 90px;
    
 }
 
 



 
 
  .reservation{
     border:  1px solid black;
    margin-left: 10px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 520px;
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
    margin-left: 20px;
    width: 250px;
    border: none;
    border-bottom: 2px solid black;
    outline: none;
    margin-left: 520px;
 }
 h1{
     margin-top: -5px;
     font-size: 30px;
 }
 
 h2{
     margin-top: -15px;
 }
 
 h3{
     margin-top: -15px;
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
 
   @media print
{    
    .print, .print *
    {
        display: none;
    }
}
 
 .print{

    width: 130px;
    border:  1px solid black;
    background: green;
    color: white;
    margin-top: 50px;
    margin-left: 70px;
 }
 
 
  </style>
      
   <button class="print" onClick="window.print()">Print</button>
   
      <fieldset style="width:800px" class="fieldset">
    
    
    <form action="/update" method="POST" autocomplete="off">
@csrf
<center>
    <h1>RJE Garden Resort Reservation</h1>
    <h2>edithadevera860@gmail.com </h2>
   <h2>0999 671 0703</h2>
   <h3>Receipt</h3>
</center>
<br><br>


     
     <input type="hidden" name="id" value="{{$data ['id']}}">
     
     
      Name:
      <input class="name" type="text" name="firstname" placeholder="Firstname" required="" value="{{ $data['firstname']}} {{ $data['lastname']}}">
      <br><br>
      
          
      
      Events Services:
      <input class="events"  type="text" name="reservation" placeholder="Events" required="" value="{{ $data['events']}}">
       <br><br>
      
      
      Adults:
      <input class="adults"  type="text" name="adults" placeholder="Adults" required="" value="{{ $data['adults']}}">
      <br><br>
      
      Children:
      <input class="children"  type="text" name="children" placeholder="Children" required="" value="{{ $data['children']}}">
      <br><br>
      
      
    
      
 
    </form>
   
     </fieldset>
      <fieldset style="width:800px" class="fieldset1">
          <input class="charge" type="text" name="price" required="charge" class="price1" value="<?php echo "Total Charge:  ",$data['charge'] ?>" /><br>
          
          
          <input class="reservation" type="text" name="reservation" required=""value="<?php echo "Date:  ",$data['reservation'] ?>" /><br>
          </fieldset>
          
  
  </body>
</html>