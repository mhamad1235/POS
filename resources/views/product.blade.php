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
   
   
    
          <style>
            
.number{
  width:30px;
}

  .container{
      max-width: 600px;
      background: #fff;
      border-radius: 5px;
      width: 600px;
      padding: 20px;
      box-shadow: 0 2px 2px 3px rgba(0,0,0,0.1);
  }

  .wrap{
      display: flex;
      justify-content: space-between;
      align-items: center;
      width: 100%;
      
      margin-bottom: 40px;
      padding-bottom: 15px;
      border-bottom: 2px solid #e4e1e1;
  }

  .add{
      text-decoration: none;
      display: inline-block;
      width: 30px;
      height: 30px;
      background: #8bc34a;
      font-size: 2rem;
      font-weight: bold;
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;

  }


  .flex{
      display: flex;
      gap: 1.5em;
      margin-bottom: 15px;
  }

  .delete{
      text-decoration: none;
      display: inline-block;
      background: #ffffff;
      color: #f53737;
      font-size: 2em;
      font-weight: bold;
      width: 30px;
      height: 30px;
   
      margin-bottom: 5px;
      justify-content: center;
     text-align: center;
     border-radius: 10px;
      cursor: pointer;
  }
select{
  padding: 8px 10px;
  color: black;
      background: #ddd;
      border: none;
      width: 20%;
      border-radius: 5px;
     text-align: center
}
html {
  overflow-y: scroll;
}
  input{
      padding: 8px 10px;
      background: #ddd;
      border: none;
      width: 10%;
      border-radius: 5px;
      font-size: 5px
  }

  input:focus{
      outline: 1px solid #efefef;
  }

  .inp-group{
      margin-bottom:
  }
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
                     <script type="text/javascript">
                        setTimeout(function () {
                
                            // Closing the alert
                            $('#alert').alert('close');
                        }, 3000).animate({height: "20px"}, 500);
                    </script>
            <body style=" height:auto;">
                <a style="color: black" href="#"> <svg data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop"data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop" aria-controls="offcanvasTop" style="position: relative;left:6%;" xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="currentColor" class="bi bi-plus-circle-fill" viewBox="0 0 16 16">
                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                  </svg></a>
                  <h3 style="position:relative;left:10%;"></h3>
                    <div style="height: auto" width="100%" class="offcanvas offcanvas-top" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
                      <div class="offcanvas-header">
                       
                        <div> <table style="width:100%;position:relative;left:0%;" class="table table-striped text-center">
                            <button style="position: relative;left:100%"  type="button" class="btn btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            <thead>
                               <tr> {{$product->links()}}</tr>
                              <tr>
                                <th scope="col">ID_wasl</th>
                                <th scope="col">Name</th>
                                <th scope="col">Type</th>
                                <th scope="col">Barcode</th>
                                <th scope="col">BussinessName</th>
                                @if(!Session::has('lang'))
                                <th scope="col">BoughtPrice</th>
                                <th scope="col">SellingPrice</th>
                                <th scope="col">Profit</th>
                              
                                
                                <th scope="col">Number</th>
                                @endif
                                <th scope="col">Expired</th>
                                <th scope="col">Date</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach ($product as $product)
                          
                             <tr>
                                <td>{{$product->id_wasl}}</td>
                                <td>{{$product->name}}</td>
                              <td>{{$product->type}}</td>
                              <td>{{$product->barcode}}</td>
                              <td>{{$product->bussinessname}}</td>
                              @if((!Session::has('lang')))
                              <td>{{$product->buy}} $</td>
                              <td>{{$product->sell}} $</td>
                              <td>{{$product->sell-$product->buy}} $</td>
                             
                              <td   @if ($product->number==0)  style="color: crimson" @else style="color:black;" @endif>{{$product->number}}</td>
                              @endif
                              <td @if ($product->expired<=$date)  style="color: crimson" @else style="color:black;" @endif>@if ($product->expired<=$date)Expired @endif{{$product->expired}} </td>
                              <td>{{$product->date}} </td>
                             </tr>
                           
                             @endforeach
                            </tbody>
                          </table></div>

                      </div>
                   
                    
                    </div>
              
                   
                    
           
                <div style="position: relative;left:85%;top:160px"> <button class="btn btn-warning" id="tr">Add</button></div>
                @if ($errors->any())
                <div style="position: relative;left:5%"  id="alert" class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
                <form action="{{route('buyproducttest')}}" method="post">
                    @csrf
     <div class="container">
        <div class="wrap">
           <h2>Buy Product</h2>
          
        
        </div>
       <div style="display:flex;"> <h4 style="display:flex">Company:   <select   style="position:relative;left:30%;width:150px" name="com" class="form-select form-select-sm" aria-label=".form-select-sm example">
             
        @foreach($company as $company)
   
        <option  value="  {!!$company->name!!} ">
          {!! $company->name !!}
    </option>
      
    @endforeach
      
    </select></h4>   <h4 style="position:relative;left:10%">Date : <input name="datenow" style="width: 200px" value="{{$date}}" type="date">  </h4>
    <input value={{$a1['id_wasl']+1}} name="id_wasl" min="1" placeholder="ID-wasl" style="position: relative;left:20%;bottom:10px" type="number" name="" id="">
