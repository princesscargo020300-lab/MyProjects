<!DOCTYPE html>
  <body>
    <head>
      <style type="text/css">
      
      
         ul {
    list-style-type: none;
    margin-top: 50px;
}
h1{
    color: black;
}
.rate{
    color: black;
    text-decoration: none;
}


.check{
    color: black;
    text-decoration: none;
}
      
      
.view{
    color: black;
    text-decoration: none;
    margin-bottom: 300px;
}
      
  
    
      </style>
    </head>
        <nav>
            <ul>
            
            <center>
                 <h1>RJE Garden Resort Reservation System</h1>
            </center>
      
    <li><a class="rate"  href="{{('Rateinformation')}}">Rateinformation</a></li><br>
    
       <li><a class="check"  href="{{('Addrecord')}}">Check in</a></li><br>
      
 
       <li> <a class="view" href="{{('Results')}}">View Reservation</a></li><br>


      </ul>
   </nav>
        
    

<br><br>


<center>
 
       
</center>
</body>
</html>
@yield('content')

