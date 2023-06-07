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
   
    <a style="color: black" href="#"> <svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" style="position: relative;left:6%;" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
        <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
      </svg></a>
      <h3 style="position:relative;left:10%;">Company</h3>
        <div style="height: 50%" class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasLabel">Add Company</h5>
            <button  type="button" class="btn btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
          </div>
       
          <form action="{{route('companyadd')}}" method="post">
           
            @csrf
           <table style="width:70%;">
            <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label">	Name</label></td>
                  <td><input name="name" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="text" class="mb-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
                
              
              
            <td><label for="exampleInputEmail1" class="form-label">	Location</label></td>
              <td><input name="location" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="text" class="mb-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
        </tr>
      
        <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label">PhoneNumber</label></td>
          <td><input name="phonenumber" style="width:100%;" style="width: 38%;position:relative;left:1%;" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
    
  
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
                <th scope="col">location</th>
                <th scope="col">PhoneNumber</th>
                <th scope="col">Dept</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
         @foreach ($customer as $customer)
             <tr>
                <td>{{$customer->name}}</td>
                <td>{{$customer->location}}</td>
                <td>{{$customer->phonenumber}}</td>
                <td>{{$customer->dept}} $</td>
                <form method="get" action="">
                  
                <td><button name="dept" value="{{$customer->name}}"  class="btn btn-secondary">Dept</button></form>
                    <a href="/delete/{{$customer->id}}"><button name="dept" value="{{$customer->name}}"  class="btn btn-danger">Delete</button></a>
                   <a href="/comupp/{{$customer->id}}"> <button name="dept" value="{{$customer->name}}"  class="btn btn-success">Update</button></a>
                
                </td>
              
              </tr>
         @endforeach
 
            </tbody>
        </table>  
     
        {{count($mhamad)}}
        <div style="position: relative; left:24%">
         
              </div>
        @foreach ($mhamad as $item)
      
   
        <style>
          body{ 
            height:auto;
              background:#eee;
              margin:0;
              }
              .text-danger strong {
                          color: #9f181c;
                      }
                      .receipt-main {
                          background: #ffffff none repeat scroll 0 0;
                          border-bottom: 12px solid #333333;
                          border-top: 12px solid #9f181c;
                          margin-top: 50px;
                          margin-bottom: 50px;
                          padding: 40px 30px !important;
                          position: relative;
                          box-shadow: 0 1px 21px #acacac;
                          color: #333333;
                          font-family: open sans;
                      }
                      .receipt-main p {
                          color: #333333;
                          font-family: open sans;
                          line-height: 1.42857;
                      }
                      .receipt-footer h1 {
                          font-size: 15px;
                          font-weight: 400 !important;
                          margin: 0 !important;
                      }
                      .receipt-main::after {
                          background: #414143 none repeat scroll 0 0;
                          content: "";
                          height: 5px;
                          left: 0;
                          position: absolute;
                          right: 0;
                          top: -13px;
                      }
                      .receipt-main thead {
                          background: #414143 none repeat scroll 0 0;
                      }
                      .receipt-main thead th {
                          color:#fff;
                      }
                      .receipt-right h5 {
                          font-size: 16px;
                          font-weight: bold;
                          margin: 0 0 7px 0;
                      }
                      .receipt-right p {
                          font-size: 12px;
                          margin: 0px;
                      }
                      .receipt-right p i {
                          text-align: center;
                          width: 18px;
                      }
                      .receipt-main td {
                          padding: 9px 20px !important;
                      }
                      .receipt-main th {
                          padding: 13px 20px !important;
                      }
                      .receipt-main td {
                          font-size: 13px;
                          font-weight: initial !important;
                      }
                      .receipt-main td p:last-child {
                          margin: 0;
                          padding: 0;
                      }	
                      .receipt-main td h2 {
                          font-size: 20px;
                          font-weight: 900;
                          margin: 0;
                          text-transform: uppercase;
                      }
                      .receipt-header-mid .receipt-left h1 {
                          font-weight: 100;
                          margin: 34px 0 0;
                          text-align: right;
                          text-transform: uppercase;
                      }
                      .receipt-header-mid {
                          margin: 24px 0;
                          overflow: hidden;
                      }
                      
                      #container {
                          background-color: #dcdcdc;
                      }</style>
                   
          <body style=" height:auto;">
         
              <div  role="navigation"  style=" height:auto;position:relative;left:25%;" class="col-md-12">   
                  <div style=" height:auto;" class="row">
                         
                         <div style=" height:auto;"  class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                             <div class="row">
                                 <div class="receipt-header">
                                     <div class="col-xs-6 col-sm-6 col-md-6">
                                         <div style="display:" class="receipt-left">
                                             <img  class="img-responsive" alt="iamgurdeeposahan" src="https://bootdey.com/img/Content/avatar/avatar6.png" style="width: 71px; border-radius: 43px;">
                                             <h3  >Wasl {{$item->id_wasl}}</h3>
                                          </div>
                                     </div>
                                     <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                                         <div class="receipt-right">
                                          
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             
                             <div class="row">
                                 <div class="receipt-header receipt-header-mid">
                                     <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                         <div class="receipt-right">
                                             <h2>{{$item->company}} </h2>
                                           
                                         
                                         </div>
                                     </div>
                                     <div class="col-xs-4 col-sm-4 col-md-4">
                                         <div class="receipt-left">
                                            
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             
                             <div>
                                 <table class="table table-bordered">
                                     <thead>
                                         <tr>
                                             <th>Product</th>
                                             <th>Quantity</th>
                                             <th>Price</th>
                                             <th>Total</th>
                                         </tr>
                                     </thead>
                                     <tbody>
                                     
                                      
                                    
                                          @for ($i = 0; $i < count($item['name']); $i++)
                                              
                                          <tr>
                                              <th>{{$item['name'][$i]}}</th>
                                              <th>{{$item['number'][$i]}}</th>
                                              <th>{{$item['price'][$i]}} $ </th>
                                              <th>{{($item['price'][$i])*($item['number'][$i])}} $ </th>
                                          </tr>
                                          @endfor
                                         <tr>
                                            
                                             <td colspan="3" class="text-right"><h2><strong>Dept: </strong></h2></td>
                                             <td  class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i>{{$item->dept}} $</strong></h2></td>
                                         </tr>
                                         <tr>
                                            
                                            <td colspan="3" class="text-right"><h2><strong>payed: </strong></h2></td>
                                            <td  class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i>{{$item->payed}} $</strong></h2></td>
                                        </tr>
                                        @if (!Session::has('lang'))
                                   
                                            
                                     
                                        @endif
                                     </tbody>
                                 </table>
                             </div>
                             
                             <div class="row">
                                 <div class="receipt-header receipt-header-mid receipt-footer">
                                     <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                                         <div class="receipt-right">
                                             <p style="font-size: 20px"><b>Date :</b> {{$item->date}}</p>
                                             <h5 style="color: rgb(140, 140, 140);">Thanks for shopping.!</h5>
                                         </div>
                                     </div>
                                     <div class="col-xs-4 col-sm-4 col-md-4">
                                         <div class="receipt-left">
                                           
                                         </div>
                                     </div>
                                 </div>
                             </div>
                             
                         </div>    
                     </div>
                 </div>
   @endforeach
 

</body>
</html>