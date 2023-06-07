<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>customer</title>
</head>
<body  style="height:200%">
    @extends('nav')
    @section('nav')
  
    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasExampleLabel">Type</h5>
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
       
        <div class="dropdown mt-3">
          <form method="post" action="{{Route('addtype')}}">
            @csrf
            <input class="mb-2 form-control" name="name" type="text"> <br/>
            <button class="btn btn-secondary">Submit</button>
          </form>
          </button>
         
        </div>
      </div>
    </div>
    <a style="color: black" href="#"> <svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" style="position: relative;left:6%;" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
      </svg></a>
      <h3 style="position:relative;left:10%;">Product</h3>
        <div style="height: 50%" class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasLabel">Add Product</h5>
            <button  type="button" class="btn btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
       
          <form action="{{route('addproductinfo')}}" method="post">
           
            @csrf
           <table style="width:70%;">
            <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label">	Name</label></td>
                  <td><input name="name" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="text" class="mb-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
                
              
              
            <td><label for="exampleInputEmail1" class="form-label">	Type</label></td>
              <td><select style="width:100%" name="type" class="form-select form-select-sm" aria-label=".form-select-sm example">
                @foreach($type as $type)
                <option value="{!! $type->name !!}">{!! $type->name !!}</option>
            @endforeach
              
            </select></td>
        </tr>
      
        <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label">Barcode</label></td>
          <td><input name="barcode" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
    
    </tr>
   
    
           </table>
          <button style="position: relative;left:12%;top:5%" class="btn btn-primary">Submit</button>
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
    <a style="position: relative;left:85%" class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" role="button" aria-controls="offcanvasExample">
      Add type
    </a>
  
    
        <table style="width: 90%;position:relative;left:10%;" class="table table-striped text-center">
            <thead>
              <tr>
          
                <th scope="col">Name</th>
                <th scope="col">Tpye</th>
                <th scope="col">Barcode</th>
               <th>Barcode</th>
              </tr>
            </thead>
            <tbody>
         @foreach ($pro as $pro)
             <tr>
                <td>{{$pro->name}}</td>
                <td>{{$pro->type}}</td>
                <td>{{$pro->barcode}}</td>
                <td>
               
              <div style="position:relative;left:80px">  {!! DNS1D::getBarcodeSVG($pro->barcode, 'C39');!!}</div>
          
            
            </td>
               
                  
                <td><a href="/delete/{{$pro->id}}"><button   class="btn btn-danger">Delete</button></a>
                  <a href="/update/{{$pro->id}}"><button   class="btn btn-success">Update</button></a>
                </td>
              
              </tr>
         @endforeach
 <div style="position: relative; left:10%">

</div>
            </tbody>
          </table>
       

</body>
</html>