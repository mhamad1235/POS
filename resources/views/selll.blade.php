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
<body>
  @include('sweetalert::alert')
  @extends('nav')
    @section('nav')

   
      <form action="{{route('sellproduct')}}" method="post">
        @csrf
       <table style="width:70%;">       
       <tr>
          <td><select  name="id_product[]" class="form-select form-select-sm" aria-label=".form-select-sm example">
            @foreach($product as $product)
        <option style="display: flex" value="{!! $product->id !!}">{!! $product->name !!}-{!! $product->sell !!}$-{!! $product->number !!}
     
        </option>
      
    @endforeach
          </select></td>
        
 <td><input type="checkbox"></td>

        </tr>

       </table>
        
        
      </form>
    </div>
    @if(Session::has('error')) 
    <div style=" margin-left:10%" class="alert alert-danger">
    {{Session::get('error')}}
    
@endif

</div>

    </div>
    
    
</body>
</html>