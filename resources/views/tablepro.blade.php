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
    <form style="position: relative;left:10%" action="" method="get">
        <button class="btn btn-danger" name="expired" value="expired">Expired</button>
        <button class="btn btn-danger" name="zero" value="zero">Zero Product</button>
        <input name="search" class="input input-search" placeholder="Write Barcode" style="position: relative;left:40%;border:none;border-bottom:solid 1px blue;" type="text"> <button class="btn btn-primary" style="position: relative;left:40%">Search</button>
    </form>
    <table style="width: 90%;position:relative;left:10%;" class="table table-striped text-center">
        <thead>
          <tr>
      
            <th scope="col">Id_recipte</th>
            <th scope="col">Name</th>
            <th scope="col">Type</th>
            <th scope="col">Barcode</th>
            <th scope="col">Company</th>
            <th scope="col">Number</th>
            <th scope="col">Expired</th>
          </tr>
        </thead>
        <tbody>
     @foreach ($pro as $customer)
         <tr>
            <td>{{$customer->id_wasl}}</td>
            <td>{{$customer->name}}</td>
            <td>{{$customer->type}}</td>
            <td>{{$customer->barcode}}</td>
            <td>{{$customer->bussinessname}} </td>
            <td>{{$customer->number}} </td>
            <td>{{$customer->expired}} </td>
            @endforeach
</body>
</html>