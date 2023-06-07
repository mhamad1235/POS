<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Alert;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Sell;
use App\Models\Bank;
use App\Models\Casher;
use App\Models\Company;
use App\Models\Deptcompany;
use App\Models\productinfo;
use Illuminate\Support\Arr;
use App\Models\Type;
use Session;
use Carbon\Carbon;
use Route;

use Illuminate\Support\Str;
class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('condition');
    }


    
        public function adminDashboard()
  {
 $date= date('Y-m-d');
$welcom=session()->get('welcome');
$ex=Product::ALL()->where('expired','<=',$date)->sum('buy');
$exx=Product::ALL()->where('expired','<=',$date);
$total_num=Product::ALL()->sum('number');
    $sell=Sell::All();
    $bank=Bank::All()->where('name','bank')->first();
 $produtcount=Product::All()->where('expired','>',$date)->sum('number');
 $excount=Product::All()->where('expired','<',$date)->sum('number');
 $type=Product::ALL()->where('expired','>',$date);
    $profit=$sell->sum('total_profit');
    $numcus=Customer::all();
    $numcom=Company::all();
    $numcasher=Casher::all();
      return view('adminDashboard',['profit'=>$profit,'bank'=>$bank,'welcom'=>$welcom,
      'ex'=>$ex,'exx'=>$exx,
      "total_num"=>$total_num,'produtcount'=>$produtcount,
    'excount'=>$excount,'type'=>$type,'numcus'=>$numcus,'numcom'=>$numcom
,'numcasher'=>$numcasher
]);
  }
  public function casher($id)
  {
if (!Session::has('lang')) {
   return redirect('/');
}
$welcom=Casher::ALL()->where('id',$id)->first();
    $sell=Sell::All();
    $bank=Bank::All()->where('name','bank')->first();
    $profit=$sell->sum('total_profit');
      return redirect('/adminDashboard/sell');
  }
    public function login()
    {
  if (Session::has('lang')) {
   return redirect('casher/'.Session::get('lang')); 
  }
        return view('login');
    }
    public function loginval(Request $request)
    {
        $validate=  $request->validate([
    'username' => 'required|min:5',
    'password' => 'required'
  ],[
    'username.required' => 'username is needed.',
    'username.min' => 'username must have 5 char.',
  ]);
$casher= Casher::ALL()->where('name',$request['username'])->first();
  $username = $request->input('username');
  $password = $request->input('password');
if($username=='admin' && $password==4556){
return redirect('/adminDashboard');

}
if($request['username']==$casher->name && $request['password']==$casher->password){
    Session::put('lang',$casher->id);
    return redirect('/casher/'.$casher->id)->with('welcome ','hhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhhh');
    }else{
        return back()->with('messege','Your Password or username is incorect');
    }
}
  
    public function index()
    {
        return view('home');
    }
    public function logout()
    {
        Session::forget('lang');
        return redirect('/');
    }
    public function sell(Request $request)
    {  $date = date('Y-m-d');
        if (Session::has('lang')) {
            $sell= Sell::orderBy('id','desc')->where('casher_id',Session::get('lang'))->paginate(10);
        }else{ $sell= Sell::orderBy('id','desc')->paginate(5);}
       
        if ($request->type) {
            $sell = Sell::where('date', "LIKE",'%'.$request->type.'%')->paginate(5);
        }
        $p=Sell::ALL();
       if (!$p->count()==0) {
      $spe= Sell::all()->last();
      if ($spe->casher_id != -1) {
        $cashiername=Casher::where('id',$spe->casher_id)->first();
      }else{
        $cashiername=null;
      }
    }else{
        $cashiername=null;
        $spe=[];
    }
      $product=Product::All();
      $zero=Product::where('number','0')->get();
      for ($i=0; $i <$zero->count() ; $i++) { 
        $contains = Str::contains($zero[$i]['name'], 'zero'); 
        if ($zero[$i]['number']==0 && !$contains) {
            $zero[$i]['name']=$zero[$i]['name'].' '.'zero';
            $zero[$i]->save();  
        }
      }
      $ex=Product::where('expired','<',$date)->get();
for ($i=0; $i <$ex->count() ; $i++) {
    $contains = Str::contains($ex[$i]['name'], 'expired'); 
    if ( !$contains) {
    $ex[$i]['name']=$ex[$i]['name'].' '.' expired';
    $ex[$i]->save();}   
}$customer=Customer::ALL();
if (Session::has('lang')) {
  $welcom=Casher::where('id',Session::get('lang'))->first();
}else{
    $welcom=null;
}
        return view('sell',['p'=>$p,'cashiername'=>$cashiername,'customer'=>$customer,'product'=>$product,'sells'=>$sell,'date'=>$date,'wasl'=>$spe,'welcom'=>$welcom]);
    }
    public function selll(Request $request)
    {
        if (Session::has('lang')) {
            $sell= Sell::orderBy('date','desc')->where('casher_id',Session::get('lang'))->paginate(10);
        }else{ $sell= Sell::orderBy('date','desc')->paginate(10);}
       
        if ($request->type) {
            $sell = Sell::where('name', "LIKE",'%'.$request->type.'%')->paginate(10);
        }
        $product=Product::All();
      
        $customer=Customer::ALL();
        return view('selll',['customer'=>$customer,'product'=>$product,'sells'=>$sell]);
    }
    public function customer(Request $request)
    { $customer=Customer::ALL();
        $mhamad=[];
      if ($request->dept) {
        $mhamad=Sell::where('customer',$request->dept)->where('dept','>',0)->get();
      
      }
        
      
        return view('customer',['customer'=>$customer,'mhamad'=>$mhamad]);
    }
    public function product(Request $request)
    {$date = date('Y-m-d');
      $r=Product::all();
       $company=Company::all();
        $product=Product::paginate(10);
        $a1=Product::ALL()->last();
      if ($r->count()!=0) {
        # code...
      
        $a2=Product::where('id_wasl',$a1->id_wasl)->get();
$sum=$a2->sum('buy');
      }else{
        $a2=[];
        $sum=0;
        $a1=['id_wasl'=>0,];
      }
$array=[];
for ($i=0; $i <count($a2) ; $i++) { 
    $array[$i]=$a2[$i]['buy']*$a2[$i]['number'];
}
$sum=array_sum($array);
      
        $pro=Productinfo::ALL();
        if ($request->type) {
         
            $product=Product::ALl()->where('name', 'LIKE', "$request->type");
            
        }
     
        
        return view('/product',['product'=>$product,'date'=>$date,'company'=>$company,'pro'=>$pro,'a2'=>$a2,'sum'=>$sum,'a1'=>$a1]);
    }
    public function productadd(Request $request)
    {
        $date = date('Y-m-d');
         $request->validate([
            'name' => 'required',
            'type' => 'required',
            'barcode' => 'required',
            'bussinessname' => 'required',
            'buy' => 'required',
            'sell' => 'required',
            'number' => 'required',
            'date' => 'required',
        ]);      $bank=Bank::All()->where('name','bank')->first();
        if ($bank->value < $request->buy) {
            return back()->with('error1','You have only '.$bank->value.'$');
        }
        else{
        $product=new Product();
        $product->name=$request['name'];
        $product->type=$request['type'];
        $product->barcode=$request['barcode'];
        $product->bussinessname=$request['bussinessname'];
        $product->buy=$request['buy'];
        $product->expired=$request['date'];
        $a=$request['buy']*$request['number'];   
        $bank->value-=$a;     
        $bank->save();
        $product->sell=$request['sell'];
        $product->number=$request['number'];
        $test=$product->save();}
if ($test) {
return back();
}
       
    }

    public function customeradd(Request $request)
    {
        $customer=new Customer();
         $request->validate([
            'name' => 'required|unique:customer,name',
            'location' => 'required',
            'phonenumber' => 'required',
            'gender' => 'required',
         
        ]);
        $customer=new Customer();
        $customer->name=$request['name'];
        $customer->location=$request['location'];
        $customer->phonenumber=$request['phonenumber'];
        $customer->gender=$request['gender'];
        $test=$customer->save();
if ($test) {
return back();
}
       
    }
    public function sellproduct(Request $request)
    {$date = date('Y-m-d');
       
     
$request->validate([
   'test' => 'required',
   'number' => 'required',
  

]);
if(Session::has('lang')){
    $id=Session::get('lang');
}else{
    $id=-1;
}

$con=Product::where('id',$request['id_product'])->first();
$bank=Bank::All()->where('name','bank')->first();
$sell=new Sell();
/**if ($con->number<$request['index']) {
    $error='You Have Only '.$con->number;
    return back()->with('error',$error);

}elseif($con->expired<=$date){ $error='Expired From '.$con->expired;
    return back()->with('error',$error);}
else{*/
    $con->number-=$request['index'];
    $con->save();
    $sell->casher_id=$id;   
$sell->p_id=0;


$sell->wasl=$request['test'];
$sell->customer=$request['customer'];
$sell->index=$request['index'];
$sell->type=$con->type;
$sell->barcode=$con->barcode;
$sell->name=$con->name;
if ($request->all) {
    $sell->total_profit=( $con->sell-$con->buy)*$request['index'];
   $bank->value+=$con->sell*$request['index'];
    $sell->payed="ALL";
    $sell->dept="None";
    $bank->save();
}
if ($request->checkdept) {
    $sell->total_profit=(($con->buy*$request['index'])-$request['dept']);
    $sell->payed=$request->dept;
   $bank->value+=$request->dept;
   $bank->save();
}
if ($request->dept) {
    $option = Customer::where('name', '=', $request['customer'])->first();
$sum = Sell::where('customer', '=', $request['customer'])->sum('dept');
    $x=$con->sell*$request['index'];
    $sell->dept=$x-$request->dept;
    $option->dept+=$x-$request->dept;
    $option->save();
  
   
}

$test=$sell->save();
if ($test) {
return back();}
}

    public function sellproducttest(Request $request)
    {
        $request->validate([
            'customer' => 'required',
            'test' => 'required',
           
           
        ]); 
        $date = date('Y-m-d');
     
        $sell=new Sell();
     
        $option = Customer::where('name', '=', $request['customer'])->first();
        $bank=Bank::All()->where('name','bank')->first();
      

   $array=[];
   $array1=[];
   $array3=[];
   $sum=Product::whereIn('name',$request['test'])->get();
   
   for ($i=0; $i < $sum->count();$i++) { 
    if ($sum[$i]->number < $request->quan[$i]) {
        return back()->with('noty','you didnt have only : '.$sum[$i]->number.' Product  of '.$sum[$i]->name  );
       
       }else{
    $sum[$i]['number']=$sum[$i]['number']-$request['quan'][$i];
    $array[$i]=$sum[$i]['sell']*$request['quan'][$i];
    $array1[$i]=$sum[$i]['buy']*$request['quan'][$i];
    $array3[$i]=$sum[$i]['sell'];
    $sum[$i]->save();}
       }


   if ($request->all) {
    $bank->value+=array_sum($array);
    $sell->nrx_tak=$array3;
    $sell->payed=array_sum($array);
   $sell->total_profit=(array_sum($array)-array_sum($array1));
   $bank->save();}
        elseif ($request->checkdept) {
            $sell->nrx_tak=$array3;
            $bank->value+=$request->dept;
            $bank->save();
            $option->dept+=(array_sum($array)-$request->dept);
            $option->save();
            $sell->total_profit=(array_sum($array)-array_sum($array1))-$request->dept;
            $sell->dept=(array_sum($array)-$request->dept);
            $sell->payed=$request->dept;
        }
      
        $sell->name_product=$request['test'];
        $sell->quantity=$request['quan'];
        $sell->name=0;
        $sell->type=0;
        $sell->customer=$request['customer'];
        $sell->index=0;
        $sell->p_id=0;
       if (Session::has('lang')) {
        $sell->casher_id=Session::get('lang');
       }else{
        $sell->casher_id=-1;
       }
        $sell->date=$date;
        $sell->barcode=0;
       if ($sell->save() ) {
     return back();
       }

    }
    
    public function wasl($id){
        $wasl=Sell::all()->where('id',$id)->first();
        return view ('wasl',['wasl'=>$wasl]);
    }
    public function buyproducttest(Request $request){
    $request->validate([
        'com'=>'required',
        'type'=>'required',
        'name'=>'required',
        'buy'=>'required',
        'sell'=>'required',
        'barcode'=>'required',
        'date'=>'required',
        'quan'=>'required',
        'datenow'=>'required',
        'id_wasl'=>'required |unique:product,id_wasl',
    ]);
    $trick=new Deptcompany();
    $trick->name=$request->name;
    $trick->type=$request->type;
    $trick->price=$request->buy;
    $trick->number=$request->quan;
    $trick->id_wasl=$request->id_wasl;
    $trick->company=$request->com;
    $trick->barcode=$request->barcode;
    $trick->date=$request->datenow;
   
    $array1=[];
    
 
    for ($i=0; $i < count($request['buy']);$i++) { 
     $array1[$i]=$request['buy'][$i]*$request['quan'][$i];
    
    }
   
    if ($request->all) {

     $trick->payed=array_sum($array1);
}
elseif ($request->dept) {
    $trick->payed=$request->dept;
    $trick->dept=(array_sum($array1)-$request->dept);
  
}
    $trick->save();
      $company=$request->com;
      $type=$request->type;
      $datenow=$request->datenow;
      $name=$request->name;
      $buy=$request->buy;
      $sell=$request->sell;
      $barcode=$request->barcode;
      $date=$request->date;
      $quan=$request->quan;
      $id_wasl=$request->id_wasl;
      if ($request->dept) {
        $dept=$request->dept;
        $compamy=Company::where('name',$request->com)->first();
        $compamy->dept=($compamy->dept)+(array_sum($array1)-$request->dept);
        $compamy->save();
      }else{
        $dept=0;
      }
      $a=0;
      for ($i=0; $i <count($name); $i++) { 
        
        $a=$a+$buy[$i]*$quan[$i];
      
       $ins[$i]=[
        'bussinessname'=> $company,
        'name'=> $name[$i],
        'barcode'=> $barcode[$i],
        'number'=> $quan[$i],
        'buy'=> $buy[$i],
        'sell'=> $sell[$i],
        'expired'=> $date[$i],
        'type'=>$type[$i],
        'id_wasl'=>$id_wasl,
        'date'=>$datenow,
        'total'=>$quan[$i]*$buy[$i],
        'dept'=>0

       ];
       if ($i == count($name)-1) {
        $ins[$i]=[
            'bussinessname'=> $company,
            'name'=> $name[$i],
            'barcode'=> $barcode[$i],
            'number'=> $quan[$i],
            'buy'=> $buy[$i],
            'sell'=> $sell[$i],
            'expired'=> $date[$i],
            'type'=>$type[$i],
            'id_wasl'=>$id_wasl,
            'date'=>$datenow,
            'total'=>$quan[$i]*$buy[$i],
          'dept'=>$dept
    
           ];
           
       }
       $product=Product::insert($ins[$i]);
     
      }
      $bank=Bank::where('id',1)->first();
      $bank->value=$bank->value-$a;
      $bank->save();
      if ($product) {
        return back();
          }
    }
    public function company(Request $request){
     
        if ($request->dept) {
           
            $mhamad=Deptcompany::where('company',$request->dept)->where('dept','>','0')->get();
      $sum=Deptcompany::where('company',$request->dept)->sum('dept');
    
        }else{
$sum=0;
            $mhamad=[];
        }

        $customer=Company::ALL();
        return view('company',['customer'=>$customer,'mhamad'=>$mhamad,'sum'=>$sum]);
    }
    public function productinfo(){
        $pro=Productinfo::ALL();
        $type=Type::ALL();
        return view('productinfo',['pro'=>$pro,'type'=>$type]);
    }
    public function companyadd(Request $request)
    {
        $customer=new Company();
         $request->validate([
            'name' => 'required|unique:customer,name',
            'location' => 'required',
            'phonenumber' => 'required',
          
         
        ]);
        $customer=new Company();
        $customer->name=$request['name'];
        $customer->location=$request['location'];
        $customer->phonenumber=$request['phonenumber'];
        $test=$customer->save();
if ($test) {
return back();
}
}
public function addtype(Request $request){
    $request->validate([
'name'=>'required'
    ]);
$a=new Type();
$a->name=$request->name;
$m=$a->save();
if ($m) {
   return back();
}
}
public function addproductinfo(Request $request)
{
    $productinfo=new Productinfo();
     $request->validate([
        'name' => 'required|unique:productinfo,name',
        'type' => 'required',
        'barcode' => 'required',
      
     
    ]);
  
    $productinfo->name=$request['name'];
    $productinfo->type=$request['type'];
    $productinfo->barcode=$request['barcode'];
    $test=$productinfo->save();
if ($test) {
return back();
}
}
public function delete($id,Request $request){
    $productinfo=new Productinfo();
    $customer=new Customer();
    $casher=new Casher();
    $com=new Company();
    $cus = Str::contains(url()->previous() , 'customer');
    $cash = Str::contains(url()->previous() , 'cashier');
    $pro = Str::contains(url()->previous() , 'productinfo');
    $hama = Str::contains(url()->previous() , 'company');
    if($cus){
      $b=$customer::find($id)->delete();
    return back();
}
elseif($pro){
    $b=$productinfo::find($id)->delete();
    return back();
}
elseif($cash){
    $bb=$casher::find($id)->delete();
    if ($bb) {
        return back();    
    }
   
}
elseif($hama){
$x=$com::find($id)->delete();
if ($x) {
    return back();    
}
}
}
public function cashieradd(Request $request){
    $request->validate([
        'name'=>'required',
        'gender'=>'required',
        'location'=>'required',
        'phonenumber'=>'required',
        'password'=>'required',
    ]);
    $casher=new Casher();
    $casher->name=$request->name;
    $casher->location=$request->location;
    $casher->phonenumber=$request->phonenumber;
    $casher->gender=$request->gender;
    $casher->password=$request->password;
    $x=$casher->save();
    if ($x) {
        return back();
    }
}

