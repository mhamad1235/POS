<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <title>Selling</title>
</head>
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


</style>
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
<body >
  @include('sweetalert::alert')
 
  @if (Session::has('lang'))
  @extends('nav')
    @section('nav')

@endif

 <input hidden style="position: relative;left:200px;top:200px"  type="text" name="" id="barcode">
 <input hidden style="position: relative;left:200px;top:200px"  type="text" name="" id="barcode2">
    
 @if (Session::has('noty'))
    <h3 style="color: #f53737;position:relative;left:10%">{{Session::get('noty')}}</h3>
@endif
      <form action="{{route('sellproducttest')}}" method="post">
        @csrf
       <table  style="width:70%;overflow: scroll;">   
        <div class="container">
          <div class="wrap">
            <select class="form-control" id="camera-select"></select>
    <button title="Play" style="width: 400px;position:relative;top:100px;right:400px" class="btn btn-success btn-sm" id="play" type="button" data-toggle="tooltip">Play</button>
    <canvas style="position: relative;right:10px" width="520" height="540" id="webcodecam-canvas"></canvas>

   <script>


   </script>
    <script type="text/javascript" src={{asset('assets/lib/qrcodelib.js')}}></script>
    <script type="text/javascript" src={{asset('assets/lib/webcodecamjs.js')}} ></script>
    <script type="text/javascript">



    (function(undefined) {
    "use strict";
    function Q(el) {
        if (typeof el === "string") {
            var els = document.querySelectorAll(el);
            return typeof els === "undefined" ? undefined : els.length > 1 ? els : els[0];
        }
        return el;
    }
    var play = Q("#play"),
    args = {
        resultFunction: function(res) {
            console.log(res.code);
            var barcode=res.code;
  
            
            var c=document.getElementById('barcode2');
            var c1=document.getElementById('barcode');
           
         if (res) {
           
            
            var eid = document.getElementById('tr');
    for (var i = 0; i < eid.options.length; i++) {
        if (eid.options[i].text === res.code){
            eid.options[i].selected = true;
        
        c.value=eid.options[i].value;
        }
        
    }  
    addInput();
          
         }
        }
        
        
    };
    var decoder = new WebCodeCamJS("#webcodecam-canvas").buildSelectMenu("#camera-select", "environment|back").init(args);
    play.addEventListener("click", function() {
        decoder.play();
    }, false);
  
    document.querySelector("#camera-select").addEventListener("change", function() {
        if (decoder.isInitialized()) {
            decoder.stop().play();
        }
    });
}).call(window.Page = window.Page || {});</script>

           @if ($welcom)
           <h2>welcome {{$welcom->name}}</h2>
           @else
           <h2 hidden>Sell Product</h2>
           @endif
          
            
           <select hidden id="tr"  style="position:relative;right:30%;width:40%" name="customer" class="form-select form-select-sm" aria-label=".form-select-sm example">
             
            @foreach($product as $product)
            
            @if ($product->number >0 && $product->expired>$date  )
                
           
            <option  data-icon="fa-heart" id="tr" value="@if($product->number>0)   {!!$product->name!!}|{!!$product->sell!!} @endif">@if ($product->number > 0)
                {!! $product->barcode!!} 
            @endif
            @if ($product->number >0 && $product->expired>$date  )
                
           
            <option style="display:none" data-icon="fa-heart" id="tr" value="@if($product->number>0)   {!!$product->name!!}|{!!$product->sell!!} @endif">@if ($product->number > 0)
                {!!  $product->name !!} 
            @endif
          
          </option>
            @endif
          </option>
            @endif
        @endforeach
          
        </select>
          
          </div>
         <div style="display:flex"> <h4 style="display:flex">@if (count($p)!=0)
            {{($wasl->id)+1}}
             
         @endif</h4>   <h4 style="position:relative;left:7%">Date :  {{$date}}</h4></div>
           <div class="inp-group">

           </div>
           <input value="0" style="position:relative;left:24.25%;display:none;" id="sum"  type="number">
     </div>

     <script>


         const addBtn = document.getElementById("tr");
         const c = document.getElementById("barcode2");
var count=0;
         const input = document.querySelector(".inp-group");
  
         function removeInput(){
           
          count--;
             this.parentElement.remove();
             const t=document.getElementById('sum');
  t.value=parseInt(t.value)-parseInt(bar2.value);
  if (count==0) {
    t.style.display='none';
    t.value='0';
  }
         }
        
         function addInput(){
          count++;
         
          const name = document.createElement("input");
          name.name="test[]";
          var valueOne= $('#barcode2').val().split('|')[0];
          var valueTwo= $('#barcode2').val().split('|')[1];
  name.value=valueOne;
             const email = document.createElement("input");
             
      
        
             email.type="number";
             email.name="number";
           
             email.min="0";
          
             email.value=1;
             
             email.placeholder=" Quantity";
             email.name="quan[]";
             const btn = document.createElement("a");
             btn.className="delete";
             btn.innerHTML="&times";
             
             const tes = document.createElement("input");
             window.bar2 = tes;
           const t=document.getElementById('sum');
           t.style.display='block';
           tes.disabled = true;
                tes.value=parseInt(valueTwo)+"$";
                
                email.addEventListener('change', function () {  
                   
                tes.value=parseInt(valueTwo)*email.value+"$"; 
                var newStr = tes.value.replace('$','')
                var final=parseInt(newStr)/email.value;
                t.value=parseInt(t.value)+final;
                window.bar2 = tes;
      
           
            });
            var newStr = tes.value.replace('$','')
                var final=parseInt(newStr)/email.value;
                t.value=parseInt(t.value)+final;
 
             btn.addEventListener("click", removeInput);

             const flex = document.createElement("div");
             

             input.appendChild(flex);
           
             flex.appendChild(name);
             flex.appendChild(email);
             flex.appendChild(tes);
           
             flex.className="flex";
             flex.appendChild(btn);
             
         }
        
        
  // If the user presses the "Enter" key on the keyboard

