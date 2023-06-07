<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script
    src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>

    <title>Profit </title>
</head>
<style>
    
    
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
<body>
    @extends('nav')
    @section('nav')
    <script>
        function dis(){
       
         
           
           
        }
    </script>
  
    <form action="" method="get">
       
       <table  style="width: 100%">
        <tr >
            <td>  <td><button style="position: relative;left:25%;top:2px;margin:5px;display:inline" class="btn btn-warning" name="today" value={{$date}}>Today</button></td></td>
        </tr>
        <tr >
            <td>  <td><button style="position: relative;left:40%;bottom:46px;margin:5px;display:grid" class="btn btn-warning" name="last" value={{$dt}}>Monthly</button></td></td>
        </tr>
        <tr width="100%">
            
            <td style="position: relative;left:9%">From:</td>
          
<td style="text-align: center" width="50%"><input name="start" style="width:50%;text-align:center" type="date"></td>
<td style="position: relative;left:6%">To:</td>
<td style="text-align: center" width="50%"><input name="to"  style="width:50%;text-align:center" type="date"></td>
       
</tr>
<tr><td style="position: relative;left:18%;top:10px"><button class="btn btn-outline-success">Submit</button></td></tr>
       </table>
    </form>
    <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->

<!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
        <div class="limiter">
<div class="container-table100">
<div class="wrap-table100">
<div class="table">
<div class="row header">
<div class="cell">
Totally
</div>
<div class="cell">

</div>
</div>


<div class="row">
<div class="cell" data-title="Full Name">
Total Sold money : </div>
<div class="cell" data-title="Age">
{{$wargrtn}} $
</div>
</div>


<div class="row">
<div class="cell" data-title="Full Name">
Total Bought money : </div>
 <div class="cell" data-title="Age">
 {{$draw}} $
</div>
</div>


<div class="row">
<div class="cell" data-title="Full Name">
Total dept  : </div>
<div class="cell" data-title="Age">
{{$qarzyxalk}} $
</div>
</div>


<div class="row">
<div class="cell" data-title="Full Name">
Total  your dept money : </div>
<div class="cell" data-title="Age">
{{$qarzyxot}} $
</div>
</div>


<div class="row">
<div class="cell" data-title="Full Name">
Total  profit : </div>
<div class="cell" data-title="Age">
{{$qazanj}} $
</div>
</div>


<div class="row">
<div class="cell" data-title="Full Name">
Total  Bought Product : </div>
<div class="cell" data-title="Age">
{{$total_product}} 
</div>
</div>


<div class="row">
<div class="cell" data-title="Full Name">
Total  Sell Product :</div>
<div class="cell" data-title="Age">
{{$total_product_sell}} 
</div>
</div>



</div>
</div>
</div>
</div>
</div>
<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/bootstrap/js/popper.js"></script>
<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
<script src="js/main.js"></script>

<!--
    <table id="tb" style="position:relative;left:10%;top:50px;font-size:32px;">
    <tr style="border-bottom: #8b9aff  solid 1px">
        <td>Total Sold money : {{$wargrtn}} $</td>
    
    </tr >
    <tr style="border-bottom: #8b9aff  solid 1px">
        <td>Total Bought money : {{$draw}} $</td>
    </tr>
    <tr style="border-bottom: #8b9aff  solid 1px">
        <td>Total dept  : {{$qarzyxalk}} $</td>
    </tr>
    <tr style="border-bottom: #8b9aff  solid 1px">
        <td>Total  your dept money : {{$qarzyxot}} $</td>
    </tr>
    <tr style="border-bottom: #8b9aff  solid 1px">
        <td>Total  profit : {{$qazanj}} $</td>
    </tr>
    <tr style="border-bottom: #8b9aff  solid 1px">
        <td>Total  Bought Product : {{$total_product}} </td>
    </tr>
    <tr style="border-bottom: #8b9aff  solid 1px">
        <td>Total  Sell Product : {{$total_product_sell}} </td>
       
    </tr>
