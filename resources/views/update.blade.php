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
    
    <form method="Post" action="{{route('up')}}"   >
      @csrf
      <input name="url" value={{$url}} hidden type="text">
      @if (strpos(url()->previous(), '/adminDashboard/customer'))
      
        <table  style="width:70%;position:relative;left:15%;top:30px">
          
        
         <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label">	Name</label></td>
               <td><input value={{$cus->name}} name="name" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="text" class="mb-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
             
           <input hidden name="id" value="{{$cus->id}}" type="text">
           
         <td><label for="exampleInputEmail1" class="form-label">	Location</label></td>
           <td><input value={{$cus->location}} name="location" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="text" class="mb-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
     </tr>
   
     <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label">PhoneNumber</label></td>
       <td><input value={{$cus->phonenumber}} name="phonenumber" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
        <td><label for="exampleInputEmail1" class="form-label">Dept</label></td>
       <td><input placeholder={{$cus->dept}} name="dept" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
 <td><label for="exampleInputEmail1" class="form-label">	Gender</label></td>
   <td><select  name="gender" class="form-select form-select-sm" aria-label=".form-select-sm example">
     <option selected value="male">Male</option>
     <option value="female">Female</option>
     
   </select></td>
 </tr>

 
        </table>
         
         <button style="width: 25%;position:relative;left:25%"  type="submit" class=" mt-5 btn btn-primary ">Submit</button>
         @else
         <table  style="width:70%;position:relative;left:15%;top:30px">
          <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label">	Name</label></td>
                <td><input value={{$cus->name}} name="name" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="text" class="mb-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
              
            <input hidden name="id" value={{ $cus->id}} type="text">
            
          <td><label for="exampleInputEmail1" class="form-label">	Type</label></td>
            <td><select  name="type" class="form-select form-select-sm" aria-label=".form-select-sm example">
            @foreach ($type as $type)
                <option value="{!! $type->name !!}">{{$type->name}}</option>
            @endforeach
              
            </select></td>
      </tr>
    
      <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label">Barcode</label></td>
        <td><input value={{$cus->barcode}} name="barcode" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
        <button style="width: 25%;position:relative;left:25%;top:200px"  type="submit" class=" mt-5 btn btn-primary ">Submit</button>
        @endif
      </form> 
   

</body>
</html>