public function update($id){
    $type=Type::all();
    $url=url()->previous();
      $pro = Str::contains(url()->previous() , 'productinfo');
      if ($pro) {
        $cus=Productinfo::where('id',$id)->first();
     
      }else{
        
 $cus=Customer::where('id',$id)->first();}
    return view('update',['cus'=>$cus,'type'=>$type,'url'=>$url]);
}
public function up(Request $request){
    $pro = $request->url;
    $procheck=Str::contains($pro , 'productinfo');
   
    if (!$procheck) {
$customer= Customer::where('id',$request->id)->first();
$customer->name=$request->name;
$customer->location=$request->location;
$customer->phonenumber=$request->phonenumber;
$customer->gender=$request->gender;
$customer->dept=$customer->dept-$request->dept;
$a=$customer->save();
if ($a) {
    return redirect('/adminDashboard/customer');
}
}
else{
    $p= Productinfo::where('id',$request->id)->first();
    $p->name=$request->name;
$p->type=$request->type;
$p->barcode=$request->barcode;
$b=$p->save();
if ($b) {
    return redirect('/productinfo');
}
}
}
public function profit(Request $request){
  
   
    $date=date('Y-m-d');
    $mutable = Carbon::now();
    $dt = Carbon::now()->subMonth();
   
    if ($request->today) {

        $result = Deptcompany::where('date',$request->today)->get();
        $result2 = Sell::where('date',$request->today)->get();
        $array_type=['mhamad'];
        $total_product=0;
        $array_type_buy=[];
        for ($i=0; $i <$result->count() ; $i++) {  
         for ($j=0; $j < count($result[$i]['number']) ; $j++) { 
            $total_product+=$result[$i]['number'][$j];
            if(!in_array( $result[$i]['name'][$j],$array_type_buy))
            {
                array_push($array_type_buy,$result[$i]['name'][$j]);
            
            }
           
        }}
        


        $array_type=[];
        $total_product_sell=0;
        for ($ii=0; $ii <$result2->count() ; $ii++) {  
         for ($jj=0; $jj < count($result2[$ii]['quantity']) ; $jj++) { 
            $total_product_sell+=$result2[$ii]['quantity'][$jj];
            if(!in_array( $result2[$ii]['name_product'][$jj],$array_type))
            {
                array_push($array_type,$result2[$ii]['name_product'][$jj]);
            
            }
        }}
     
$wargrtn=$result2->sum('payed');

$qarzyxalk=$result2->sum('dept');
$qazanj=$result2->sum('total_profit');
        $draw=$result->sum('payed');
        $qarzyxot=$result->sum('dept');
    }
    elseif($request->last){
        $result = Deptcompany::whereBetween('date',[$dt,$date])->get();
        $result2 = Sell::whereBetween('date',[$dt,$date])->get();

        $total_product=0;
        for ($i=0; $i <$result->count() ; $i++) {  
         for ($j=0; $j < count($result[$i]['number']) ; $j++) { 
            $total_product+=$result[$i]['number'][$j];
           
        }}
        $array_type=[];
        $total_product_sell=0;
        for ($ii=0; $ii <$result2->count() ; $ii++) {  
         for ($jj=0; $jj < count($result2[$ii]['quantity']) ; $jj++) { 
            $total_product_sell+=$result2[$ii]['quantity'][$jj];
            if(!in_array( $result2[$ii]['name_product'][$jj],$array_type))
            {
                array_push($array_type,$result2[$ii]['name_product'][$jj]);
            
            }
        }}
        $array_type_buy=[];
        for ($i=0; $i <$result->count() ; $i++) {  
         for ($j=0; $j < count($result[$i]['number']) ; $j++) { 
            $total_product+=$result[$i]['number'][$j];
            if(!in_array( $result[$i]['name'][$j],$array_type_buy))
            {
                array_push($array_type_buy,$result[$i]['name'][$j]);
            
            }
           
        }}
$wargrtn=$result2->sum('payed');

$qarzyxalk=$result2->sum('dept');
$qazanj=$result2->sum('total_profit');
        $draw=$result->sum('payed');
        $qarzyxot=$result->sum('dept');
    }
    elseif ($request->start) {
        $result = Deptcompany::whereBetween('date',[$request->start,$request->to])->get();
        $result2 = Sell::whereBetween('date',[$request->start,$request->to])->get();
        $total_product=0;
        
        for ($i=0; $i <$result->count() ; $i++) {  
         for ($j=0; $j < count($result[$i]['number']) ; $j++) { 
            $total_product+=$result[$i]['number'][$j];
        }}
        $total_product_sell=0;
        $array_type=[];
        for ($ii=0; $ii <$result2->count() ; $ii++) {  
         for ($jj=0; $jj < count($result2[$ii]['quantity']) ; $jj++) { 
            $total_product_sell+=$result2[$ii]['quantity'][$jj];
            if(!in_array( $result2[$ii]['name_product'][$jj],$array_type))
            {
                array_push($array_type,$result2[$ii]['name_product'][$jj]);
            
            }
        }}
        $array_type_buy=[];
        for ($i=0; $i <$result->count() ; $i++) {  
         for ($j=0; $j < count($result[$i]['number']) ; $j++) { 
            $total_product+=$result[$i]['number'][$j];
            if(!in_array( $result[$i]['name'][$j],$array_type_buy))
            {
                array_push($array_type_buy,$result[$i]['name'][$j]);
            
            }
           
        }}
$wargrtn=$result2->sum('payed');

$qarzyxalk=$result2->sum('dept');
$qazanj=$result2->sum('total_profit');
        $draw=$result->sum('payed');
        $qarzyxot=$result->sum('dept');
    }
    else{
        $wargrtn=0;

        $qarzyxalk=0;
        $qazanj=0;
                $draw=0;
                $qarzyxot=0;
                $total_product=0;
                $total_product_sell=0;
                $array_type=[];
                $array_type_buy=[];
    }
    return view ('profit',['date'=>$date,
    'wargrtn'=>$wargrtn,'qarzyxalk'=>$qarzyxalk,
    'qazanj'=>$qazanj,'draw'=>$draw,'qarzyxot'=>$qarzyxot,
    'total_product'=>$total_product,'total_product_sell'=>$total_product_sell,
    'dt'=>$dt,'array_type'=>$array_type,
'array_type_buy'=>$array_type_buy]);
}
public function cashier(){
    $cashier=Casher::all();
    return view ('cashier',['cashier'=>$cashier]);
}
public function updatecasher($id){
    $cashier=Casher::where('id',$id)->first();
    return view ('casherup',['casher'=>$cashier]);
}
public function table(Request $request){
    $date=date('Y-m-d');

    if ($request->expired) {
        $product=Product::where('expired','<',$date)->get();
    }
    elseif($request->zero){
        $product=Product::where('number','=',0)->get();
    }
    elseif($request->search){
        $product=Product::where('barcode','=',$request->search)->get();
    }
    else{
    $product=Product::where('expired','>',$date)->where('number','!=',0)->get();}
    return view('tablepro',['pro'=>$product]);
}
public function upcash(Request $request){
$casher=Casher::where('id',$request->id)->first();
$casher->name=$request->name;
$casher->location=$request->location;
$casher->phonenumber=$request->phonenumber;
$casher->password=$request->password;
$x=$casher->save();
if ($x) {
    return redirect('/adminDashboard/cashier');
}
}
public function comup(Request $request){
$com=Company::where('id',$request->id)->first();
$com->name=$request->name;
$com->location=$request->name;
$com->phonenumber=$request->phonenumber;
$com->dept=($com->dept)-($request->dept);
$mh=$com->save();
if ($mh) {
    return redirect('/company');
}
}
public function comupp($id){
$com=Company::where('id',$id)->first();
return view('comup',['casher'=>$com]);
}
public function sell_bar(Request $request){
    return 'hi';

}
}