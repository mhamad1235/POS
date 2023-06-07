<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @extends('nav')
    @section('nav')
    <form method="Post" action="{{route('comup')}}"   >
        @csrf
      
    
          <table  style="width:70%;position:relative;left:15%;top:30px">
            
          
           <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label">	Name</label></td>
                 <td><input value={{$casher->name}} name="name" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="text" class="mb-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
               
             <input hidden name="id" value="{{$casher->id}}" type="text">
             
           <td><label for="exampleInputEmail1" class="form-label">	Location</label></td>
             <td><input value={{$casher->location}} name="location" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="text" class="mb-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
       </tr>
     
       <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label">PhoneNumber</label></td>
         <td><input value={{$casher->phonenumber}} name="phonenumber" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
          <td><label for="exampleInputEmail1" class="form-label">Dept</label></td>
         <td><input placeholder={{$casher->dept}} name="dept" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
 
     </td>
   </tr>
  
   
          </table>
           
           <button style="width: 25%;position:relative;left:27.5%"  type="submit" class=" mt-5 btn btn-primary ">Submit</button>
          
</body>
</html>