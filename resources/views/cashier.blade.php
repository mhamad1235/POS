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
    <a style="color: black" href="#"> <svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" style="position: relative;left:6%;" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
      </svg></a>
      <h3 style="position:relative;left:10%;">Cashier</h3>
        <div style="height: 50%" class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasLabel">Add Cashier</h5>
            <button  type="button" class="btn btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
       
          <form action="{{route('cashieradd')}}" method="post">
           
            @csrf
           <table style="width:70%;">
            <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label">	Name</label></td>
                  <td><input name="name" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="text" class="mb-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
                
              
              
            <td><label for="exampleInputEmail1" class="form-label">	Location</label></td>
              <td><input name="location" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="text" class="mb-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
     
            </tr>
      
        <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label">PhoneNumber</label></td>
          <td><input name="phonenumber" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
    
    <td><label for="exampleInputEmail1" class="form-label">	Gender</label></td>
      <td><select name="gender" class="form-select form-select-sm" aria-label=".form-select-sm example">
        <option selected value="male">Male</option>
        <option value="female">Female</option>
        
      </select></td>
    </tr>
   <tr style="width: 100%">
    <td><label for="exampleInputEmail1" class="form-label">	Password</label></td>
    <td><input name="password" style="width:100%;" style="width: 80%;position:relative;left:1%;" type="text" class="mb-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>

   </tr>
    
           </table>
            
            <button style="width: 25%;position:relative;left:25%"  type="submit" class=" mt-5 btn btn-primary ">Submit</button>
         
        </form>
        
    </div>
    @if ($errors->any())
    <div style="position: relative;left:5%"  id="alert" class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
    <table style="width: 90%;position:relative;left:10%;" class="table table-striped text-center">
        <thead>
          <tr>
      
            <th scope="col">Name</th>
        
            <th scope="col">phone Number</th>
            <th scope="col">Location</th>
            <th scope="col">password</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
     @foreach ($cashier as $customer)
         <tr>
            <td>{{$customer->name}}</td>
      
            <td>{{$customer->phonenumber}}</td>
            <td>{{$customer->location}}</td>
            <td>{{$customer->password}}</td>
            <td>
<a href="/delete/{{$customer->id}}"><button class="btn btn-danger">Delete</button></a>
<a href="/updatecasher/{{$customer->id}}"><button class="btn btn-success">Update</button></a>

            </td>
            @endforeach
</body>
</html>