function wasl(){

  const addBtn = document.getElementById("mhamad");
addBtn.style.display="block";
 
}


     </script>

 </body>
    
    <br/>
    <td style="width: 50%"><select style="position:relative;left:22%;width:80%" name="customer" class="form-select form-select-sm" aria-label=".form-select-sm example">
        @foreach($customer as $customer)
        <option value="{!! $customer->name !!}">{!! $customer->name !!}</option>
    @endforeach
      
    </select></td>

<tr>

  <td style="position: relative;left:9.5%"><input name="checkdept" type= "checkbox" id= "check1" onclick= "checkFunction()">Dept</td>
  <td style="position: relative;right:25%"><input name="all" type="checkbox"  onclick= "checkFunction()" id="check2" >All</td>
</tr>
<tr>
  <td>  </td>
  <td width="50px"><input style= "display:none" id="message1" name="dept" style="width:100%;position: relative;left:10px;"  type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> </td>
</tr>



       </table>
        
        <button onclick="wasl()" style="width: 25%;position:relative;left:8%"  type="submit" class=" mt-5 btn btn-primary ">Submit</button>
      </form>
    </div>
    @if(Session::has('error')) 
    <div style=" margin-left:10%" class="alert alert-danger">
    {{Session::get('error')}}
    
@endif

</div>

    </div>
<br/>
 
    <!--
   <form method="get" action="">
    
      <table style="position:relative;left:10%">
    <tr style="width:100%;"> <td><label for="exampleInputEmail1" class="form-label"></label></td>
      <td><input value="" name="type" style="width:100%;" style="width: 38%;position:relative;left:1%;" placeholder="Search" type="text" class=" mt-2 form-control" id="exampleInputEmail1" aria-describedby="emailHelp"></td>
      <td><button class="btn btn-primary mt-2 ms-1" type="submit">Search</button></td>
      </tr>
      
             </table>
    </form>
    <br/>
    <div style="position: relative;left:10%">{{$sells->links()}}</div>
    <table style="width: 90%;position:relative;left:10%;border-left:2px black solid;border-top:2px black solid;overflow: auto;" class="table table-striped text-center">
        <thead>
          <tr>
      
         
      
            <th scope="col">Customer</th>
            <th scope="col">Date</th>
            <th scope="col">Wasl</th>
     
          </tr>
        </thead>
        <tbody>
    @foreach ($sells as $sell)
        <tr>
         
          <td>{{$sell->customer}}</td>
          <td>{{$sell->date}}</td>
          <td><a href="/adminDashboard/wasl/{{$sell->id}}" ><button class="btn btn-success">Wasl</button></a></td>
    @endforeach
   
        </tbody>
      
      </table>
 
    -->
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    
body{
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
            }
            body{
                
            }
            </style>
<body>
    @if (count($p)!=0)
     
    <div id="print"  style="position:relative;left:25%; class="col-md-12">   
        <div class="row">
               
               <div  class="receipt-main col-xs-10 col-sm-10 col-md-6 col-xs-offset-1 col-sm-offset-1 col-md-offset-3">
                   <div class="row">
                       <div class="receipt-header">
                           <div class="col-xs-6 col-sm-6 col-md-6">
                               <div style="display:" class="receipt-left">
                                   <img  class="img-responsive" alt="iamgurdeeposahan" src="https://bootdey.com/img/Content/avatar/avatar6.png" style="width: 71px; border-radius: 43px;">
                                   <h3  >Wasl {{$wasl->id}}</h3>
                                </div>
                              <h5 style="position: relative;left:145%;bottom:100px">@if ($cashiername)
                                Cashier : {{$cashiername->name}}
                              @endif</h5>
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
                                   <h2>{{$wasl->customer}} </h2>
                                 
                               
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
                           
                            
                          
                                @for ($i = 0; $i < count($wasl['name_product']); $i++)
                                    
                                <tr>
                                    <th>{{$wasl['name_product'][$i]}}</th>
                                    <th>{{$wasl['quantity'][$i]}}</th>
                                    <th>{{$wasl['nrx_tak'][$i]}} $ </th>
                                    <th>{{($wasl['nrx_tak'][$i])*($wasl['quantity'][$i])}} $ </th>
                                </tr>
                                @endfor
                               <tr>
                                  
                                   <td colspan="3" class="text-right"><h2><strong>Total Price: </strong></h2></td>
                                   <td  class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i>{{$wasl->payed}} $</strong></h2></td>
                               </tr>
                              @if (!Session::has('lang'))
                              <tr>
                                  
                                <td colspan="3" class="text-right"><h2><strong>Profit: </strong></h2></td>
                                <td class="text-left text-danger"><h2><strong><i class="fa fa-inr"></i>{{$wasl->total_profit}} $</strong></h2></td>
                            </tr>
                              @endif
                           </tbody>
                       </table>
                   </div>
                   
                   <div  class="row">
                       <div class="receipt-header receipt-header-mid receipt-footer">
                           <div class="col-xs-8 col-sm-8 col-md-8 text-left">
                               <div class="receipt-right">
                                   <p style="font-size: 20px"><b>Date :</b> {{$wasl->date}}</p>
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
</body>
</html>