</table>   -->


<!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
        <!--nedddd--><h3 style="  center:25px;margin-left:600px;">Sell Product</h3>
        <!--nedddd--> <br> <br> <br>
        <!--nedddd--> <br> <br> <br>
        <!--nedddd--> <br> <br> <br>
        <!--nedddd--> <br> <br> <br>
        <!--nedddd--> <br> <br> <br>
        
        
<div id="tbb" style="position:relative;center:50%;bottom:300px;height:300px;overflow:auto;">
    <ul class="list">
            @foreach ($array_type as $item)
            <li style="font-size: 20px">
              <!--  {{$item}}  --> 
                <div class="container-fluid" style="float:left; height:150px;display:inline-block;">
    <div class="container">
      <div class="row" >
        <div class="col-sm-2">
          <div class="card text-center">
            <div class="title">
              <i class="fa fa-paper-plane" aria-hidden="true"></i>
              <h2> {{$item}} </h2>
            </div>
            <div class="price">
       
            </div>
        </div>
        </div>
            </li>
            @endforeach
    </ul>
</div>  
 <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->           

        <!--nedddd-->
        <!--nedddd--><h3 style=" center:25px; margin-left:600px;">Bought Product</h3>
<br> <br> <br>
        <!--nedddd--> <br> <br> <br>
        <!--nedddd--> <br> <br> <br>
        <!--nedddd--> <br> <br> <br>
        <!--nedddd--> <br> <br> <br>
        <div id="tbb" style="position:relative;center:50%;bottom:300px;height:300px;overflow:auto;">
    <ul class="list">
    @foreach ($array_type_buy as $item)
                <li style="font-size: 20px">
              <!--  {{$item}}  --> 
                <div class="container-fluid" style="float:left; height:150px;display:inline-block;">
    <div class="container">
      <div class="row" >
        <div class="col-sm-2">
          <div class="card text-center">
            <div class="title">
              <i class="fa fa-paper-plane" aria-hidden="true"></i>
              <h2> {{$item}} </h2>
            </div>
            <div class="price">
             
            </div>
          </div>
        </div>
            </li>
            @endforeach
    </ul>
</div>
  <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
        <!--nedddd-->
<div style="width: 100%">
<canvas id="myChart" style="width:100%;max-width:700px;position:relative;left:20%;"></canvas>
<canvas id="myChart2" style="width:100%;max-width:600px;position: relative;left:20%;"></canvas>
<script>
     const myServices1 = @json($draw);
      const wargrtn1 = @json($wargrtn);
      const total_product1 = @json($total_product);
      const total_product_sell1 = @json($total_product_sell);
      const qarzyxalk1 = @json($qarzyxalk);
      const qarzyxot1 = @json($qarzyxot);
    var xValues1 = ["Buy", "Sell", "Bought Product", "Sell Product", "Customer Dept","Your Dept"];
    var yValues1 = [myServices1, wargrtn1, total_product1, total_product_sell1, qarzyxalk1,qarzyxot1];
    var barColors1 = [
      "#b91d47",
      "#00aba9",
      "#2b5797",
      "#e8c3b9",
      "#1e7145"
    ];
    
    new Chart("myChart2", {
      type: "pie",
      data: {
        labels: xValues1,
        datasets: [{
          backgroundColor: barColors1,
          data: yValues1
        }]
      },
      options: {
        title: {
          display: true,
          text: "World Wide Wine Production 2018"
        }
      }
    });
    </script>