</div>
         <div class="inp-group">

         </div>
         <div style="position: relative;left:20%">
            <td style="position: relative;left:9.5%"><input name="checkdept" type= "checkbox" id= "check1" onclick= "checkFunction()">Dept</td>
            <td style="position: relative;right:25%"><input name="all" type="checkbox"  onclick= "checkFunction()" id="check2" >All</td>
          </tr>
          <tr>
            <td>  </td>
            <td ><input  style= "display:none;width:200px;position: relative;left:4%" id="message1" name="dept"  type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> </td>
          </tr>
        </div>
   </div>

   <script>
var app = @json($pro);
       const addBtn = document.getElementById("tr");

       const input = document.querySelector(".inp-group");

       function removeInput(){
           this.parentElement.remove();
       }

       function addInput(){
        const barcode = document.createElement("input");
        
        barcode.type="number"
        barcode.style.width='130px';
        barcode.placeholder=" Barcode";
        barcode.min="1";
        barcode.name="barcode[]";
    
        const email = document.createElement("input");
        
    
        email.placeholder=" type";
        email.name="type[]";

        const name = document.createElement("input");
        name.name="name[]";
        name.value="";
name.style.display='none';
        const trick = document.createElement("select");
   
     
        for (let index = 0; index < app.length; index++) {
           var special= document.createElement('option');
       
            var opt = document.createElement('option');
            opt.value=index;
            opt.innerHTML=app[index]['name'];
            trick.append(opt);
            var value = trick.value;
var text = trick.options[trick.selectedIndex].text;
trick.addEventListener("change", check);
        function check(e) {
          let mhamad=trick.options[trick.selectedIndex].text;
                  name.value= trick.options[trick.selectedIndex].text;
                  for (let index = 0; index < app.length; index++) {
        const element = app[index]['name'];
        if (element == mhamad) {
            barcode.value=app[index]['barcode'];
            email.value=app[index]['type'];
        }
       }
                }
        }       
  
     
      

       
           const kren = document.createElement("input");
        
         kren.type="number"
           kren.placeholder="Buy";
           kren.min="1";
         
           kren.name="buy[]";
           const froshtn = document.createElement("input");
        
           froshtn.type="number"
           froshtn.placeholder=" Sell";
           froshtn.min="1";
           
           froshtn.name="sell[]";
          
         
           const quan = document.createElement("input");
        
           quan.type="number"
           quan.placeholder=" Quantity";
        quan.min="1";
        quan.name="quan[]";
        
           const btn = document.createElement("a");
           btn.className="delete";
           btn.innerHTML="&times";
           
           const tes = document.createElement("input");
        tes.type="date";
        tes.name="date[]";
        tes.style.width="150px";
           

           btn.addEventListener("click", removeInput);

           const flex = document.createElement("div");
           

           input.appendChild(flex);
       
           flex.appendChild(name);
           flex.appendChild(trick);
           flex.appendChild(email);
           flex.appendChild(kren);
           flex.appendChild(froshtn);
           flex.appendChild(froshtn);
           flex.appendChild(barcode);
           flex.appendChild(quan);
          
           flex.appendChild(tes);
           flex.className="flex";
           flex.appendChild(btn);
       }

       addBtn.addEventListener("click",addInput);  
