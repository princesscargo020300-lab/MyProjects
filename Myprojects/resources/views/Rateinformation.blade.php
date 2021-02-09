@extends('layouts.master')
    @section('content')
<html>
    <body>
        <head>
            <style type="text/css">
           table{
           margin-left: 300px;
           margin-top: -130px;
         }
   

          .entrance{
              color: black;
              background-color: aqua;
              text-align: center;
              
          }
          
          
          
            .night{
              color: black;
              background-color: aqua;
              text-align: center;
              
          }
          
          
          
            .veneu{
              color: black;
              background-color: aqua;
              text-align: center;
              
          }
          
          
          
            .rent{
              color: black;
              background-color: aqua;
              text-align: center;
              
          }
                
            </style>
        </head>
        
        <table border="1">
        <tr>
        <tr>
      
        <td class="entrance">Entance fee</td>
        <td class="night">Night Swimming</td></tr>
       </tr>
       
        <td>Adults: 30pesos (11 years old obove)</td>
         <td>Kid: 30pesos (10 years old obove)</td>
        <tr>
        <td>Adults: 30pesos (10 years old obove)</td>
         <td>Kid: 40pesos </td>
         <tr>
             <td class="veneu">Veneu Rent for Occasions(seasonal)</td>
             <td class="rent">Rent</td>
         </tr>
         <tr>
             <td>
                 Summer season: 7k to 10k
             </td>
             
              <td>
                 
             </td>
             <tr>
                 <td>
                     Rainy season: 3k to 6k

                 </td>
                 
                 <td>
                     Cottage: 150 pesos
                 </td>
             </tr>
         </tr>
        </tr>
        </tr>
        </tr>
    
        </table>
    
    </body>
</html>
@endsection