</div>
<script>
      const myServices = @json($draw);
      const wargrtn = @json($wargrtn);
      const total_product = @json($total_product);
      const total_product_sell = @json($total_product_sell);
      const qarzyxalk = @json($qarzyxalk);
      const qarzyxot = @json($qarzyxot);
    const xValues = [' ','Buy','Sell','Bought Product','Sell Product','Customer dept','Your dept'];
    const yValues = [0,myServices,wargrtn,total_product,total_product_sell,qarzyxalk,qarzyxot  ];
    var barColors = ["red", "green","blue","orange","brown","yellow",'black'];
    const myChart = new Chart("myChart", {
    type: "bar",
    data: {
        labels: xValues,
        datasets: [{
  backgroundColor:barColors,
  borderColor: "rgba(0,0,255,0.1)",
  data: yValues
}]
    },
    options: {}
    
    
  });</script>
</body>
</html>

<style>


/* by Jamal Hassouni*/
@import url('https://fonts.googleapis.com/css?family=Roboto:300');
body{
  margin: 0;
  padding: 0;
 font-family: 'Roboto', sans-serif !important;
}
section{
  width: 100%;
  height: 100vh;
  -webkit-box-sizing: border-box;
          box-sizing: border-box;
          padding: 140px 0;
}
.card{
  position: relative;
  max-width: 300px;
  height: auto;
  background: linear-gradient(-45deg,#fe0847,#feae3f);
  border-radius: 15px;
  margin: 0 auto;
  padding: 40px 20px;
  -webkit-box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
          box-shadow: 0 10px 15px rgba(0,0,0,.1) ;
-webkit-transition: .5s;
transition: .5s;
}
.card:hover{
  -webkit-transform: scale(1.1);
          transform: scale(1.1);
}
.col-sm-4:nth-child(1) .card ,
.col-sm-4:nth-child(1) .card .title .fa{
  background: linear-gradient(-45deg,#f403d1,#64b5f6);

}
.col-sm-4:nth-child(2) .card,
.col-sm-4:nth-child(2) .card .title .fa{
  background: linear-gradient(-45deg,#ffec61,#f321d7);

}
.col-sm-4:nth-child(3) .card,
.col-sm-4:nth-child(3) .card .title .fa{
  background: linear-gradient(-45deg,#24ff72,#9a4eff);

}
.card::before{
  content: '';
  position: absolute;
  bottom: 0;
  left: 0;
  width: 100%;
  height: 40%;
  background: rgba(255, 255, 255, .1);
z-index: 1;
-webkit-transform: skewY(-5deg) scale(1.5);
        transform: skewY(-5deg) scale(1.5);
}
.title .fa{
  color:#fff;
  font-size: 60px;
  width: 100px;
  height: 100px;
  border-radius:  50%;
  text-align: center;
  line-height: 100px;
  -webkit-box-shadow: 0 10px 10px rgba(0,0,0,.1) ;
          box-shadow: 0 10px 10px rgba(0,0,0,.1) ;

}
.title h2 {
  position: relative;
  margin: 20px  0 0;
  padding: 0;
  color: #fff;
  font-size: 28px;
 z-index: 2;
}
.price,.option{
  position: relative;
  z-index: 2;
}
.price h4 {
margin: 0;
padding: 20px 0 ;
color: #fff;
font-size: 60px;
}
.option ul {
  margin: 0;
  padding: 0;

}
.option ul li {
margin: 0 0 10px;
padding: 0;
list-style: none;
color: #fff;
font-size: 16px;
}
.card a {
  position: relative;
  z-index: 2;
  background: #fff;
  color : black;
  width: 150px;
  height: 40px;
  line-height: 40px;
  border-radius: 40px;
  display: block;
  text-align: center;
  margin: 20px auto 0 ;
  font-size: 16px;
  cursor: pointer;
  -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, .1);
          box-shadow: 0 5px 10px rgba(0, 0, 0, .1);

}
.card a:hover{
    text-decoration: none;
}



/*//////////////////////////////////////////////////////////////////
[ FONT ]*/
@font-face {
font-family: Poppins-Regular;
src: url('../fonts/poppins/Poppins-Regular.ttf');
}
@font-face {
font-family: Poppins-Bold;
src: url('../fonts/poppins/Poppins-Bold.ttf');
}
/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/
* {
margin: 0px;
padding: 0px;
box-sizing: border-box;
}
body, html {
    
height: 100%;
font-family: sans-serif;
}
/* ------------------------------------ */
a {
margin: 0px;
transition: all 0.4s;
-webkit-transition: all 0.4s;
-o-transition: all 0.4s;
-moz-transition: all 0.4s;
}
a:focus {
outline: none !important;
}
a:hover {
text-decoration: none;
}
/* ------------------------------------ */
h1,h2,h3,h4,h5,h6 {margin: 0px;}
p {margin: 0px;}
ul, li {
margin: 0px;
list-style-type: none;
}
/* ------------------------------------ */
input {
display: block;
outline: none;
border: none !important;
}
textarea {
display: block;
outline: none;
}
textarea:focus, input:focus {
border-color: transparent !important;
}
/* ------------------------------------ */
button {
outline: none !important;
border: none;
background: transparent;
}
button:hover {
cursor: pointer;
}
iframe {
border: none !important;
}
/*//////////////////////////////////////////////////////////////////
[ Table ]*/
.limiter {
width: 100%;
margin: 0 auto;
}
.container-table100 {
width: 100%;
min-height: 100vh;
display: -webkit-box;
display: -webkit-flex;
display: -moz-box;
display: -ms-flexbox;
display: flex;
align-items: center;
justify-content: center;
flex-wrap: wrap;
padding: 33px 30px;
}
.wrap-table100 {
width: 960px;
border-radius: 10px;
overflow: hidden;
}
.table {
width: 100%;
display: table;
margin: 0;
}
@media screen and (max-width: 768px) {
.table {
display: block;
}
}
.row {
display: table-row;
background: #fff;
}
.row.header {
color: #ffffff;
background: #6c7ae0;
}
@media screen and (max-width: 768px) {
.row {
display: block;
}
.row.header {
padding: 0;
height: 0px;
}
.row.header .cell {
display: none;
}
.row .cell:before {
font-family: Poppins-Bold;
font-size: 12px;
color: #808080;
line-height: 1.2;
text-transform: uppercase;
font-weight: unset !important;
margin-bottom: 13px;
content: attr(data-title);
min-width: 98px;
display: block;
}
}
.cell {
display: table-cell;
}
@media screen and (max-width: 768px) {
.cell {
display: block;
}
}
.row .cell {
font-family: Poppins-Regular;
font-size: 15px;
color: #666666;
line-height: 1.2;
font-weight: unset !important;
padding-top: 20px;
padding-bottom: 20px;
border-bottom: 1px solid #f2f2f2;
}
.row.header .cell {
font-family: Poppins-Regular;
font-size: 18px;
color: #fff;
line-height: 1.2;
font-weight: unset !important;
padding-top: 19px;
padding-bottom: 19px;
}
.row .cell:nth-child(1) {
width: 360px;
padding-left: 40px;
}
.row .cell:nth-child(2) {
width: 160px;
}
.row .cell:nth-child(3) {
width: 250px;
}
.row .cell:nth-child(4) {
width: 190px;
}
.table, .row {
width: 100% !important;
}
.row:hover {
background-color: #ececff;
cursor: pointer;
}
@media (max-width: 768px) {
.row {
border-bottom: 1px solid #f2f2f2;
padding-bottom: 18px;
padding-top: 30px;
padding-right: 15px;
margin: 0;
}
.row .cell {
border: none;
padding-left: 30px;
padding-top: 16px;
padding-bottom: 16px;
}
.row .cell:nth-child(1) {
padding-left: 30px;
}
.row .cell {
font-family: Poppins-Regular;
font-size: 18px;
color: #555555;
line-height: 1.2;
font-weight: unset !important;
}
.table, .row, .cell {
width: 100% !important;
}
}
</style>