// If the user presses the "Enter" key on the keyboard


function wasl(){

const addBtn = document.getElementById("mhamad");
addBtn.style.display="block";

}


   </script>
   
   <script>
    function checkFunction(){
  if (check1.checked == true){
  
  message1.style.display = "block";                      
  }
  if (check1.checked == false){
  message1.style.display = "none";                      
  }
  if (check1.checked == true){
  message2.style.display = "block";                      
  }
  if (check1.checked == false){
  message2.style.display = "none";                      
  }
  if (check2.checked == true){
  check1.checked = false;
  message1.style.display = "none"; 
  message2.style.display = "none";                       
  }
  
  }
  </script>
 
   <button style="position: relative;left:7%;top:5px;width:100px" class="btn btn-primary">Submit</button>
</form>

  @if (count($a2)!=0)
      
  
  <div style="position: relative;left:25%" class="col-md-12">   
    <div class="row">
           
           <div class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
               <div class="row">
                   <div class="receipt-header">
                       <div class="col-xs-6 col-sm-6 col-md-6">
                           <div class="receipt-left">
                               <img class="img-responsive" alt="iamgurdeeposahan" src="https://bootdey.com/img/Content/avatar/avatar6.png" style="width: 71px; border-radius: 43px;">
                           </div>
                       </div>
                       <div class="col-xs-6 col-sm-6 col-md-6 text-right">
                           <div class="receipt-right">
                               <h5>Company Name : {{$a2[0]['bussinessname']}}</h5>
                             
                           </div>
                       </div>
                   </div>
               </div>
               
               <div class="row">
                   <div class="receipt-header receipt-header-mid">
                       <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                      
                       </div>
                       <div class="col-xs-4 col-sm-4 col-md-4">
                           <div class="receipt-left">
                               <h3>wasl {{$a2[0]['id_wasl']}} </h3>
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
                    
                     
                   
                         @for ($i = 0; $i < count($a2); $i++)
                             
                         <tr>
                             <th>{{$a2[$i]['name']}}</th>
                             <th>{{$a2[$i]['number']}}</th>
                             <th>{{$a2[$i]['buy']}} $</th>
                             <th>{{$a2[$i]['buy']*$a2[$i]['number']}} $ </th>
                         </tr>
                         @endfor
                        <tr>
                           
                            <td colspan="3" class="text-right"><h2><strong>Total Price:  </strong></h2></td>
                            
                            <td  class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i>{{$sum}}$</strong></h2></td>
                        </tr>
                        <tr>
                           
                            <td colspan="3" class="text-right"><h2><strong>Dept:  </strong></h2></td>
                            
                            <td  class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i>@if ($a2[0]['dept']!=0)
                                {{$sum-$a2[0]['dept']}}
                            @endif$</strong></h2></td>
                        </tr>
                       @if (!Session::has('lang'))
                       <tr>
                           

                     </tr>
                       @endif
                    </tbody>
                </table>
            </div>
            
            <div  class="row">
                <div class="receipt-header receipt-header-mid receipt-footer">
                    <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                        <div class="receipt-right">
                            <p style="font-size: 20px"><b>Date : {{$a2[0]['date']}}</b> </p>
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
@endif
</body>

</html>
